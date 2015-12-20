<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "traveller_photo".
 *
 * @property integer $id
 * @property integer $traveller_id
 * @property integer $attachment_id
 * @property string $text1
 * @property string $text2
 * @property string $text3
 * @property integer $created_at
 * @property integer $updated_at
 */
class TravellerPhoto extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'traveller_photo';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['traveller_id', 'attachment_id'], 'required'],
            [['traveller_id', 'attachment_id', 'created_at', 'updated_at'], 'integer'],
            [['text1', 'text2', 'text3'], 'string', 'max' => 255]
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
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'traveller_id' => Yii::t('app', 'Traveller ID'),
            'attachment_id' => Yii::t('app', 'Attachment ID'),
            'text1' => Yii::t('app', 'Text1'),
            'text2' => Yii::t('app', 'Text2'),
            'text3' => Yii::t('app', 'Text3'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

}
