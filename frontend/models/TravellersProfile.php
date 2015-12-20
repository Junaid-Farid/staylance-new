<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "travellers_profile".
 *
 * @property integer $id
 * @property integer $traveller_id
 * @property string $what_can_share
 * @property string $staylance_experience
 * @property integer $created_at
 * @property integer $updated_at
 */
class TravellersProfile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'travellers_profile';
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
            [['traveller_id', 'what_can_share', 'staylance_experience'], 'required'],
            [['traveller_id', 'created_at', 'updated_at'], 'integer'],
            [['what_can_share', 'staylance_experience'], 'string', 'max' => 255]
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
            'what_can_share' => Yii::t('app', 'What Can Share'),
            'staylance_experience' => Yii::t('app', 'Staylance Experience'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
