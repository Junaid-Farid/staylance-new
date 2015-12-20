<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "travellers_languages".
 *
 * @property integer $id
 * @property integer $traveller_id
 * @property string $language
 * @property string $type
 * @property integer $created_at
 * @property integer $updated_at
 */
class TravellersLanguages extends \yii\db\ActiveRecord {

    public $mother_language;
    public $fluent_language;
    public $learning_language;

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'travellers_languages';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['traveller_id', 'mother_language', 'fluent_language', 'learning_language'], 'required'],
            [['traveller_id', 'created_at', 'updated_at'], 'integer'],
            [['type'], 'string', 'max' => 255]
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
            'language' => Yii::t('app', 'Language'),
            'mother_language' => Yii::t('app', 'Language'),
            'fluent_language' => Yii::t('app', 'Language'),
            'learning_language' => Yii::t('app', 'Language'),
            'type' => Yii::t('app', 'Type'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

}
