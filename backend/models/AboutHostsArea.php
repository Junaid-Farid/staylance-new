<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "about_hosts_area".
 *
 * @property integer $id
 * @property integer $host_id
 * @property string $doctor
 * @property string $bus_staion
 * @property string $shop
 * @property string $bus_top
 * @property string $town
 * @property string $airport
 * @property string $cash_machine
 * @property string $train_station
 * @property string $what_to_do
 * @property string $travel_tips
 * @property string $car
 * @property integer $created_at
 * @property integer $updated_at
 */
class AboutHostsArea extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'about_hosts_area';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['host_id', 'doctor', 'bus_staion', 'shop', 'bus_top', 'town', 'airport', 'cash_machine', 'train_station', 'what_to_do', 'travel_tips', 'car'], 'required'],
            [['host_id', 'created_at', 'updated_at'], 'integer'],
            [['doctor', 'bus_staion', 'shop', 'bus_top', 'town', 'airport', 'cash_machine', 'train_station', 'what_to_do', 'travel_tips', 'car'], 'string', 'max' => 255]
        ];
    }

    public function behaviors() {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'host_id' => Yii::t('app', 'Host ID'),
            'doctor' => Yii::t('app', 'Doctor'),
            'bus_staion' => Yii::t('app', 'Bus Staion'),
            'shop' => Yii::t('app', 'Shop'),
            'bus_top' => Yii::t('app', 'Bus Top'),
            'town' => Yii::t('app', 'Town'),
            'airport' => Yii::t('app', 'Airport'),
            'cash_machine' => Yii::t('app', 'Cash Machine'),
            'train_station' => Yii::t('app', 'Train Station'),
            'what_to_do' => Yii::t('app', 'What to do in your Area'),
            'travel_tips' => Yii::t('app', 'Any Travel Tips for getting to your place'),
            'car' => Yii::t('app', 'Would be a Car'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

}
