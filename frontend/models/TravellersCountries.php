<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "travellers_countries".
 *
 * @property integer $id
 * @property integer $traveller_id
 * @property string $country_name
 * @property string $country_description
 * @property integer $created_at
 * @property integer $updated_at
 */
class TravellersCountries extends \yii\db\ActiveRecord {

    public $travelled_country;
    public $lived_country;
    public $favourite_country;

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'travellers_countries';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['traveller_id', 'country_name', 'country_description', 'travelled_country', 'lived_country', 'favourite_country'], 'required'],
            [['traveller_id', 'created_at', 'updated_at'], 'integer'],
            [['country_name', 'country_description'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'traveller_id' => Yii::t('app', 'Traveller ID'),
            'country_name' => Yii::t('app', 'Country Name'),
            'country_description' => Yii::t('app', 'Country Description'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

}
