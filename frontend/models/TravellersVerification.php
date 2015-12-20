<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "travellers_verification".
 *
 * @property integer $id
 * @property integer $traveller_id
 * @property string $email_code
 * @property integer $email_status
 * @property integer $mobile_status
 * @property integer $facebook_status
 * @property integer $googleplus_status
 * @property integer $linkedin_status
 * @property integer $video_status
 * @property integer $portfolio_status
 * @property integer $passport_status
 * @property integer $driving_lisence_status
 * @property integer $created_at
 * @property integer $updated_at
 */
class TravellersVerification extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'travellers_verification';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['traveller_id'], 'required'],
            [['traveller_id', 'email_status', 'mobile_status', 'facebook_status', 'googleplus_status', 'linkedin_status', 'video_status', 'portfolio_status', 'passport_status', 'driving_lisence_status', 'created_at', 'updated_at'], 'integer'],
            [['email_code'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'traveller_id' => Yii::t('app', 'Traveller ID'),
            'email_code' => Yii::t('app', 'Email Code'),
            'email_status' => Yii::t('app', 'Email Status'),
            'mobile_status' => Yii::t('app', 'Mobile Status'),
            'facebook_status' => Yii::t('app', 'Facebook Status'),
            'googleplus_status' => Yii::t('app', 'Googleplus Status'),
            'linkedin_status' => Yii::t('app', 'Linkedin Status'),
            'video_status' => Yii::t('app', 'Video Status'),
            'portfolio_status' => Yii::t('app', 'Portfolio Status'),
            'passport_status' => Yii::t('app', 'Passport Status'),
            'driving_lisence_status' => Yii::t('app', 'Driving Lisence Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
