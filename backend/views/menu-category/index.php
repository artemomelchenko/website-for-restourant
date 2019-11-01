<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MenuCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Menu Categories');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-category-index">
    <div class="card">
        <div class="card-body">
    <h1><?= Html::encode($this->title) ?></h1>

<!--    <p>-->
<!--        --><?//= Html::a(Yii::t('app', 'Create Menu Category'), ['create'], ['class' => 'btn btn-success']) ?>
<!--    </p>-->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
            [
                'attribute' => 'img',
                'format' => 'raw',
                'value' => function ($data) {
                    return Html::img('/img/' . $data->img, [
                        'alt' => 'Картинка',
                        'style' => 'width:150px;'
                    ]);
                },
            ],
//            'pages_id',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a(
                            '<span class="glyphicon glyphicon-eye-open"></span>',
                            '/admin/menu-category/menu?id=' . $model->id);
                    },
                ],
            ],
        ],
    ]); ?>

        </div>

        </div>
</div>
