<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MenuBlockSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Menu Blocks');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-block-index">
    <div class="card">
        <div class="card-body">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            [
                'attribute' => 'img',
                'format' => 'raw',
                'value' => function ($data) {
                    return Html::img(  '/img/'.$data->img, [
                        'alt' => 'Картинка',
                        'style' => 'width:150px;'
                    ]);
                },
            ],
            'text',
//            'pages_id',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update}',
            ],
        ],
    ]); ?>
        </div>
    </div>
</div>
