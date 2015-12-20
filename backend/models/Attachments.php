<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "attachments".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $orignal_name
 * @property string $manupulated_name
 * @property integer $created_at
 * @property integer $updated_at
 */
class Attachments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'attachments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'orignal_name', 'manupulated_name'], 'required'],
            [['user_id', 'created_at', 'updated_at'], 'integer'],
            [['orignal_name', 'manupulated_name'], 'string', 'max' => 255]
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
            'user_id' => Yii::t('app', 'User ID'),
            'orignal_name' => Yii::t('app', 'Orignal Name'),
            'manupulated_name' => Yii::t('app', 'Manupulated Name'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
