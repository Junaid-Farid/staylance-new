<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "hosts_artistic_help".
 *
 * @property integer $id
 * @property integer $host_id
 * @property string $painting
 * @property string $sculpting
 * @property string $bother
 * @property string $other
 * @property integer $created_at
 * @property integer $updated_at
 */
class HostsArtisticHelp extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'hosts_artistic_help';
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
            [['host_id', 'painting', 'sculpting', 'bother', 'other'], 'required'],
            [['host_id', 'created_at', 'updated_at'], 'integer'],
            [['painting', 'sculpting', 'bother', 'other'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'host_id' => Yii::t('app', 'Host ID'),
            'painting' => Yii::t('app', 'Painting'),
            'sculpting' => Yii::t('app', 'Sculpting'),
            'bother' => Yii::t('app', 'Bother'),
            'other' => Yii::t('app', 'Other'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

}
