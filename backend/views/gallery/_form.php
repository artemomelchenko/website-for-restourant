<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
/* @var $this yii\web\View */
/* @var $model common\models\Gallery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gallery-form">
    <div class="card">
        <div class="card-body">
    <?php $form = ActiveForm::begin(); ?>

    <?=  $form->field($model, 'img')->widget(FileInput::classname(), [
        'pluginOptions' => [
            'initialPreview'=>[
                isset($model->img) ? Html::img("/img/" . $model->img, ['style' => 'width:200px;']) : ''
            ],
            'showPreview' => true,
            'showCaption' => false,
            'showRemove' => false,
            'showUpload' => true
        ]
    ]); ?>

    <?= $form->field($model, 'pages_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
