<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
/* @var $this yii\web\View */
/* @var $model common\models\Recipes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="recipes-form">
    <div class="card">
        <div class="card-body">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6, 'maxlength' => true]) ?>

    <?= $form->field($model, 'img')->widget(FileInput::classname(), [
        'pluginOptions' => [
            'initialPreview'=>[
                isset($model->img) ? Html::img("/img/recipes/" . $model->img, ['style' => 'width:200px;']) : ''
            ],
            'showPreview' => true,
            'showCaption' => false,
            'showRemove' => false,
            'showUpload' => false,
            'maxImageWidth' => 539,
            'maxImageHeight' => 359,
            'allowedFileExtensions'=>['jpg','jpeg','gif','png'],
        ]
    ]); ?>



    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
        </div>
</div>
</div>