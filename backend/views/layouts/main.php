<?php

/* @var $this \yii\web\View */

/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="<!--hold-transition sidebar-mini-->">
<?php $this->beginBody() ?>
<div class="wrapper">
    <?php if (Yii::$app->user->identity): ?>
        <?= $this->render('header') ?>
        <?= $this->render('left') ?>
    <?php endif; ?>

    <?php if (Yii::$app->user->identity): ?>
        <div class="content-wrapper">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    <?php endif; ?>

    <?php if (Yii::$app->user->isGuest): ?>
        <?= $content ?>
    <?php endif; ?>

    <?php if (Yii::$app->user->identity): ?>

        <?= $this->render('footer') ?>
    <?php endif; ?>

</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
