<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "hosts_other_services".
 *
 * @property integer $id
 * @property integer $host_id
 * @property integer $wifi_included_with_stay
 * @property integer $wifi_possible_for_extra_charges
 * @property string $wifi_any_extra_charges
 * @property integer $laundry_included_with_stay
 * @property integer $laundry_possible_for_extra_charges
 * @property string $laundry_any_extra_charges
 * @property integer $bicycle_included_with_stay
 * @property integer $bicycle_possible_for_extra_charges
 * @property string $bicycle_any_extra_charges
 * @property integer $collection_included_with_stay
 * @property integer $collection_possible_for_extra_charges
 * @property string $collection_any_extra_charges
 * @property integer $car_included_with_stay
 * @property integer $car_possible_for_extra_charges
 * @property string $car_any_extra_charges
 * @property integer $anything_else_included_with_stay
 * @property integer $anything_else_possible_for_extra_charges
 * @property string $anything_else_any_extra_charges
 * @property integer $created_at
 * @property integer $updated_at
 */
class HostsOtherServices extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'hosts_other_services';
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
            [['host_id', 'wifi_included_with_stay', 'laundry_included_with_stay', 'bicycle_included_with_stay', 'collection_included_with_stay', 'car_included_with_stay', 'anything_else_included_with_stay'], 'required'],
            [['host_id', 'wifi_included_with_stay', 'wifi_possible_for_extra_charges', 'laundry_included_with_stay', 'laundry_possible_for_extra_charges', 'bicycle_included_with_stay', 'bicycle_possible_for_extra_charges', 'collection_included_with_stay', 'collection_possible_for_extra_charges', 'car_included_with_stay', 'car_possible_for_extra_charges', 'anything_else_included_with_stay', 'anything_else_possible_for_extra_charges', 'created_at', 'updated_at'], 'integer'],
            [['wifi_any_extra_charges', 'laundry_any_extra_charges', 'bicycle_any_extra_charges', 'collection_any_extra_charges', 'car_any_extra_charges', 'anything_else_any_extra_charges'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'host_id' => Yii::t('app', 'Host ID'),
            'wifi_included_with_stay' => Yii::t('app', 'Wifi Included With Stay'),
            'wifi_possible_for_extra_charges' => Yii::t('app', 'Wifi Possible For Extra Charges'),
            'wifi_any_extra_charges' => Yii::t('app', 'Wifi Any Extra Charges'),
            'laundry_included_with_stay' => Yii::t('app', 'Laundry Included With Stay'),
            'laundry_possible_for_extra_charges' => Yii::t('app', 'Laundry Possible For Extra Charges'),
            'laundry_any_extra_charges' => Yii::t('app', 'Laundry Any Extra Charges'),
            'bicycle_included_with_stay' => Yii::t('app', 'Bicycle Included With Stay'),
            'bicycle_possible_for_extra_charges' => Yii::t('app', 'Bicycle Possible For Extra Charges'),
            'bicycle_any_extra_charges' => Yii::t('app', 'Bicycle Any Extra Charges'),
            'collection_included_with_stay' => Yii::t('app', 'Collection Included With Stay'),
            'collection_possible_for_extra_charges' => Yii::t('app', 'Collection Possible For Extra Charges'),
            'collection_any_extra_charges' => Yii::t('app', 'Collection Any Extra Charges'),
            'car_included_with_stay' => Yii::t('app', 'Car Included With Stay'),
            'car_possible_for_extra_charges' => Yii::t('app', 'Car Possible For Extra Charges'),
            'car_any_extra_charges' => Yii::t('app', 'Car Any Extra Charges'),
            'anything_else_included_with_stay' => Yii::t('app', 'Anything Else Included With Stay'),
            'anything_else_possible_for_extra_charges' => Yii::t('app', 'Anything Else Possible For Extra Charges'),
            'anything_else_any_extra_charges' => Yii::t('app', 'Anything Else Any Extra Charges'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

}
