<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Staylance';
?>  
<section id="traveller-detail">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12 top-panel"> 
                            <img src="<?= Yii::$app->request->baseUrl ?>/images/last-minute.png" class="img-responsive">
                            <h2>florida, miami beach</h2>                    
                        </div> 
                        <div class="col-md-6">
                            <img src="<?= Yii::$app->request->baseUrl ?>/images/location.png" class="img-responsive">
                        </div>
                        <div class="col-md-6 status-detail">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <h4>Annabel needs help with children</h4>
                                        <p><span>Type:</span> Private Home - Couple</p>
                                        <p><span>Stay:</span> Private Room / Shared Bathroom</p>
                                        <p><span>Space for:</span> 1 Stayñancer</p>
                                        <p><span>Food:</span> Included / Mostly Vegetarian</p>
                                        <p><span>Host offers:</span>  Wifi / Laundry</p> 
                                        <p><span>Host offers:</span>  Wifi / Laundry</p> 
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="<?= Yii::$app->request->baseUrl ?>/images/profile-pic.png" class="img-responsive center-image">
                                </div>
                            </div>
                            <div class="col-md-12">  
                                <div class="row">
                                    <h5>Stay and surf with Annabel</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 traveller-desciption">
                            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quisbibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit. This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quisbibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit.</p>
                        </div>
                    </div>


                    <div class="col-md-12 information"> 
                        <div class="row">
                            <div class="col-md-7 padding-15">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="row">
                                            <a href="#" class="btn"> <i class="fa fa-map-marker"></i> map</a><a class="btn" href="#"><i class="fa fa-heart"></i> favourites</a>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <i class="fa fa-star fa-2x"></i><i class="fa fa-star fa-2x"></i><i class="fa fa-star fa-2x"></i><i class="fa fa-star fa-2x"></i><i class="fa fa-star fa-2x"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <img alt="progress-round" src="<?= Yii::$app->request->baseUrl ?>/images/circle-progress.png" class="img-responsive img-rounded" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 padding-15">
                                        <div class="row">
                                            <a class="btn pull-right contact" href="#"> contact <i class="fa fa-envelope-o"></i></a>                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" id="traveller-full-detail"> 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="col-md-5">
                                        <p><span>Help Needed</span></p>
                                    </div>
                                    <div class="col-md-7">
                                        <p>kitchen · homework · cooking · cleaning</p>
                                    </div> 
                                </div>
                                <div class="col-md-12">
                                    <hr />
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="col-md-5">
                                        <p><span>Accommodation</span></p>
                                    </div>
                                    <div class="col-md-7">
                                        <p> bedrooms with en suite bathroom and kitchen for text</p>
                                    </div> 
                                </div>
                                <div class="col-md-12">
                                    <hr />
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="col-md-5">
                                        <p><span>Can host up to</span></p>
                                    </div>
                                    <div class="col-md-7">
                                        <p>6 traveller  </p>
                                    </div> 
                                </div>
                                <div class="col-md-12">
                                    <hr />
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="col-md-5">
                                        <p><span>Beds</span></p>
                                    </div>
                                    <div class="col-md-7">
                                        <p>6 beds  </p>
                                    </div> 
                                </div>
                                <div class="col-md-12">
                                    <hr />
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="col-md-5">
                                        <p><span>Bathrooms</span></p>
                                    </div>
                                    <div class="col-md-7">
                                        <p>3 baths</p>
                                    </div> 
                                </div>
                                <div class="col-md-12">
                                    <hr />
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="col-md-5">
                                        <p><span>Food</span></p>
                                    </div>
                                    <div class="col-md-7">
                                        <p>vegetarian</p>
                                    </div> 
                                </div>
                                <div class="col-md-12">
                                    <hr />
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="col-md-5">
                                        <p><span>Drinks</span></p>
                                    </div>
                                    <div class="col-md-7">
                                        <p>water · soft drinks · wine · beer</p>
                                    </div> 
                                </div>
                                <div class="col-md-12">
                                    <hr />
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="col-md-5">
                                        <p><span>Wifi</span></p>
                                    </div>
                                    <div class="col-md-7">
                                        <p>yes</p>
                                    </div> 
                                </div>
                                <div class="col-md-12">
                                    <hr />
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="col-md-5">
                                        <p><span>Smoking</span></p>
                                    </div>
                                    <div class="col-md-7">
                                        <p>no</p>
                                    </div> 
                                </div>
                                <div class="col-md-12">
                                    <hr />
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="col-md-5">
                                        <p><span>Household</span></p>
                                    </div>
                                    <div class="col-md-7">
                                        <p>This is Photoshop's version  of Lorem Ipsum</p>
                                    </div> 
                                </div>
                                <div class="col-md-12">
                                    <hr />
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="col-md-5">
                                        <p><span>Services Nearby</span></p>
                                    </div>
                                    <div class="col-md-7">
                                        <p>supermarket · restaurants · pharmacy · school</p>
                                    </div> 
                                </div>
                                <div class="col-md-12">
                                    <hr />
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="col-md-5">
                                        <p><span>Things to do</span></p>
                                    </div>
                                    <div class="col-md-7">
                                        <p>surfing · cycling · hiking · swimming · cinema</p>
                                    </div> 
                                </div>
                                <div class="col-md-12">
                                    <hr />
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="col-md-5">
                                        <p><span>Travel Tips</span></p>
                                    </div>
                                    <div class="col-md-7">
                                        <p>text here about travel  text here about travel  text here about travel </p>
                                    </div> 
                                </div>
                                <div class="col-md-12">
                                    <hr />
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="col-md-5">
                                        <p><span>About Us</span></p>
                                    </div>
                                    <div class="col-md-7">
                                        <p>text here about travel  bnmtext here about travel  text here about travel 
text here abobnmbhut travel  text here about travel  text here about
text here about travel  bnmtext here about travel  text here about travel 
text here about travel bnm text here about travel  text here about
text here about travel  bnmtext here about travel  text here about travel 
text here about travel bnm text here about travel  text here about</p>
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div> 

                </div>

                <div class="col-md-3 traveller-left-side"> 
                    <div class="col-md-12">
                        <h3>More destinations</h3>         

                        <div class="cover-area">
                            <img src="<?= Yii::$app->request->baseUrl ?>/images/feature-pic.png" class="img-responsive up-pic" alt="profile-pic-up-1">
                            <div class="below-pic">
                                <h4>Valencia</h4>
                                <img src="<?= Yii::$app->request->baseUrl ?>/images/feauter-bg-pic.png" class="img-responsive center-image"  alt="profile-pic-down-1">
                                <div class="links">
                                    <a href="#" class="help">Help</a><a href="#" class="share">Share</a><a href="#" class="pay">Pay</a>
                                </div>
                                <h5>Stay with Fernando & Pepa <i class="fa fa-heart"></i></h5>
                            </div>
                        </div> 

                        <div class="cover-area">
                            <img src="<?= Yii::$app->request->baseUrl ?>/images/feature-pic.png" class="img-responsive up-pic" alt="profile-pic-up-1">
                            <div class="below-pic">
                                <h4>Valencia</h4>
                                <img src="<?= Yii::$app->request->baseUrl ?>/images/feauter-bg-pic.png" class="img-responsive center-image"  alt="profile-pic-down-1">
                                <div class="links">
                                    <a href="#" class="help">Help</a><a href="#" class="share">Share</a><a href="#" class="pay">Pay</a>
                                </div>
                                <h5>Stay with Fernando & Pepa <i class="fa fa-heart"></i></h5>
                            </div>
                        </div> 

                        <div class="cover-area">
                            <img src="<?= Yii::$app->request->baseUrl ?>/images/feature-pic.png" class="img-responsive up-pic" alt="profile-pic-up-1">
                            <div class="below-pic">
                                <h4>Valencia</h4>
                                <img src="<?= Yii::$app->request->baseUrl ?>/images/feauter-bg-pic.png" class="img-responsive center-image"  alt="profile-pic-down-1">
                                <div class="links">
                                    <a href="#" class="help">Help</a><a href="#" class="share">Share</a><a href="#" class="pay">Pay</a>
                                </div>
                                <h5>Stay with Fernando & Pepa <i class="fa fa-heart"></i></h5>
                            </div>
                        </div>  

                    </div>
                </div>
            </div> 
        </div> 
    </div> 
</section>