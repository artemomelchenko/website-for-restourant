<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
/* @var $this yii\web\View */
/* @var $model common\models\Slider */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="slider-form">
    <div class="card">
        <div class="card-body">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'button_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'button_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'main_img')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
    ]);?>

    <?=  $form->field($model,   'background_img')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
    ]); ?>

    <?= $form->field($model, 'pages_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
        </div>
</div>
</div>