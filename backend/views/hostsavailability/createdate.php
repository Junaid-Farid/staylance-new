<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

backend\assets\AppAsset::register($this);
/* @var $this yii\web\View */
/* @var $model app\models\HostsAvailability */

$this->title = Yii::t('app', 'I can host');
$this->params['breadcrumbs'][] = ['label' => 'Hosts Availabilities', 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Availablity');
?>
<section>
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">
            <!-- START Language list-->
            <div class="pull-right">
                <div class="btn-group">
                    <button type="button" data-toggle="dropdown" class="btn btn-default">English</button>
                    <ul role="menu" class="dropdown-menu dropdown-menu-right animated fadeInUpShort">
                        <li><a href="#" data-set-lang="en">English</a>
                        </li>
                        <li><a href="#" data-set-lang="es">Spanish</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Language list    -->
            <h1><?php echo Yii::t('app', 'Hosts Registation process') ?></h1>
            <small data-localize="dashboard.WELCOME"></small>
        </div>
    <h1><?php echo $this->title; ?></h1>
    <?php $form = ActiveForm::begin(); ?>

    <?=
    $form->field($model, 'availabe_dates')->radioList(array('1' => Yii::t('app', 'Anytime'), '2' => Yii::t('app', 'Choose Months year wise'), '3' => Yii::t('app', 'Choose date Range')), ['itemOptions' => ['class' => 'insides']])
    ?> 
    <div class="form-group">
        <?= Html::submitButton($model->availabe_dates ? Yii::t('app', 'Update') : Yii::t('app', 'Save'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</section>
<script>
    function callme() {
        //console.log(this.val());
    }
    $(document).ready(function () {
        $('.insides').change(function () {
            var value = $('input:radio[name="HostsAvailability[availabe_dates]"]:checked').val();
            if (value == 2) {

            }
            else if (value == 3) {

            }
        });
    });
</script>