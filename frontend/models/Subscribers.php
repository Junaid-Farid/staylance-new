<?php

namespace frontend\models;

use yii\behaviors\TimestampBehavior;
use Yii;

/**
 * This is the model class for table "subscribers".
 *
 * @property integer $id
 * @property string $email
 * @property string $type
 * @property integer $created_at
 * @property integer $updated_at
 */
class Subscribers extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'subscribers';
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
            [['created_at', 'updated_at'], 'integer'],
            [['email', 'type'], 'string', 'max' => 255],
            [['email'], 'unique'],
        ];
    }


    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'email' => Yii::t('app', 'Email'),
            'type' => Yii::t('app', 'Type'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

}
