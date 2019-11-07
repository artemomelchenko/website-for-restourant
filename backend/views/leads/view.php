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

                    'page_id',
                    'section',
                    'name',
                    'phone',
                    'datetime',
                    'people',
                    'comment',
                    'create_at',
                ],
            ]) ?>
        </div>
    </div>
</div>
