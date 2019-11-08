<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\LeadsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Leads');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="leads-index">
    <div class="card">
        <div class="card-body">
            <h1><?= Html::encode($this->title) ?></h1>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
//                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    [
                        'attribute' => 'page_id',
                        'format' => 'raw',
                        'value' => function($model){
                            if ($model->page_id == 1){
                                return 'Головна';
                            }elseif ($model->page_id == 2){
                                return 'Меню';
                            }
                        },
                    ],
                    [
                        'attribute' => 'section',
                        'format' => 'raw',
                        'value' => function($model){
                            if ($model->section == 'reserv'){
                                return '"Забронювати стіл"';
                            }elseif ($model->section == 'footer'){
                                return '"Контакти"';
                            }
                        },
                    ],
                    'name',
                    'phone',
                    [
                        'attribute' => 'datetime',
                        'format' => 'raw',
                        'value' => function($model){
                            if (!empty($model->datetime))
                                return Yii::$app->formatter->format($model->datetime, 'datetime');
                            else return '';
                        },
                    ],
                    [
                        'attribute' => 'create_at',
                        'format' => 'raw',
                        'value' => function($model){
                            return Yii::$app->formatter->format($model->create_at, 'datetime');
                        },
                    ],
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'template' => '{view}',
                        'buttons' => [
                            'view' => function ($url, $model) {
                                return Html::a(
                                    '<span class="glyphicon glyphicon-eye-open"></span>',
                                    '/admin/leads/view?id=' . $model->id);
                            },
                        ],
                    ],
                ],
            ]); ?>
        </div>
    </div>

</div>
