<?php
/* @var $this yii\web\View */

$this->title = 'Staylance';
?>
<section>
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">
            Dashboard
        </div>
        <!-- START widgets box-->
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <!-- START widget-->
                <div class="panel widget bg-primary">
                    <div class="row row-table">
                        <div class="col-xs-4 text-center bg-primary-dark pv-lg">
                            <em class="icon-cloud-upload fa-3x"></em>
                        </div>
                        <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0">1700</div>
                            <div class="text-uppercase">Uploads</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <!-- START widget-->
                <div class="panel widget bg-purple">
                    <div class="row row-table">
                        <div class="col-xs-4 text-center bg-purple-dark pv-lg">
                            <em class="icon-globe fa-3x"></em>
                        </div>
                        <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0">700
                                <small>GB</small>
                            </div>
                            <div class="text-uppercase">Quota</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <!-- START widget-->
                <div class="panel widget bg-green">
                    <div class="row row-table">
                        <div class="col-xs-4 text-center bg-green-dark pv-lg">
                            <em class="icon-bubbles fa-3x"></em>
                        </div>
                        <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0">500</div>
                            <div class="text-uppercase">Reviews</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <!-- START date widget-->
                <div class="panel widget">
                    <div class="row row-table">
                        <div class="col-xs-4 text-center bg-green pv-lg">
                            <!-- See formats: https://docs.angularjs.org/api/ng/filter/date-->
                            <div data-now="" data-format="MMMM" class="text-sm"></div>
                            <br>
                            <div data-now="" data-format="D" class="h2 mt0"></div>
                        </div>
                        <div class="col-xs-8 pv-lg">
                            <div data-now="" data-format="dddd" class="text-uppercase"></div>
                            <br>
                            <div data-now="" data-format="h:mm" class="h2 mt0"></div>
                            <div data-now="" data-format="a" class="text-muted text-sm"></div>
                        </div>
                    </div>
                </div>
                <!-- END date widget    -->
            </div>
        </div>
        <!-- END widgets box-->
    </div>
</section>