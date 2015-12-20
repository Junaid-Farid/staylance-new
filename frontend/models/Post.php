<?php

namespace app\models;

use Yii;
use omgdef\multilingual\MultilingualBehavior;
use omgdef\multilingual\MultilingualQuery;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $enabled
 *
 * @property PostLang[] $postLangs
 */
class Post extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'post';
    }

    public function behaviors() {
        return [
            'ml' => [
                'class' => MultilingualBehavior::className(),
                'languages' => [
                    'ru' => 'Russian',
                    'en-US' => 'English',
                ],
                //'languageField' => 'language',
                //'localizedPrefix' => '',
                //'requireTranslations' => false',
                //'dynamicLangClass' => true',
                //'langClassName' => PostLang::className(), // or namespace/for/a/class/PostLang
                'defaultLanguage' => 'en-US',
                'langForeignKey' => 'post_id',
                'tableName' => "{{%postLang}}",
                'attributes' => [
                    'title', 'content',
                ]
            ],
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
            [['created_at', 'updated_at','title'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['enabled'], 'integer']
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
            'enabled' => Yii::t('app', 'Enabled'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPostLangs() {
        return $this->hasMany(PostLang::className(), ['post_id' => 'id']);
    }

}
