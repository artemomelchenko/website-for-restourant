<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Leads */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="settings-view">

    <div class="card">
        <div class="card-body">

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [

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
                            return Yii::$app->formatter->format($model->datetime, 'datetime');
                        },
                    ],
                    'people',
                    'comment',
                    [
                        'attribute' => 'create_at',
                        'format' => 'raw',
                        'value' => function($model){
                            return Yii::$app->formatter->format($model->create_at, 'datetime');
                        },
                    ],
                ],
            ]) ?>
        </div>
    </div>
</div>
