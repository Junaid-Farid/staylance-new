<?php

namespace backend\models;

use Yii;
use omgdef\multilingual\MultilingualBehavior;
use omgdef\multilingual\MultilingualQuery;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "countries".
 *
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 *
 * @property CountriesLang[] $countriesLangs
 */
class Countries extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'countries';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['name', 'short_name'], 'required'],
            [['created_at', 'updated_at'], 'safe']
        ];
    }

    public function behaviors() {
        return [
            'ml' => [
                'class' => MultilingualBehavior::className(),
                'languages' => [
                    'de' => 'German',
                    'es' => 'Spanish',
                    'en-US' => 'English',
                ],
                //'languageField' => 'language',
                //'localizedPrefix' => '',
                //'requireTranslations' => false',
                //'dynamicLangClass' => true',
                //'langClassName' => CountriesLang::className(), // or namespace/for/a/class/PostLang
                'defaultLanguage' => 'en-US',
                'langForeignKey' => 'country_id',
                'tableName' => "{{%countries_lang}}",
                'attributes' => [
                    'name', 'short_name',
                ]
            ],
            TimestampBehavior::className(),
        ];
    }


    public static function find() {
        return new MultilingualQuery(get_called_class());
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountriesLangs() {
        return $this->hasMany(CountriesLang::className(), ['country_id' => 'id']);
    }

}
