<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "about_host".
 *
 * @property integer $id
 * @property integer $host_id
 * @property string $about
 * @property string $video
 * @property integer $created_at
 * @property integer $updated_at
 */
class AboutHost extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'about_host';
    }

    public function behaviors() {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['host_id', 'about', 'video'], 'required'],
            [['host_id', 'created_at', 'updated_at'], 'integer'],
            [['about', 'video'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'host_id' => Yii::t('app', 'Hosts ID'),
            'about' => Yii::t('app', 'About'),
            'video' => Yii::t('app', 'Video'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

}
