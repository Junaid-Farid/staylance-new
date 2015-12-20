<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "hosts_accommodation".
 *
 * @property integer $id
 * @property integer $host_id
 * @property integer $number_of_places
 * @property string $type
 * @property integer $bedrooms
 * @property string $bedroom_type
 * @property integer $beds
 * @property string $bathroom
 * @property string $bathroom_facilities
 * @property integer $created_at
 * @property integer $updated_at
 */
class HostsAccommodation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hosts_accommodation';
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
            [['host_id', 'number_of_places', 'type', 'bedrooms', 'bedroom_type', 'beds', 'bathroom', 'bathroom_facilities'], 'required'],
            [['host_id', 'number_of_places', 'bedrooms', 'beds', 'created_at', 'updated_at'], 'integer'],
            [['type', 'bedroom_type', 'bathroom', 'bathroom_facilities'], 'string', 'max' => 255]
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
            'number_of_places' => Yii::t('app', 'Number Of Places'),
            'type' => Yii::t('app', 'Type'),
            'bedrooms' => Yii::t('app', 'Bedrooms'),
            'bedroom_type' => Yii::t('app', 'Bedroom Type'),
            'beds' => Yii::t('app', 'Beds'),
            'bathroom' => Yii::t('app', 'Bathroom'),
            'bathroom_facilities' => Yii::t('app', 'Bathroom Facilities'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
