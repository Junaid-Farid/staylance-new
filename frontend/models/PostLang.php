<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "postLang".
 *
 * @property integer $id
 * @property integer $post_id
 * @property string $language
 * @property string $title
 * @property string $content
 *
 * @property Post $post
 */
class PostLang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'postLang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_id', 'language', 'title', 'content'], 'required'],
            [['post_id'], 'integer'],
            [['content'], 'string'],
            [['language'], 'string', 'max' => 6],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'post_id' => Yii::t('app', 'Post ID'),
            'language' => Yii::t('app', 'Language'),
            'title' => Yii::t('app', 'Title'),
            'content' => Yii::t('app', 'Content'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPost()
    {
        return $this->hasOne(Post::className(), ['id' => 'post_id']);
    }
}
