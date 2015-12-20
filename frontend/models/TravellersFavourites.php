<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "travellers_favourites".
 *
 * @property integer $id
 * @property integer $traveller_id
 * @property string $music
 * @property string $film
 * @property string $food
 * @property string $book
 * @property string $quote
 * @property integer $created_at
 * @property integer $updated_at
 */
class TravellersFavourites extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'travellers_favourites';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['traveller_id', 'music', 'film', 'food', 'book', 'quote'], 'required'],
            [['traveller_id', 'created_at', 'updated_at'], 'integer'],
            [['music', 'film', 'food', 'book', 'quote'], 'string', 'max' => 255]
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
            'traveller_id' => Yii::t('app', 'Traveller ID'),
            'music' => Yii::t('app', 'Music'),
            'film' => Yii::t('app', 'Film'),
            'food' => Yii::t('app', 'Food'),
            'book' => Yii::t('app', 'Book'),
            'quote' => Yii::t('app', 'Quote'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

}
