<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\MenuBlock */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Menu Blocks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="menu-block-view">
    <div class="card">
        <div class="card-body">

            <p>
                <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            </p>

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
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
                    'text',
                ],
            ]) ?>
        </div>
    </div>
</div>
