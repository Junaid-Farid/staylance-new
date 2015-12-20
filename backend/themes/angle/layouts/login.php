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

    <body style="background: #f5f7fa;">
        <?php $this->beginBody() ?>
        <div class="wrapper">
            <div class="block-center mt-xl wd-xl">
                <!-- START panel-->
                <div class="panel panel-dark panel-flat">
                    <div class="panel-heading text-center">
                        <a href="#">
                            <img src="<?php echo Yii::$app->urlManager->baseUrl . '/images/logo_03.png' ?>" alt="Image" class="block-center img-rounded" width="200">
                        </a>
                    </div>
                    <div class="panel-body">
                        <p class="text-center pv">SIGN IN TO CONTINUE.</p>
                        <?= $content ?>
                    </div>
                </div>
                <!-- END panel-->
                <div class="p-lg text-center">
                    <span>&copy;</span>
                    <span><?= date('Y') ?></span>
                    <span>-</span>
                    <span>Staylance</span>
                </div>
            </div>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>