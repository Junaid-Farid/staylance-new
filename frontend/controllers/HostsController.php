<?php

namespace frontend\controllers;

use Yii;
use app\models\Hosts;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * HostsController implements the CRUD actions for Hosts model.
 */
class HostsController extends Controller {

    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['update'],
                'rules' => [
                    [
                        'actions' => ['update'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Hosts models.
     * @return mixed
     */
    public function actionIndex() {
//        $dataProvider = new ActiveDataProvider([
//            'query' => Hosts::find(),
//        ]);

        return $this->render('index');
    }

    /**
     * Displays a single Hosts model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    public function actionAbouthost($type) {
        return $this->render('About', [
                    'type' => $type,
        ]);
    }

    /**
     * Creates a new Hosts model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Hosts();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $hostAvailablity = \app\models\HostsAvailability::find()->where(['host_id' => $model->id])->one();
            if (count($hostAvailablity) != 1) {
                return $this->redirect(['hostsavailability/create', 'host_id' => $model->id]);
            } else {
                return $this->redirect(['hostsavailability/update', 'id' => $hostAvailablity->id]);
            }
        } else {
            if (isset($_GET)) {
                return $this->render('create', [
                            'model' => $model,
                            'type' => $_GET['type'],
                            'about' => $_GET['about'],
                ]);
            } else {
                return $this->render('create', [
                            'model' => $model,
                ]);
            }
        }
    }

    /**
     * Updates an existing Hosts model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $hostAvailablity = \app\models\HostsAvailability::find()->where(['host_id' => $model->id])->one();
            if (count($hostAvailablity) != 1) {
                return $this->redirect(['hostsavailability/create', 'host_id' => $model->id]);
            } else {
                return $this->redirect(['hostsavailability/update', 'id' => $hostAvailablity->id]);
            }
        } else {
            if (isset($_GET)) {
                return $this->render('create', [
                            'model' => $model,
                            'type' => $_GET['type'],
                            'about' => $_GET['about'],
                ]);
            } else {
                return $this->render('create', [
                            'model' => $model,
                ]);
            }
        }
    }

    /**
     * Deletes an existing Hosts model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Hosts model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Hosts the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Hosts::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
