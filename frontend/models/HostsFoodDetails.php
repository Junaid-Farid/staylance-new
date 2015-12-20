<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "hosts_food_details".
 *
 * @property integer $id
 * @property integer $host_id
 * @property string $food_type
 * @property string $additional_charge
 * @property string $breakfast_per_day
 * @property string $lunch_per_day
 * @property string $dinner_per_day
 * @property string $breakfast_per_week
 * @property string $lunch_per_week
 * @property string $dinner_per_week
 * @property string $breakfast_per_month
 * @property string $lunch_per_month
 * @property string $dinner_per_month
 * @property string $additional_information
 * @property integer $created_at
 * @property integer $updated_at
 */
class HostsFoodDetails extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'hosts_food_details';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['host_id', 'food_type', 'additional_charge'], 'required'],
            [['host_id', 'created_at', 'updated_at'], 'integer'],
            [['food_type', 'additional_charge', 'breakfast_per_day', 'lunch_per_day', 'dinner_per_day', 'breakfast_per_week', 'lunch_per_week', 'dinner_per_week', 'breakfast_per_month', 'lunch_per_month', 'dinner_per_month', 'additional_information'], 'string', 'max' => 255]
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
            'food_type' => Yii::t('app', 'Food Type'),
            'additional_charge' => Yii::t('app', 'I would like to offer food for an Additional Charge'),
            'breakfast_per_day' => Yii::t('app', 'Breakfast Per Day'),
            'lunch_per_day' => Yii::t('app', 'Lunch Per Day'),
            'dinner_per_day' => Yii::t('app', 'Dinner Per Day'),
            'breakfast_per_week' => Yii::t('app', 'Breakfast Per Week'),
            'lunch_per_week' => Yii::t('app', 'Lunch Per Week'),
            'dinner_per_week' => Yii::t('app', 'Dinner Per Week'),
            'breakfast_per_month' => Yii::t('app', 'Breakfast Per Month'),
            'lunch_per_month' => Yii::t('app', 'Lunch Per Month'),
            'dinner_per_month' => Yii::t('app', 'Dinner Per Month'),
            'additional_information' => Yii::t('app', 'Additional Information'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

}
