<div class="container">
    <?php
    /* @var $this yii\web\View */
    /* @var $form yii\bootstrap\ActiveForm */
    /* @var $model \frontend\models\SignupForm */

    use yii\helpers\Html;
    use yii\bootstrap\ActiveForm;
    use yii\helpers\Url;

$this->title = 'Signup';
    $this->params['breadcrumbs'][] = $this->title;
    ?>
    <?=
    yii\authclient\widgets\AuthChoice::widget([
        'baseAuthUrl' => ['site/auth'],
        'popupMode' => true,
    ])
    ?>
    <div class="site-signup">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>Please fill out the following fields to signup:</p>

        <div class="row">
            <div class="col-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'gender')->dropDownList(array('' => 'Select your Gender', 'Mr.' => 'Mr.', 'Ms.' => 'Ms')) ?>

                <?= $form->field($model, 'firstname') ?>

                <?= $form->field($model, 'lastname') ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'birthday') ?>

                <?= $form->field($model, 'user_role')->radioList(array('host' => 'Host', 'traveller' => 'Traveller')); ?>

                <div>
                    I'd like to receive coupons and relevant information.By Signing up I agree to Staylance's <a href="#">Terms of Service</a> & <a href="#">Privacy Policy</a>
                </div>
                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
                <div>
                    Already a member of Staylance? <a href="<?php echo Url::to(['/site/login']); ?>">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>