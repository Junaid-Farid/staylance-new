<?php

namespace app\models;

use Yii;
use omgdef\multilingual\MultilingualBehavior;
use omgdef\multilingual\MultilingualQuery;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "cms_pages".
 *
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $status
 *
 * @property CmsPagesLang[] $cmsPagesLangs
 */
class CmsPages extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'cms_pages';
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
                //'langClassName' => PostLang::className(), // or namespace/for/a/class/PostLang
                'defaultLanguage' => 'en-US',
                'langForeignKey' => 'page_id',
                'tableName' => "{{%cms_pagesLang}}",
                'attributes' => [
                    'title', 'content',
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
            [['title', 'content'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['status'], 'integer']
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
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCmsPagesLangs() {
        return $this->hasMany(CmsPagesLang::className(), ['page_id' => 'id']);
    }

}
