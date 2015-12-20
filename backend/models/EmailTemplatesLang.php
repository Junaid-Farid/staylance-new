<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "email_templatesLang".
 *
 * @property integer $id
 * @property integer $email_template_id
 * @property string $language
 * @property string $title
 * @property string $subject
 * @property string $content
 *
 * @property EmailTemplates $emailTemplate
 */
class EmailTemplatesLang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'email_templatesLang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email_template_id', 'language', 'title', 'subject', 'content'], 'required'],
            [['email_template_id'], 'integer'],
            [['content'], 'string'],
            [['language'], 'string', 'max' => 6],
            [['title', 'subject'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'email_template_id' => Yii::t('app', 'Email Template ID'),
            'language' => Yii::t('app', 'Language'),
            'title' => Yii::t('app', 'Title'),
            'subject' => Yii::t('app', 'Subject'),
            'content' => Yii::t('app', 'Content'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmailTemplate()
    {
        return $this->hasOne(EmailTemplates::className(), ['id' => 'email_template_id']);
    }
}
