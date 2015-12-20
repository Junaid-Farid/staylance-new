<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "travellers_food".
 *
 * @property integer $id
 * @property integer $traveller_id
 * @property string $kind_of_food
 * @property string $specific_food_requirement
 * @property string $let_hosts_know
 * @property string $allergies_illnesses
 * @property string $smoke
 * @property string $driving_lisence
 * @property integer $created_at
 * @property integer $updated_at
 */
class TravellersFood extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'travellers_food';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['traveller_id', 'kind_of_food', 'specific_food_requirement', 'let_hosts_know', 'allergies_illnesses', 'smoke', 'driving_lisence'], 'required'],
            [['traveller_id', 'created_at', 'updated_at'], 'integer'],
            [['kind_of_food', 'specific_food_requirement', 'let_hosts_know', 'allergies_illnesses', 'smoke', 'driving_lisence'], 'string', 'max' => 255]
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
            'kind_of_food' => Yii::t('app', 'Kind Of Food'),
            'specific_food_requirement' => Yii::t('app', 'Specific Food Requirement'),
            'let_hosts_know' => Yii::t('app', 'Let Hosts Know'),
            'allergies_illnesses' => Yii::t('app', 'Allergies Illnesses'),
            'smoke' => Yii::t('app', 'Smoke'),
            'driving_lisence' => Yii::t('app', 'Driving Lisence'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

}
