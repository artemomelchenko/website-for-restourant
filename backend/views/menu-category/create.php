<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MenuCategory */

$this->title = Yii::t('app', 'Create Menu Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Menu Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-category-create">
    <div class="card">
        <div class="card-body">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'id' => $id,
    ]) ?>
        </div>
</div>
</div>