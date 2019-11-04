<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\GallerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Galleries');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-index">
    <div class="card">
        <div class="card-body">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Gallery'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',

            [
                'label' => 'Картинка головна',
                'format' => 'raw',
                'value' => function ($data) {
                    return Html::img(  '/img/gallery/'.$data->img, [
                        'alt' => 'Картинка',
                        'style' => 'width:150px;'
                    ]);
                },
            ],
            [
                'label' => 'Картинка головна',
                'format' => 'raw',
                'value' => function ($data) {
                    return Html::img(  '/img/gallery/'.$data->small_img, [
                        'alt' => 'Картинка',
                        'style' => 'width:150px;'
                    ]);
                },
            ],
//            'pages_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
        </div>
        </div>
</div>
