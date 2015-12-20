<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "traveller_description".
 *
 * @property integer $id
 * @property integer $traveller_id
 * @property string $description
 * @property integer $created_at
 * @property integer $updated_at
 */
class TravellerDescription extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'traveller_description';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['traveller_id', 'description'], 'required'],
            [['traveller_id', 'created_at', 'updated_at'], 'integer'],
            [['description'], 'string', 'max' => 255]
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
            'traveller_id' => Yii::t('app', 'Traveller ID'),
            'description' => Yii::t('app', 'Description'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
