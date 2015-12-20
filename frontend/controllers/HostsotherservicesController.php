<?php

namespace frontend\controllers;

use Yii;
use app\models\HostsOtherServices;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\HostsFoods;

/**
 * HostsotherservicesController implements the CRUD actions for HostsOtherServices model.
 */
class HostsotherservicesController extends Controller {

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
     * Lists all HostsOtherServices models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => HostsOtherServices::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single HostsOtherServices model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new HostsOtherServices model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new HostsOtherServices();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $newmodel = HostsFoods::find()->where(['host_id' => $model->host_id])->one();
            if (count($newmodel) != 1) {
                return $this->redirect(['hostsfoods/create', 'host_id' => $model->host_id]);
            } else {
                return $this->redirect(['hostsfoods/update', 'id' => $newmodel->id]);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
                        'host_id' => $_GET['host_id'],
            ]);
        }
    }

    /**
     * Updates an existing HostsOtherServices model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $newmodel = HostsFoods::find()->where(['host_id' => $model->host_id])->one();
            if (count($newmodel) != 1) {
                return $this->redirect(['hostsfoods/create', 'host_id' => $model->host_id]);
            } else {
                return $this->redirect(['hostsfoods/update', 'id' => $newmodel->id]);
            }
        } else {
            return $this->render('update', [
                        'model' => $model,
                        'host_id' => $model->host_id,
            ]);
        }
    }

    /**
     * Deletes an existing HostsOtherServices model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the HostsOtherServices model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return HostsOtherServices the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = HostsOtherServices::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
