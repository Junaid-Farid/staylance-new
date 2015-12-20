<?php

namespace frontend\controllers;

use Yii;
use app\models\TravellerDescription;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use \app\models\TravellerHelp;
use app\models\TravellerPhoto;

/**
 * TravellerdescriptionController implements the CRUD actions for TravellerDescription model.
 */
class TravellerdescriptionController extends Controller {

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
     * Lists all TravellerDescription models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => TravellerDescription::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TravellerDescription model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TravellerDescription model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new TravellerDescription();
        $traveller_id = isset($_GET['traveller_id']) ? $_GET['traveller_id'] : 0;
        $traveller_photo = TravellerPhoto::find()->where(['traveller_id' => $model->traveller_id])->one();
        $traveller_help = TravellerHelp::find()->where(['traveller_id' => $model->traveller_id])->one();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if (count($traveller_help) > 0) {
                return $this->redirect(['travellerhelp/update', 'id' => $traveller_help->id]);
            } else {
                return $this->redirect(['travellerhelp/create', 'traveller_id' => $model->traveller_id]);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
                        'traveller_id' => $traveller_id,
                        'traveller_help' => $traveller_help,
                        'traveller_photo' => $traveller_photo,
            ]);
        }
    }

    /**
     * Updates an existing TravellerDescription model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $traveller_photo = TravellerPhoto::find()->where(['traveller_id' => $model->traveller_id])->one();
        $traveller_help = TravellerHelp::find()->where(['traveller_id' => $model->traveller_id])->one();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if (count($traveller_help) > 0) {
                return $this->redirect(['travellerhelp/update', 'id' => $traveller_help->id]);
            } else {
                return $this->redirect(['travellerhelp/create', 'traveller_id' => $model->traveller_id]);
            }
        } else {
            return $this->render('update', [
                        'model' => $model,
                        'traveller_id' => $model->traveller_id,
                        'traveller_help' => $traveller_help,
                        'traveller_photo' => $traveller_photo,
            ]);
        }
    }

    /**
     * Deletes an existing TravellerDescription model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TravellerDescription model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TravellerDescription the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = TravellerDescription::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
