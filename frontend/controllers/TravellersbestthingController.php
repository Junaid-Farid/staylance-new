<?php

namespace frontend\controllers;

use Yii;
use app\models\TravellersBestThing;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\TravellersLifeAgenda;
use app\models\TravellersCountries;

/**
 * TravellersbestthingController implements the CRUD actions for TravellersBestThing model.
 */
class TravellersbestthingController extends Controller {

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
     * Lists all TravellersBestThing models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => TravellersBestThing::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TravellersBestThing model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TravellersBestThing model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new TravellersBestThing();

        $traveller_id = isset($_GET['traveller_id']) ? $_GET['traveller_id'] : 0;
        $TravellersLifeAgenda = TravellersLifeAgenda::find()->where(['traveller_id' => $traveller_id])->one();
        $TravellersTrevell = TravellersCountries::find()->where(['traveller_id' => $traveller_id])->one();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if (count($TravellersTrevell) > 0) {
                return $this->redirect(['travellerscountries/update', 'id' => $traveller_id]);
            } else {
                return $this->redirect(['travellerscountries/create', 'traveller_id' => $traveller_id]);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
                        'traveller_id' => $traveller_id,
                        'TravellersLifeAgenda' => $TravellersLifeAgenda,
                        'TravellersTrevell' => $TravellersTrevell,
            ]);
        }
    }

    /**
     * Updates an existing TravellersBestThing model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        $traveller_id = $model->traveller_id;
        $TravellersLifeAgenda = TravellersLifeAgenda::find()->where(['traveller_id' => $traveller_id])->one();
        $TravellersTrevell = TravellersCountries::find()->where(['traveller_id' => $traveller_id])->one();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if (count($TravellersTrevell) > 0) {
                return $this->redirect(['travellerscountries/update', 'id' => $traveller_id]);
            } else {
                return $this->redirect(['travellerscountries/create', 'traveller_id' => $traveller_id]);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
                        'traveller_id' => $traveller_id,
                        'TravellersLifeAgenda' => $TravellersLifeAgenda,
                        'TravellersTrevell' => $TravellersTrevell,
            ]);
        }
    }

    /**
     * Deletes an existing TravellersBestThing model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TravellersBestThing model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TravellersBestThing the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = TravellersBestThing::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
