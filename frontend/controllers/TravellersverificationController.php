<?php

namespace frontend\controllers;

use Yii;
use app\models\TravellersVerification;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TravellersverificationController implements the CRUD actions for TravellersVerification model.
 */
class TravellersverificationController extends Controller {

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
     * Lists all TravellersVerification models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => TravellersVerification::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TravellersVerification model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TravellersVerification model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new TravellersVerification();
        $traveller_id = isset($_GET['traveller_id']) ? $_GET['traveller_id'] : 0;

        if ($model->load(Yii::$app->request->post())) {
            if (isset($model->email_code) && $model->email_code != '') {
                echo 'good';
                $model->email_status = 1;
            }
            if ($model->save()) {
                return $this->redirect(['update', 'id' => $model->id]);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
                        'traveller_id' => $traveller_id,
            ]);
        }
    }

    /**
     * Updates an existing TravellersVerification model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            if (isset($model->email_code) && $model->email_code != '') {
                echo 'good';
                $model->email_status = 1;
            }
            if ($model->save()) {
                return $this->redirect(['update', 'id' => $model->id]);
            }
        } else {
            return $this->render('update', [
                        'model' => $model,
                        'traveller_id' => $model->traveller_id,
            ]);
        }
    }

    /**
     * Deletes an existing TravellersVerification model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TravellersVerification model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TravellersVerification the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = TravellersVerification::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
