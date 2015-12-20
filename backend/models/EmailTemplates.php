<?php

namespace backend\models;

use Yii;
use omgdef\multilingual\MultilingualBehavior;
use omgdef\multilingual\MultilingualQuery;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "email_templates".
 *
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $email_key
 *
 * @property EmailTemplatesLang[] $emailTemplatesLangs
 */
class EmailTemplates extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'email_templates';
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
                //'langClassName' => email_templatesLang::className(), // or namespace/for/a/class/email_templatesLang
                'defaultLanguage' => 'en-US',
                'langForeignKey' => 'email_template_id',
                'tableName' => "{{%email_templatesLang}}",
                'attributes' => [
                    'title', 'subject', 'content',
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
            [['title', 'subject', 'content', 'email_key'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['email_key'], 'string', 'max' => 255],
            [['email_key'], 'unique']
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
            'email_key' => Yii::t('app', 'Email Key'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmailTemplatesLangs() {
        return $this->hasMany(EmailTemplatesLang::className(), ['email_template_id' => 'id']);
    }

}
