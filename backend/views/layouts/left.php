<?php
//\yii\helpers\VarDumper::dump(Yii::$app->controller->id,10,1);

$menu = \common\models\Menu::find()->all();
?>
<aside class="main-sidebar elevation-4 sidebar-light-primary">
    <a href="/admin/" class="brand-link">
        <span class="brand-text font-weight-light"> Кампана админ панель</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="/admin/" class="nav-link <?= Yii::$app->controller->id == 'leads' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Ліди
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview <?= Yii::$app->controller->id == 'slider' || 'recipes' || 'gallery' ? 'menu-open' : 'menu' ?>">
                    <a href="#" class="nav-link <?= Yii::$app->controller->id == 'slider' || 'recipes' || 'gallery' ? 'menu-open'  : 'menu' ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Головна
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/slider" class="nav-link <?= Yii::$app->controller->id == 'slider' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Слайдер</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/recipes" class="nav-link <?= Yii::$app->controller->id == 'recipes' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Рецепт</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/gallery" class="nav-link <?= Yii::$app->controller->id == 'gallery' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Галерея</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/admin/menu" class="nav-link <?= Yii::$app->controller->id == 'menu-category' ? 'active' : '' ?>">
                        <i class="fas fa-tools"></i>
                        <p>
                            Меню
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview <?= Yii::$app->controller->id == 'slider' || 'recipes' || 'gallery' ? 'menu-open' : 'menu' ?>">
                    <a href="/admin/menu" class="nav-link <?= Yii::$app->controller->id == 'menu' ? 'active' : '' ?>">
                        <i class="fas fa-tools"></i>
                        <p>
                            Меню
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <?php foreach ($menu as $v): ?>
                        <li class="nav-item">
                            <a href="/admin/menu-category?id=<?= $v->id ?>" class="nav-link <?= Yii::$app->controller->id == 'slider' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p><?= $v->name ?></p>
                            </a>
                        </li>
                        <?php endforeach; ?>
<!--                        <li class="nav-item">-->
<!--                            <a href="/admin/menu/menu?id=2" class="nav-link --><?//= Yii::$app->controller->id == 'recipes' ? 'active' : '' ?><!--">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>Напої</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a href="/admin/gallery" class="nav-link --><?//= Yii::$app->controller->id == 'gallery' ? 'active' : '' ?><!--">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>Галерея</p>-->
<!--                            </a>-->
<!--                        </li>-->
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>