<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AboutUsBlock */

$this->title = Yii::t('app', 'Create About Us Block');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'About Us Blocks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-us-block-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
