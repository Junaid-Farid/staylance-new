<?php

use backend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>

    <body>
        <?php $this->beginBody() ?>
        <div class="wrapper">
            <!-- top navbar-->
            <header class="topnavbar-wrapper">
                <!-- START Top Navbar-->
                <nav role="navigation" class="navbar topnavbar">
                    <!-- START navbar header-->
                    <div class="navbar-header">
                        <a href="<?php echo Yii::$app->urlManager->baseUrl; ?>" class="navbar-brand">
                            <div class="brand-logo">
                                <img src="<?php echo Yii::$app->urlManager->baseUrl . '/images/logo_03.png' ?>" alt="App Logo" class="img-responsive">
                            </div>
                            <div class="brand-logo-collapsed">
                                <img src="<?php echo Yii::$app->urlManager->baseUrl . '/images/logo_03.png' ?>" alt="App Logo" class="img-responsive">
                            </div>
                        </a>
                    </div>
                    <!-- END navbar header-->
                    <!-- START Nav wrapper-->
                    <div class="nav-wrapper">
                        <!-- START Right Navbar-->
                        <ul class="nav navbar-nav navbar-right">                           
                            <!-- Fullscreen (only desktops)-->
                            <li class="visible-lg">
                                <a href="#" data-toggle-fullscreen="">
                                    <em class="fa fa-expand"></em>
                                </a>
                            </li>
                            <li>
                                <a data-no-persist="true" title="Logout" href="<?php echo Yii::$app->getUrlManager()->createUrl('site/logout') ?>">
                                    <em class="icon-logout"></em>
                                </a>
                            </li>
                        </ul>
                        <!-- END Right Navbar-->
                    </div>
                    <!-- END Nav wrapper-->
                </nav>
                <!-- END Top Navbar-->
            </header>
            <!-- sidebar-->
            <aside class="aside">
                <!-- START Sidebar (left)-->
                <div class="aside-inner">
                    <nav data-sidebar-anyclick-close="" class="sidebar">
                        <!-- START sidebar nav-->
                        <ul class="nav">
                            <!-- Iterates over all sidebar items-->
                            <li class="nav-heading ">
                                <span data-localize="sidebar.heading.HEADER">Main Navigation</span>
                            </li>
                            <li class=" ">
                                <a href="<?php echo Yii::$app->urlManager->baseUrl; ?>" title="Dashboard">
                                    <em class="icon-speedometer"></em>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="<?php echo Yii::$app->getUrlManager()->createUrl('cmspages/index') ?>" title="CMS Pages">
                                    <em class="icon-grid"></em>
                                    <span>CMS Pages</span>
                                </a>
                                <a href="<?php echo Yii::$app->getUrlManager()->createUrl('emailtemplates/index') ?>" title="Email Templates">
                                    <em class="icon-envelope"></em>
                                    <span>Email Templates</span>
                                </a>
                                <a href="<?php echo Yii::$app->getUrlManager()->createUrl('user/index') ?>" title="CMS Pages">
                                    <em class="icon-users"></em>
                                    <span>Users</span>
                                </a>
                                <a href="<?php echo Yii::$app->getUrlManager()->createUrl('subscribers/index') ?>" title="Subscribers">
                                    <em class="icon-user"></em>
                                    <span>Subscribers</span>
                                </a>
                                <a href="<?php echo Yii::$app->getUrlManager()->createUrl('languages/index') ?>" title="Languages">
                                    <em class="icon-volume-1"></em>
                                    <span>Languages</span>
                                </a>
                                <a href="<?php echo Yii::$app->getUrlManager()->createUrl('countries/index') ?>" title="Countries">
                                    <em class="icon-globe"></em>
                                    <span>Countries</span>
                                </a>
                                <a href="<?php echo Yii::$app->getUrlManager()->createUrl('configurations/index') ?>" title="Configurations">
                                    <em class="icon-settings"></em>
                                    <span>Configurations</span>
                                </a>
                            </li>
                        </ul>
                        <!-- END sidebar nav-->
                    </nav>
                </div>
                <!-- END Sidebar (left)-->
            </aside>
            <!-- Main section-->
            <?php echo $content; ?>
            <!-- Page footer-->
            <div class="clearfix"></div>
            <footer>
                <span>&copy; <?php echo date('Y'); ?> - Staylance</span>
            </footer>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
