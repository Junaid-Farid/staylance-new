<?php

namespace frontend\controllers;

use Yii;
use app\models\TravellersFood;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\TravellersFavourites;
use app\models\TravellersLanguages;

/**
 * TravellersfoodController implements the CRUD actions for TravellersFood model.
 */
class TravellersfoodController extends Controller {

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
     * Lists all TravellersFood models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => TravellersFood::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TravellersFood model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TravellersFood model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new TravellersFood();
        $traveller_id = isset($_GET['traveller_id']) ? $_GET['traveller_id'] : 0;
        $TravellersFavourites = TravellersFavourites::find()->where(['traveller_id' => $traveller_id])->one();
        $travellerlanguages = TravellersLanguages::find()->where(['traveller_id' => $traveller_id])->one();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if (count($TravellersFavourites) > 0) {
                return $this->redirect(['travellersfavourites/update', 'id' => $TravellersFavourites->id]);
            } else {
                return $this->redirect(['travellersfavourites/create', 'traveller_id' => $traveller_id]);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
                        'traveller_id' => $traveller_id,
                        'TravellersFavourites' => $TravellersFavourites,
                        'travellerlanguages' => $travellerlanguages,
            ]);
        }
    }

    /**
     * Updates an existing TravellersFood model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $traveller_id = $model->traveller_id;
        $TravellersFavourites = TravellersFavourites::find()->where(['traveller_id' => $traveller_id])->one();
        $travellerlanguages = TravellersLanguages::find()->where(['traveller_id' => $traveller_id])->one();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if (count($TravellersFavourites) > 0) {
                return $this->redirect(['travellersfavourites/update', 'id' => $TravellersFavourites->id]);
            } else {
                return $this->redirect(['travellersfavourites/create', 'traveller_id' => $traveller_id]);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
                        'traveller_id' => $traveller_id,
                        'TravellersFavourites' => $TravellersFavourites,
                        'travellerlanguages' => $travellerlanguages,
            ]);
        }
    }

    /**
     * Deletes an existing TravellersFood model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TravellersFood model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TravellersFood the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = TravellersFood::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
