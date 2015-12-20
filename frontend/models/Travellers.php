<?php

namespace frontend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use zxbodya\yii2\galleryManager\GalleryBehavior;

/**
 * This is the model class for table "travellers".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $gender
 * @property string $user_name
 * @property string $name
 * @property string $sur_name
 * @property string $address
 * @property string $country
 * @property string $province
 * @property string $city
 * @property integer $postcode
 * @property string $mobile_phone
 * @property string $landline
 * @property string $birthday
 * @property string $skype_id
 * @property string $website
 * @property string $how_find_staylance
 * @property integer $account_type
 * @property integer $created_at
 * @property integer $updated_at
 */
class Travellers extends \yii\db\ActiveRecord {

    public $reltype;

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'travellers';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['user_id', 'gender', 'user_name', 'name', 'sur_name', 'address', 'country', 'province', 'city', 'postcode', 'mobile_phone', 'landline', 'birthday', 'skype_id', 'website', 'how_find_staylance', 'account_type'], 'required'],
            [['user_id', 'postcode', 'account_type', 'created_at', 'updated_at'], 'integer'],
            [['gender', 'user_name', 'name', 'sur_name', 'address', 'country', 'province', 'city', 'mobile_phone', 'landline', 'birthday', 'skype_id', 'website', 'how_find_staylance'], 'string', 'max' => 255]
        ];
    }

    public function behaviors() {
        return [
            TimestampBehavior::className(),
            'galleryBehavior' => [
                'class' => GalleryBehavior::className(),
                'type' => 'travellers',
                'extension' => 'jpg',
                'directory' => Yii::getAlias('@webroot') . '/uploads/travellers/gallery',
                'url' => Yii::getAlias('@web') . '/uploads/travellers/gallery',
                'versions' => [
                    'small' => function ($img) {
                        /** @var \Imagine\Image\ImageInterface $img */
                        return $img->copy()->thumbnail(new \Imagine\Image\Box(200, 200));
                    },
                    'medium' => function ($img) {
                        /** @var Imagine\Image\ImageInterface $img */
                        $dstSize = $img->getSize();
                        $maxWidth = 800;
                        if ($dstSize->getWidth() > $maxWidth) {
                            $dstSize = $dstSize->widen($maxWidth);
                        }
                        return $img
                                        ->copy()
                                        ->resize($dstSize);
                    },
                ]
            ]
        ];
    }

    public function scenarios() {
        $scenarios = parent::scenarios();
        $scenarios['typeOfAccont'] = ['user_id', 'account_type'];
        $scenarios['addressDetails'] = ['gender', 'user_name', 'name', 'sur_name', 'address', 'country', 'province', 'city', 'postcode', 'mobile_phone', 'landline', 'birthday', 'skype_id', 'website', 'how_find_staylance'];
        return $scenarios;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'gender' => Yii::t('app', 'Gender'),
            'user_name' => Yii::t('app', 'User Name'),
            'name' => Yii::t('app', 'Name'),
            'sur_name' => Yii::t('app', 'Sur Name'),
            'address' => Yii::t('app', 'Adress'),
            'country' => Yii::t('app', 'Country'),
            'province' => Yii::t('app', 'Province'),
            'city' => Yii::t('app', 'City'),
            'postcode' => Yii::t('app', 'Postcode'),
            'mobile_phone' => Yii::t('app', 'Mobile Phone'),
            'landline' => Yii::t('app', 'Landline'),
            'birthday' => Yii::t('app', 'Birthday'),
            'skype_id' => Yii::t('app', 'Skype ID'),
            'website' => Yii::t('app', 'Website'),
            'how_find_staylance' => Yii::t('app', 'How Find Staylance'),
            'account_type' => Yii::t('app', 'Which type of account do you want to create?'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    public function getMotherLanguages() {
        return $this->hasMany(\backend\models\Languages::className(), ['id' => 'language'])
                        ->viaTable('travellers_languages', ['traveller_id' => 'id'], function($query) {
                            return $query->where('travellers_languages.type = "mother_language"');
                        });
    }

    public function getFluentLanguages() {
        return $this->hasMany(\backend\models\Languages::className(), ['id' => 'language'])
                        ->viaTable('travellers_languages', ['traveller_id' => 'id'], function($query) {
                            return $query->where('travellers_languages.type = "fluent"');
                        });
    }

    public function getLearningLanguages() {
        return $this->hasMany(\backend\models\Languages::className(), ['id' => 'language'])
                        ->viaTable('travellers_languages', ['traveller_id' => 'id'], function($query) {
                            return $query->where('travellers_languages.type = "learning"');
                        });
    }

    public function getTravelledCountries() {
        return $this->hasMany(\backend\models\Countries::className(), ['id' => 'country_name'])
                        ->viaTable('travellers_countries', ['traveller_id' => 'id'], function($query) {
                            return $query->where('travellers_countries.country_description = "travelled_country"');
                        });
    }

    public function getLivedCountries() {
        return $this->hasMany(\backend\models\Countries::className(), ['id' => 'country_name'])
                        ->viaTable('travellers_countries', ['traveller_id' => 'id'], function($query) {
                            return $query->where('travellers_countries.country_description = "lived_country"');
                        });
    }

    public function getFavouriteCountries() {
        return $this->hasMany(\backend\models\Countries::className(), ['id' => 'country_name'])
                        ->viaTable('travellers_countries', ['traveller_id' => 'id'], function($query) {
                            return $query->where('travellers_countries.country_description = "favourite_country"');
                        });
    }

}
