<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MenuBlock */

$this->title = Yii::t('app', 'Create Menu Block');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Menu Blocks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-block-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
