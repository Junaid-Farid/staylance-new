<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
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
        <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button id="btn-collapse" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo Yii::$app->getUrlManager()->createUrl('/') ?>"><img src="<?= Yii::$app->request->baseUrl ?>/images/logo_03.png" class="img-responsive" /></a>
                </div>
                <div class="collapse navbar-collapse">
                    <div class="col-md-6 pull-right hidden-sm" style="height: 33px;">

                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a id="find-host" href="<?php echo Yii::$app->getUrlManager()->createUrl('/') ?>">Find a host<i class="fa fa-search"></i></a></li>
                        <li id="how-it-work"><a href="#">How it works <i class="fa fa-info-circle fa-2x"></i></a></li>
                        <?php if (Yii::$app->user->isGuest) { ?>
                            <li><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/signup') ?>">Join Us</a></li>
                            <li><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/login') ?>">Login</a></li> 
                        <?php } else { ?>
                            <li><a href="<?php echo Yii::$app->getUrlManager()->createUrl('/') ?>">Messages</a></li>
                            <li class="dropdown loggedin">
                                <a href="<?php echo Yii::$app->getUrlManager()->createUrl('/') ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo Yii::$app->user->identity->firstname; ?></a>
                                <ul class="dropdown-menu log">
                                    <li><a href="#">Edit profile</a></li>
                                    <li><a href="#">Invite friends</a></li>
                                    <li><a href="#">Your favourites</a></li> 
                                    <li><a href="#">Configure account</a></li> 
                                    <li><a href="#">Promote yourself</a></li> 
                                    <li><a href="<?php echo Yii::$app->getUrlManager()->createAbsoluteUrl('site/logout'); ?>">Log out</a></li>                                     
                                </ul> 
                            </li>
                        <?php } ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">En <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu en">
                                <li><a href="#">EN</a></li>
                                <li><a href="#">ES</a></li>
                                <li><a href="#">DE</a></li> 
                            </ul>
                        </li> 
                    </ul>
                </div>
            </div>
        </header>
        <!--/header-->  
        <section id="work-panel" style="display: none;" >
            <div class="container">  
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="row">
                            <div class="col-md-4">  
                                <h2>How to host</h2>
                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad </p>                                      
                                <a href="#">Read more >></a>
                            </div> 
                            <div class="col-md-4">   
                                <h2>How to stay</h2>
                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad </p>
                                <a href="#">Read more >></a>
                            </div> 
                            <div class="col-md-4 join-us center-block"> 
                                <a href="<?= Yii::$app->request->baseUrl ?>/site/signup" class="join">Join us! </a>
                                <img src="<?= Yii::$app->request->baseUrl ?>/images/join-us-van_03.png" class="img-responsive center-block margin-20-top">
                            </div> 
                        </div>  
                    </div> 
                </div>  
            </div>  
        </section>
        <section id="host-panel" style="display: none;">
            <div class="container"> 
                <form class="form-horizontal" role="form">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="col-md-6">
                                    <div class="form-group"> 
                                        <input type="text" class="form-control" id="" placeholder="Where would you like to travel?">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group  right-inner-addon"> 
                                        <i class="fa fa-calendar"></i>                                        
                                        <input type="text" class="form-control" id="" placeholder="From">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group  right-inner-addon"> 
                                        <i class="fa fa-calendar"></i>
                                        <input type="text" class="form-control" id="" placeholder="To">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="col-md-7">
                                    <div class="form-group right-inner-addon">  
                                        <i class="fa fa-search search"></i> 
                                        <input type="text" class="form-control search-input" id="" placeholder="Find a host: Search">
                                    </div>
                                </div>
                                <div class="col-md-5"> 
                                    <div class="form-group"> 
                                        <div class="dropdown">
                                            <a href="#" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle">Advance search <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Option 1</a></li>
                                                <li><a href="#">Option 2</a></li>
                                                <li><a href="#">Option 3</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>  
                </form>  
            </div>
        </section>
        <?=
        Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ])
        ?>
        <?= Alert::widget() ?>
        <?= $content ?> 

        <footer id="footer">
            <div class="container">
                <div class="col-md-12">   
                    <div class="row"> 
                        <ul class="list-inline text-center text-uppercase">
                            <li><a href="#">Hosting</a></li>
                            <li><a href="#">Staying</a></li>
                            <li><a href="#">Destinations</a></li>
                            <li><a href="#">Who we are</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">T&C's</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul> 
                    </div>
                </div> 
                <div class="col-md-12" id="join-us-area">
                    <div class="row">
                        <div class="col-md-2"> 
                            <div class="row">
                                <h1 class="text-center join">Join us!</h1> 
                            </div> 
                        </div> 
                        <div class="col-md-4"> 
                            <img src="<?= Yii::$app->request->baseUrl ?>/images/footer-van_03.png" alt="footer-van" class="img-responsive center-image">                                
                        </div> 
                        <div class="row">
                            <div class="col-md-5"> 
                                <p class="text-justify footer-para">Our mission is to give everyone the possibility to find economic local stays, to get to know different cultures, meet as many interesting people as possible, find new friends and travel buddies, live wonderful experiences and creating the best memories.</p>
                            </div> 
                        </div>  
                    </div>  
                </div>  
            </div>
            <hr/>
            <div class="container"> 
                <div class="col-md-12">
                    <div class="row">
                        <div class="copyright text-center">
                            <p>Copyright <?php echo date('Y'); ?> &COPY; StayLance. All rights reserved.. | Terms & Conditions</p>
                        </div>
                    </div> 
                </div> 
            </div>
        </footer><!--/#footer--> 
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
