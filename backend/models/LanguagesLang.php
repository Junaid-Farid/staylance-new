<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "languages_lang".
 *
 * @property integer $id
 * @property integer $language_id
 * @property string $language
 * @property string $name
 * @property string $short_name
 *
 * @property Languages $language0
 */
class LanguagesLang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'languages_lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['language_id', 'language', 'name', 'short_name'], 'required'],
            [['language_id'], 'integer'],
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
            'language_id' => Yii::t('app', 'Language ID'),
            'language' => Yii::t('app', 'Language'),
            'name' => Yii::t('app', 'Name'),
            'short_name' => Yii::t('app', 'Short Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLanguage0()
    {
        return $this->hasOne(Languages::className(), ['id' => 'language_id']);
    }
}
