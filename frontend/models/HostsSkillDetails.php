<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "hosts_skill_details".
 *
 * @property integer $id
 * @property integer $host_id
 * @property string $kills_detail
 * @property integer $created_at
 * @property integer $updated_at
 */
class HostsSkillDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hosts_skill_details';
    }

    public function behaviors() {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['host_id', 'kills_detail'], 'required'],
            [['host_id', 'created_at', 'updated_at'], 'integer'],
            [['kills_detail'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'host_id' => Yii::t('app', 'Host ID'),
            'kills_detail' => Yii::t('app', 'Kills Detail'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
