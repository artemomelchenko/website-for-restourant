<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Slider */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sliders'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="slider-view">
    <div class="card">
        <div class="card-body">
            <h1><?= Html::encode($this->title) ?></h1>

            <p>
                <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                        'method' => 'post',
                    ],
                ]) ?>
            </p>

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'title',
                    'text',
                    'button_text',
                    'button_link',
                    [
                        'attribute' => 'main_img',
                        'format' => 'raw',
                        'value' => function ($data) {
                            return Html::img('/img/slider/' . $data->main_img, [
                                'alt' => 'Картинка',
                                'style' => 'width:150px;'
                            ]);
                        },
                    ],
                    [
                        'attribute' => 'background_img',
                        'format' => 'raw',
                        'value' => function ($data) {
                            return Html::img('/img/slider/' . $data->background_img, [
                                'alt' => 'Картинка',
                                'style' => 'width:150px;'
                            ]);
                        },
                    ],

                ],
            ]) ?>
        </div>
    </div>
</div>