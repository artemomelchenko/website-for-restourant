<?php

use yii\helpers\Html;

?>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <?= Html::a('<i class="fa fa-sign-out-alt" aria-hidden="true"></i>', ['site/logout'], ['data' => ['method' => 'post']]) ?>
            <?php Html::endForm() ?>

        </li>
    </ul>
</nav>