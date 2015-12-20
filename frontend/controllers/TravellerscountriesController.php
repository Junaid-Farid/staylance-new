<?php

namespace frontend\controllers;

use Yii;
use app\models\TravellersCountries;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\TravellersBestThing;
use backend\models\Countries;

/**
 * TravellerscountriesController implements the CRUD actions for TravellersCountries model.
 */
class TravellerscountriesController extends Controller {

    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all TravellersCountries models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => TravellersCountries::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TravellersCountries model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TravellersCountries model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new TravellersCountries();
        $traveller_id = isset($_GET['traveller_id']) ? $_GET['traveller_id'] : 0;
        $TravellersBestThing = TravellersBestThing::find()->where(['traveller_id' => $traveller_id])->one();
        $Countries = Yii::$app->commoncomponent->getAllCountriesArray();

        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->commoncomponent->deleteTravellerCountries($traveller_id);
            Yii::$app->commoncomponent->saveTravellerCountries($model->travelled_country, $traveller_id, 'travelled_country');
            Yii::$app->commoncomponent->saveTravellerCountries($model->lived_country, $traveller_id, 'lived_country');
            Yii::$app->commoncomponent->saveTravellerCountries($model->favourite_country, $traveller_id, 'favourite_country');

            return $this->redirect(['travellers/imagegallery', 'id' => $traveller_id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
                        'traveller_id' => $traveller_id,
                        'TravellersBestThing' => $TravellersBestThing,
                        'Countries' => $Countries,
            ]);
        }
    }

    /**
     * Updates an existing TravellersCountries model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $traveller = \frontend\models\Travellers::findOne($id);
        $model = new TravellersCountries();
        $model->travelled_country = Yii::$app->commoncomponent->getCountriesArray($traveller->travelledCountries);
        $model->lived_country = Yii::$app->commoncomponent->getCountriesArray($traveller->livedCountries);
        $model->favourite_country = Yii::$app->commoncomponent->getCountriesArray($traveller->favouriteCountries);
        $Countries = Yii::$app->commoncomponent->getAllCountriesArray();
        $TravellersBestThing = TravellersBestThing::find()->where(['traveller_id' => $id])->one();

        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->commoncomponent->deleteTravellerCountries($id);
            Yii::$app->commoncomponent->saveTravellerCountries($model->travelled_country, $id, 'travelled_country');
            Yii::$app->commoncomponent->saveTravellerCountries($model->lived_country, $id, 'lived_country');
            Yii::$app->commoncomponent->saveTravellerCountries($model->favourite_country, $id, 'favourite_country');
            return $this->redirect(['travellers/imagegallery', 'id' => $model->traveller_id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
                        'traveller_id' => $id,
                        'TravellersBestThing' => $TravellersBestThing,
                        'Countries' => $Countries,
            ]);
        }
    }

    /**
     * Deletes an existing TravellersCountries model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TravellersCountries model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TravellersCountries the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = TravellersCountries::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
