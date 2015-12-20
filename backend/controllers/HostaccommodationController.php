<?php

namespace backend\controllers;
use Yii;
use app\models\HostsAccommodation;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\HostsOtherServices;

/**
 * HostaccommodationController implements the CRUD actions for HostsAccommodation model.
 */
class HostaccommodationController extends Controller {

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
     * Lists all HostsAccommodation models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => HostsAccommodation::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single HostsAccommodation model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new HostsAccommodation model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new HostsAccommodation();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $newmodel = HostsOtherServices::find()->where(['host_id' => $model->host_id])->one();
            if (count($newmodel) != 1) {
                return $this->redirect(['hostsotherservices/create', 'host_id' => $model->host_id]);
            } else {
                return $this->redirect(['hostsotherservices/update', 'id' => $newmodel->id]);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
                        'host_id' => $_GET['host_id'],
            ]);
        }
    }

    /**
     * Updates an existing HostsAccommodation model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $newmodel = HostsOtherServices::find()->where(['host_id' => $model->host_id])->one();
            if (count($newmodel) != 1) {
                return $this->redirect(['hostsotherservices/create', 'host_id' => $model->host_id]);
            } else {
                return $this->redirect(['hostsotherservices/update', 'id' => $newmodel->id]);
            }
        } else {
            return $this->render('update', [
                        'model' => $model,
                        'host_id' => $model->host_id,
            ]);
        }
    }

    /**
     * Deletes an existing HostsAccommodation model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the HostsAccommodation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return HostsAccommodation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = HostsAccommodation::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
