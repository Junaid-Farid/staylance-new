<?php

namespace frontend\controllers;

use Yii;
use app\models\TravellersLifeAgenda;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\TravellersFavourites;
use app\models\TravellersBestThing;

/**
 * TravellerslifeagendaController implements the CRUD actions for TravellersLifeAgenda model.
 */
class TravellerslifeagendaController extends Controller {

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
     * Lists all TravellersLifeAgenda models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => TravellersLifeAgenda::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TravellersLifeAgenda model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TravellersLifeAgenda model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new TravellersLifeAgenda();
        $traveller_id = isset($_GET['traveller_id']) ? $_GET['traveller_id'] : 0;
        $TravellersFavourites = TravellersFavourites::find()->where(['traveller_id' => $traveller_id])->one();
        $TravellersBestThing = TravellersBestThing::find()->where(['traveller_id' => $traveller_id])->one();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if (count($TravellersBestThing) > 0) {
                return $this->redirect(['travellersbestthing/update', 'id' => $TravellersBestThing->id]);
            } else {
                return $this->redirect(['travellersbestthing/create', 'traveller_id' => $traveller_id]);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
                        'traveller_id' => $traveller_id,
                        'TravellersFavourites' => $TravellersFavourites,
                        'TravellersBestThing' => $TravellersBestThing,
            ]);
        }
    }

    /**
     * Updates an existing TravellersLifeAgenda model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $traveller_id = $model->traveller_id;
        $TravellersFavourites = TravellersFavourites::find()->where(['traveller_id' => $traveller_id])->one();
        $TravellersBestThing = TravellersBestThing::find()->where(['traveller_id' => $traveller_id])->one();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if (count($TravellersBestThing) > 0) {
                return $this->redirect(['travellersbestthing/update', 'id' => $TravellersBestThing->id]);
            } else {
                return $this->redirect(['travellersbestthing/create', 'traveller_id' => $traveller_id]);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
                        'traveller_id' => $traveller_id,
                        'TravellersFavourites' => $TravellersFavourites,
                        'TravellersBestThing' => $TravellersBestThing,
            ]);
        }
    }

    /**
     * Deletes an existing TravellersLifeAgenda model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TravellersLifeAgenda model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TravellersLifeAgenda the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = TravellersLifeAgenda::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
