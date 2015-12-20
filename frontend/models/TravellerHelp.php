<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "traveller_help".
 *
 * @property integer $id
 * @property integer $traveller_id
 * @property string $profession
 * @property integer $general_help
 * @property integer $professional_help
 * @property integer $artistic_help
 * @property integer $created_at
 * @property integer $updated_at
 */
class TravellerHelp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'traveller_help';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['traveller_id', 'profession', 'general_help', 'professional_help', 'artistic_help'], 'required'],
            [['traveller_id', 'general_help', 'professional_help', 'artistic_help', 'created_at', 'updated_at'], 'integer'],
            [['profession'], 'string', 'max' => 255]
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
            'profession' => Yii::t('app', 'Profession'),
            'general_help' => Yii::t('app', 'General Help'),
            'professional_help' => Yii::t('app', 'Professional Help'),
            'artistic_help' => Yii::t('app', 'Artistic Help'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
