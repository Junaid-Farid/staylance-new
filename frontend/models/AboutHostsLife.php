<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "about_hosts_life".
 *
 * @property integer $id
 * @property integer $host_id
 * @property string $life_agenda
 * @property string $best_thing_in_life
 * @property string $music
 * @property string $film
 * @property string $food
 * @property string $book
 * @property string $do_not_like
 * @property string $counteries_travelled
 * @property string $counteries_like_to_travell
 * @property string $favourite_country
 * @property string $why_host
 * @property string $travel_qoute
 * @property string $anything_special
 * @property string $anything_else
 * @property integer $created_at
 * @property integer $updated_at
 */
class AboutHostsLife extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'about_hosts_life';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['host_id', 'life_agenda', 'best_thing_in_life', 'music', 'film', 'food', 'book', 'do_not_like', 'counteries_travelled', 'counteries_like_to_travell', 'favourite_country', 'why_host', 'travel_qoute', 'anything_special', 'anything_else'], 'required'],
            [['host_id', 'created_at', 'updated_at'], 'integer'],
            [['life_agenda', 'best_thing_in_life', 'music', 'film', 'food', 'book', 'do_not_like', 'counteries_travelled', 'counteries_like_to_travell', 'favourite_country', 'why_host', 'travel_qoute', 'anything_special', 'anything_else'], 'string', 'max' => 255]
        ];
    }

    public function behaviors() {
        return [
            TimestampBehavior::className(),
        ];
    }

    public function scenarios() {
        $scenarios = parent::scenarios();
        $scenarios['lifeAgenda'] = ['host_id', 'life_agenda'];
        $scenarios['bestThing'] = ['best_thing_in_life'];
        $scenarios['favourites'] = ['music', 'film', 'food', 'book', 'do_not_like'];
        $scenarios['travel'] = ['counteries_travelled', 'counteries_like_to_travell', 'favourite_country', 'why_host', 'travel_qoute'];
        $scenarios['aboutPlace'] = ['anything_special', 'anything_else'];
        return $scenarios;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'host_id' => Yii::t('app', 'Host ID'),
            'life_agenda' => Yii::t('app', 'Life Agenda'),
            'best_thing_in_life' => Yii::t('app', 'Best Thing In Life'),
            'music' => Yii::t('app', 'Music'),
            'film' => Yii::t('app', 'Film'),
            'food' => Yii::t('app', 'Food'),
            'book' => Yii::t('app', 'Book'),
            'do_not_like' => Yii::t('app', 'Do Not Like'),
            'counteries_travelled' => Yii::t('app', 'Counteries Travelled'),
            'counteries_like_to_travell' => Yii::t('app', 'Counteries Like To Travell'),
            'favourite_country' => Yii::t('app', 'Favourite Country'),
            'why_host' => Yii::t('app', 'Why Host'),
            'travel_qoute' => Yii::t('app', 'Travel Qoute'),
            'anything_special' => Yii::t('app', 'Anything Special'),
            'anything_else' => Yii::t('app', 'Anything Else'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

}
