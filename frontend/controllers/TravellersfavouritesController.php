<?php

namespace frontend\controllers;

use Yii;
use app\models\TravellersFavourites;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\TravellersFood;
use app\models\TravellersLifeAgenda;

/**
 * TravellersfavouritesController implements the CRUD actions for TravellersFavourites model.
 */
class TravellersfavouritesController extends Controller {

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
     * Lists all TravellersFavourites models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => TravellersFavourites::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TravellersFavourites model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TravellersFavourites model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new TravellersFavourites();
        $traveller_id = isset($_GET['traveller_id']) ? $_GET['traveller_id'] : 0;
        $TravellersFood = TravellersFood::find()->where(['traveller_id' => $traveller_id])->one();
        $TravellersLifeAgenda = TravellersLifeAgenda::find()->where(['traveller_id' => $traveller_id])->one();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if (count($TravellersLifeAgenda) > 0) {
                return $this->redirect(['travellerslifeagenda/update', 'id' => $TravellersLifeAgenda->id]);
            } else {
                return $this->redirect(['travellerslifeagenda/create', 'traveller_id' => $traveller_id]);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
                        'TravellersFood' => $TravellersFood,
                        'traveller_id' => $traveller_id,
                        'TravellersLifeAgenda' => $TravellersLifeAgenda,
            ]);
        }
    }

    /**
     * Updates an existing TravellersFavourites model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $traveller_id = $model->traveller_id;
        $TravellersFood = TravellersFood::find()->where(['traveller_id' => $traveller_id])->one();
        $TravellersLifeAgenda = TravellersLifeAgenda::find()->where(['traveller_id' => $traveller_id])->one();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if (count($TravellersLifeAgenda) > 0) {
                return $this->redirect(['travellerslifeagenda/update', 'id' => $TravellersLifeAgenda->id]);
            } else {
                return $this->redirect(['travellerslifeagenda/create', 'traveller_id' => $traveller_id]);
            }
        } else {
            return $this->render('update', [
                        'model' => $model,
                        'TravellersFood' => $TravellersFood,
                        'traveller_id' => $traveller_id,
                        'TravellersLifeAgenda' => $TravellersLifeAgenda,
            ]);
        }
    }

    /**
     * Deletes an existing TravellersFavourites model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TravellersFavourites model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TravellersFavourites the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = TravellersFavourites::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
