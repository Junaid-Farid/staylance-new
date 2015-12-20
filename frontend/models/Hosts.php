<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "hosts".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $profile_name
 * @property string $birthday
 * @property string $adress
 * @property string $mobile_phone
 * @property string $home_phone
 * @property string $facebook
 * @property integer $host_type
 * @property integer $about_host
 * @property integer $created_at
 * @property integer $updated_at
 */
class Hosts extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'hosts';
    }

    public function behaviors() {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['user_id', 'name', 'profile_name', 'birthday', 'adress', 'mobile_phone', 'home_phone', 'facebook', 'host_type', 'about_host'], 'required'],
            [['user_id', 'host_type', 'about_host', 'created_at', 'updated_at'], 'integer'],
            [['name', 'profile_name', 'birthday', 'adress', 'mobile_phone', 'home_phone', 'facebook'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'name' => Yii::t('app', 'Name'),
            'profile_name' => Yii::t('app', 'Profile Name'),
            'birthday' => Yii::t('app', 'Birthday'),
            'adress' => Yii::t('app', 'Adress'),
            'mobile_phone' => Yii::t('app', 'Mobile Phone'),
            'home_phone' => Yii::t('app', 'Home Phone'),
            'facebook' => Yii::t('app', 'Facebook'),
            'host_type' => Yii::t('app', 'Host Type'),
            'about_host' => Yii::t('app', 'About Host'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

}
