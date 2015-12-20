<?php

namespace backend\models;

use Yii;
use omgdef\multilingual\MultilingualBehavior;
use omgdef\multilingual\MultilingualQuery;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "languages".
 *
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 *
 * @property LanguagesLang[] $languagesLangs
 */
class Languages extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'languages';
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
                //'langClassName' => LanguagesLang::className(), // or namespace/for/a/class/PostLang
                'defaultLanguage' => 'en-US',
                'langForeignKey' => 'language_id',
                'tableName' => "{{%languages_lang}}",
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
    public function rules() {
        return [
            [['name', 'short_name'], 'required'],
            [['created_at', 'updated_at'], 'safe']
        ];
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
    public function getLanguagesLangs() {
        return $this->hasMany(LanguagesLang::className(), ['language_id' => 'id']);
    }

}
