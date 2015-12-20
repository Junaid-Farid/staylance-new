<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "travellers_life_agenda".
 *
 * @property integer $id
 * @property integer $traveller_id
 * @property string $life_agenda
 * @property integer $created_at
 * @property integer $updated_at
 */
class TravellersLifeAgenda extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'travellers_life_agenda';
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
            [['traveller_id', 'life_agenda'], 'required'],
            [['traveller_id', 'created_at', 'updated_at'], 'integer'],
            [['life_agenda'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'traveller_id' => Yii::t('app', 'Traveller ID'),
            'life_agenda' => Yii::t('app', 'Life Agenda'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

}
