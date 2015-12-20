<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "hosts_general_help".
 *
 * @property integer $id
 * @property integer $host_id
 * @property string $gardening
 * @property string $farming
 * @property string $housework
 * @property string $maintenance
 * @property string $other_housework
 * @property string $caring_children
 * @property string $caring_elderly
 * @property string $caring_other
 * @property string $computer
 * @property string $internet
 * @property string $digial_marketing
 * @property string $computer_other
 * @property string $language
 * @property string $music
 * @property string $learning_other
 * @property string $volunteering
 * @property integer $created_at
 * @property integer $updated_at
 */
class HostsGeneralHelp extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'hosts_general_help';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['host_id', 'gardening', 'farming', 'housework', 'maintenance', 'other_housework', 'caring_children', 'caring_elderly', 'caring_other', 'computer', 'internet', 'digial_marketing', 'computer_other', 'language', 'music', 'learning_other', 'volunteering'], 'required'],
            [['host_id', 'created_at', 'updated_at'], 'integer'],
            [['gardening', 'farming', 'housework', 'maintenance', 'other_housework', 'caring_children', 'caring_elderly', 'caring_other', 'computer', 'internet', 'digial_marketing', 'computer_other', 'language', 'music', 'learning_other', 'volunteering'], 'string', 'max' => 255]
        ];
    }

    public function behaviors() {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'host_id' => Yii::t('app', 'Host ID'),
            'gardening' => Yii::t('app', 'Gardening'),
            'farming' => Yii::t('app', 'Farming'),
            'housework' => Yii::t('app', 'Housework'),
            'maintenance' => Yii::t('app', 'Maintenance'),
            'other_housework' => Yii::t('app', 'Other Housework'),
            'caring_children' => Yii::t('app', 'Caring Children'),
            'caring_elderly' => Yii::t('app', 'Caring Elderly'),
            'caring_other' => Yii::t('app', 'Caring Other'),
            'computer' => Yii::t('app', 'Computer'),
            'internet' => Yii::t('app', 'Internet'),
            'digial_marketing' => Yii::t('app', 'Digial Marketing'),
            'computer_other' => Yii::t('app', 'Computer Other'),
            'language' => Yii::t('app', 'Language'),
            'music' => Yii::t('app', 'Music'),
            'learning_other' => Yii::t('app', 'Learning Other'),
            'volunteering' => Yii::t('app', 'Volunteering'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

}
