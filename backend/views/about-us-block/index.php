<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AboutUsBlockSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'About Us Blocks');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-us-block-index">
    <div class="card">
        <div class="card-body">
            <h1><?= Html::encode($this->title) ?></h1>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

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
                    'title',
                    'text',
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'template' => '{view} {update}',
                    ],
                ],
            ]); ?>
        </div>
    </div>

</div>
