<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "available_date_ranges".
 *
 * @property integer $id
 * @property integer $hosts_availability_id
 * @property string $start_date
 * @property string $end_date
 * @property integer $created_at
 * @property integer $updated_at
 */
class AvailableDateRanges extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'available_date_ranges';
    }

    public function behaviors() {
        return [
            TimestampBehavior::className(),
        ];
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hosts_availability_id', 'start_date', 'end_date'], 'required'],
            [['hosts_availability_id', 'created_at', 'updated_at'], 'integer'],
            [['start_date', 'end_date'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'hosts_availability_id' => Yii::t('app', 'Hosts Availability ID'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
