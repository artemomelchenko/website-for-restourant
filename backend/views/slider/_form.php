<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
/* @var $this yii\web\View */
/* @var $model common\models\Slider */
/* @var $form yii\widgets\ActiveForm */


$params = [
    'prompt' => 'Оберіть посилання'
];

$items =
    [
        0 => [
            'link' => '#menu',
            'name' => 'Головна "Меню"',
        ],
        1 => [
            'link' => '#reserv',
            'name' => 'Головна "Забронювати стіл"',
        ],
        2 => [
            'link' => '#recipe',
            'name' => 'Головна "Рецепти"',
        ],
        3 => [
            'link' => '#calculation',
            'name' => 'Головна "Розрахунок банкету"',
        ],
        4 => [
            'link' => '#gallery',
            'name' => 'Головна "Фотогалерея"',
        ],
        5 => [
            'link' => '#about',
            'name' => 'Головна "Про нас"',
        ],
        6 => [
            'link' => '#footer',
            'name' => 'Головна "Контакти"',
        ],
        7 => [
            'link' => '/menu',
            'name' => 'Сторінка "Меню"',
        ],
    ];

$items = \yii\helpers\ArrayHelper::map($items,'link','name');


?>

<div class="slider-form">
    <div class="card">
        <div class="card-body">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'button_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'button_link')->dropDownList($items, $params) ?>

    <?= $form->field($model, 'main_img')->widget(FileInput::classname(), [
        'pluginOptions' => [
            'initialPreview'=>[
                isset($model->main_img) ? Html::img("/img/slider/" . $model->main_img, ['style' => 'width:200px;']) : ''
            ],
            'showPreview' => true,
            'showCaption' => false,
            'showRemove' => false,
            'showUpload' => false,
            'maxImageWidth' => 664,
            'maxImageHeight' => 416,
            'allowedFileExtensions'=>['png'],
        ]
    ]);?>

    <?=  $form->field($model,   'background_img')->widget(FileInput::classname(), [
        'pluginOptions' => [
            'initialPreview'=>[
                isset($model->background_img) ? Html::img("/img/slider/" . $model->background_img, ['style' => 'width:200px;']) : ''
            ],
            'showPreview' => true,
            'showCaption' => false,
            'showRemove' => false,
            'showUpload' => false,
            'maxImageWidth' => 570,
            'maxImageHeight' => 504,
            'allowedFileExtensions'=>['png'],
        ]
    ]); ?>

<!--    --><?//= $form->field($model, 'pages_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
        </div>
</div>
</div>