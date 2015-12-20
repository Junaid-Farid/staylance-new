<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "hosts_foods".
 *
 * @property integer $id
 * @property integer $host_id
 * @property string $food_type
 * @property string $food_category
 * @property string $drinks
 * @property string $other
 * @property integer $created_at
 * @property integer $updated_at
 */
class HostsFoods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hosts_foods';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['host_id', 'food_type', 'food_category', 'drinks', 'other'], 'required'],
            [['host_id', 'created_at', 'updated_at'], 'integer'],
            [['food_type', 'food_category', 'drinks', 'other'], 'string', 'max' => 255]
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
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'host_id' => Yii::t('app', 'Host ID'),
            'food_type' => Yii::t('app', 'Food Type'),
            'food_category' => Yii::t('app', 'Food Category'),
            'drinks' => Yii::t('app', 'Drinks'),
            'other' => Yii::t('app', 'If you are very specific about the food you provide please let staylancers know:'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
