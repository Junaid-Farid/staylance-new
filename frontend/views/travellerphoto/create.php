<div class="container">
    <?php

    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
    /* @var $model app\models\TravellerPhoto */

    $this->title = Yii::t('app', 'Create Traveller Photo');
    ?>
    <div class="traveller-photo-create">
        <div class="col-md-11 col-md-offset-1">
            <ul class="traveller-steps">
                <li id="active-breadcrumbs">Account Info</li>
                <li>Profile</li>
                <li>About You</li>
                <li>Gallery</li>
                <li>Get Verified</li>
            </ul>
        </div>
        <div class="col-md-10 col-md-offset-1">
            <div class="travellers-form">
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="Step-title">Account Info > Photo</h1> 
                        <?=
                        $this->render('_form', [
                            'model' => $model,
                            'uploadModel' => $uploadModel,
                            'traveller_id' => $traveller_id,
                        ])
                        ?>
                    </div>
                    <div class="col-lg-4 join-message">
                        <h3> Thanks You for joining Staylance!</h3>
                        <p>Welcome our community,we wish you a wonderful time. Please complete your profile</p>
                        <br><br><br><br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-group wrap_container">
    <div class="row">
        <div class="col-md-4">
            <a href="<?php echo Url::to(['/travellers/update', 'id' => $traveller_id]); ?>" class="btn btn-arrow">
                <i class="fa fa-arrow-left"></i>
            </a>
            <a href="<?php echo Url::to(['/travellers/update', 'id' => $traveller_id]); ?>" class="btn btn-back-text">back</a>
        </div>
        <div class="col-md-4 align-center">
            <?php if (count($traveldescription) > 0) { ?>
                <a href="<?php echo Url::to(['/travellerdescription/update', 'id' => $traveldescription->id]); ?>" class="btn btn-success btn-skip">I will do this later</a>
            <?php } else { ?>
                <a href="<?php echo Url::to(['/travellerdescription/create', 'traveller_id' => $traveller_id]); ?>" class="btn btn-success btn-skip">I will do this later</a>
            <?php } ?>
        </div>
        <div class="right-align col-md-4">
            <?= Html::submitButton(Yii::t('app', 'next step'), ['class' => 'btn btn-next-text btn-arrow']) ?>
            <?= Html::submitButton(Yii::t('app', '<i class="fa fa-arrow-right"></i>'), ['class' => 'btn btn-arrow']) ?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <script>
        $(function () {
            $('.select-image-btn').click(function () {
                $('#profile-message').hide();
                $('.cropit-image-input').click();
            });
            $('.image-editor').cropit({
                imageState: {
                    src: '',
                },
            });
            $('.cropit-image-zoom-input').on("input change", function () {
                var imageData = $('.image-editor').cropit('export');
                $('.my-image-preview').css("background-image", "url('" + imageData + "')");
                $('#uploadimagesform-uploadfiles').val(imageData);
            });
            $('.cropit-image-preview').mousemove(function () {
                var imageData = $('.image-editor').cropit('export');
                $('.my-image-preview').css("background-image", "url('" + imageData + "')");
                $('#uploadimagesform-uploadfiles').val(imageData);
            });
            $('#uploadimagesform-imagefiles').change(function () {
                var imageData = $('.image-editor').cropit('export');
                $('.my-image-preview').css("background-image", "url('" + imageData + "')");
                $('#uploadimagesform-uploadfiles').val(imageData);
            });
            $('#travellerphoto-text1').keyup(function () {
                if ($('#travellerphoto-text1').val() != '') {
                    $('#text1').text('"1.' + $('#travellerphoto-text1').val() + '",');
                }
                else {
                    $('#text1').text('');
                }
            });
            $('#travellerphoto-text2').keyup(function () {
                if ($('#travellerphoto-text1').val() != '') {
                    $('#text2').text('"2.' + $('#travellerphoto-text2').val() + '",');
                }
                else {
                    $('#text2').text('');
                }
            });
            $('#travellerphoto-text3').keyup(function () {
                if ($('#travellerphoto-text3').val() != '') {
                    $('#text3').text('"3.' + $('#travellerphoto-text3').val() + '"');
                }
                else {
                    $('#text3').text('');
                }
            });
        });
    </script>