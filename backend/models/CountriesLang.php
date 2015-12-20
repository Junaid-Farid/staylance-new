<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "countries_lang".
 *
 * @property integer $id
 * @property integer $country_id
 * @property string $language
 * @property string $name
 * @property string $short_name
 *
 * @property Countries $country
 */
class CountriesLang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'countries_lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_id', 'language', 'name', 'short_name'], 'required'],
            [['country_id'], 'integer'],
            [['language'], 'string', 'max' => 6],
            [['name', 'short_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'country_id' => Yii::t('app', 'Country ID'),
            'language' => Yii::t('app', 'Language'),
            'name' => Yii::t('app', 'Name'),
            'short_name' => Yii::t('app', 'Short Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Countries::className(), ['id' => 'country_id']);
    }
}
