<?php

namespace app\models;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "hosts_average_weekdays".
 *
 * @property integer $id
 * @property integer $host_id
 * @property string $breakfast
 * @property string $lunch
 * @property string $dinner
 * @property string $more_information
 * @property string $smoking
 * @property string $anything_else
 * @property integer $created_at
 * @property integer $updated_at
 */
class HostsAverageWeekdays extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'hosts_average_weekdays';
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
            [['host_id', 'breakfast', 'lunch', 'dinner', 'more_information', 'smoking', 'anything_else'], 'required'],
            [['host_id', 'created_at', 'updated_at'], 'integer'],
            [['breakfast', 'lunch', 'dinner', 'more_information', 'smoking', 'anything_else'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'host_id' => Yii::t('app', 'Host ID'),
            'breakfast' => Yii::t('app', 'Breakfast'),
            'lunch' => Yii::t('app', 'Lunch'),
            'dinner' => Yii::t('app', 'Dinner'),
            'more_information' => Yii::t('app', 'More Information'),
            'smoking' => Yii::t('app', 'Smoking'),
            'anything_else' => Yii::t('app', 'Is the anything else you would like to mention'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

}
