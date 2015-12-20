<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "hosts_professional_help".
 *
 * @property integer $id
 * @property integer $host_id
 * @property string $chef
 * @property string $builder
 * @property string $painter
 * @property string $carpenter
 * @property string $landscraper
 * @property string $plumber
 * @property string $tiler
 * @property string $house_other
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
class HostsProfessionalHelp extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'hosts_professional_help';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['host_id', 'chef', 'builder', 'painter', 'carpenter', 'landscraper', 'plumber', 'tiler', 'house_other', 'caring_children', 'caring_elderly', 'caring_other', 'computer', 'internet', 'digial_marketing', 'computer_other', 'language', 'music', 'learning_other', 'volunteering'], 'required'],
            [['host_id', 'created_at', 'updated_at'], 'integer'],
            [['chef', 'builder', 'painter', 'carpenter', 'landscraper', 'plumber', 'tiler', 'house_other', 'caring_children', 'caring_elderly', 'caring_other', 'computer', 'internet', 'digial_marketing', 'computer_other', 'language', 'music', 'learning_other', 'volunteering'], 'string', 'max' => 255]
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
            'chef' => Yii::t('app', 'Chef'),
            'builder' => Yii::t('app', 'Builder'),
            'painter' => Yii::t('app', 'Painter'),
            'carpenter' => Yii::t('app', 'Carpenter'),
            'landscraper' => Yii::t('app', 'Landscraper'),
            'plumber' => Yii::t('app', 'Plumber'),
            'tiler' => Yii::t('app', 'Tiler'),
            'house_other' => Yii::t('app', 'House Other'),
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
