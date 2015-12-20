<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "hosts_availability".
 *
 * @property integer $id
 * @property integer $host_id
 * @property integer $number_of_staylancers
 * @property integer $can_not_host
 * @property string $availabe_dates
 * @property string $help
 * @property string $share
 * @property string $pay
 * @property integer $created_at
 * @property integer $updated_at
 */
class HostsAvailability extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hosts_availability';
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
            [['host_id', 'number_of_staylancers', 'can_not_host'], 'required'],
            [['host_id', 'number_of_staylancers', 'can_not_host', 'created_at', 'updated_at'], 'integer'],
            [['availabe_dates', 'help', 'share', 'pay'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'host_id' => Yii::t('app', 'Host ID'),
            'number_of_staylancers' => Yii::t('app', 'Number Of Staylancers'),
            'can_not_host' => Yii::t('app', 'Can Not Host'),
            'availabe_dates' => Yii::t('app', 'Availabe Dates'),
            'help' => Yii::t('app', 'Help'),
            'share' => Yii::t('app', 'Share'),
            'pay' => Yii::t('app', 'Pay'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
