<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "travellers_best_thing".
 *
 * @property integer $id
 * @property integer $traveller_id
 * @property string $best_thing
 * @property integer $created_at
 * @property integer $updated_at
 */
class TravellersBestThing extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'travellers_best_thing';
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
            [['traveller_id', 'best_thing'], 'required'],
            [['traveller_id', 'created_at', 'updated_at'], 'integer'],
            [['best_thing'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'traveller_id' => Yii::t('app', 'Traveller ID'),
            'best_thing' => Yii::t('app', 'Best Thing'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

}
