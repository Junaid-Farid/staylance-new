<?php

namespace app\components;

use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
use backend\models\Countries;
use app\models\TravellersCountries;
use backend\models\Languages;
use app\models\TravellersLanguages;

class CommonComponent extends Component {

    public function welcome() {
        echo "Hello..Welcome to CommonComponent";
    }

    public function getCountriesArray($model) {
        $resulting_array = array();
        foreach ($model as $record) {
            $resulting_array[$record->id] = $record->id;
        }
        return $resulting_array;
    }

    public function getAllCountriesArray() {
        $countries = Countries::find()->multilingual()->all();
        foreach ($countries as $country) {
            $countriesArray[$country->id] = $country->name;
        }
        return $countriesArray;
    }

    public function deleteTravellerCountries($id) {
        $countries = TravellersCountries::find()->where(['traveller_id' => $id])->all();
        foreach ($countries as $country) {
            $country->delete();
        }
        return true;
    }

    public function saveTravellerCountries($dataArray, $traveller_id, $type) {

        foreach ($dataArray as $record) {
            $modelInsert = new TravellersCountries();
            $modelInsert->traveller_id = $traveller_id;
            $modelInsert->country_name = $record;
            $modelInsert->country_description = $type;
            $modelInsert->save(false);
        }
        return TRUE;
    }

    public function getLanguagesArray($model) {
        $resulting_array = array();
        foreach ($model as $record) {
            $resulting_array[$record->id] = $record->id;
        }
        return $resulting_array;
    }

    public function getAllLanguagesArray() {
        $languages = Languages::find()->multilingual()->all();
        foreach ($languages as $language) {
            $languagesArray[$language->id] = $language->name;
        }
        return $languagesArray;
    }

    public function deleteTravellerLanguages($id) {
        $languages = TravellersLanguages::find()->where(['traveller_id' => $id])->all();
        foreach ($languages as $language) {
            $language->delete();
        }
        return true;
    }

    public function saveTravellerLanguages($dataArray, $traveller_id, $type) {

        foreach ($dataArray as $record) {
            $modelInsert = new TravellersLanguages();
            $modelInsert->traveller_id = $traveller_id;
            $modelInsert->language = $record;
            $modelInsert->type = $type;
            $modelInsert->save(false);
        }
        return TRUE;
    }

}
