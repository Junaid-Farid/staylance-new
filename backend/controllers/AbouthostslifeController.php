<?php

namespace backend\controllers;

use Yii;
use app\models\AboutHostsLife;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AbouthostslifeController implements the CRUD actions for AboutHostsLife model.
 */
class AbouthostslifeController extends Controller {

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
     * Lists all AboutHostsLife models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => AboutHostsLife::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AboutHostsLife model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new AboutHostsLife model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new AboutHostsLife();
        $model->scenario = 'lifeAgenda';
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['bestthing', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
                        'host_id' => $_GET['host_id'],
            ]);
        }
    }

    public function actionBestthing($id) {
        $model = $this->findModel($id);
        $model->scenario = 'bestThing';
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['favourites', 'id' => $model->id]);
        } else {
            return $this->render('bestThing', [
                        'model' => $model,
            ]);
        }
    }

    public function actionFavourites($id) {
        $model = $this->findModel($id);
        $model->scenario = 'favourites';
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['travel', 'id' => $model->id]);
        } else {
            return $this->render('favourites', [
                        'model' => $model,
            ]);
        }
    }

    public function actionTravel($id) {
        $model = $this->findModel($id);
        $model->scenario = 'travel';
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['aboutplace', 'id' => $model->id]);
        } else {
            return $this->render('travel', [
                        'model' => $model,
            ]);
        }
    }

    public function actionAboutplace($id) {
        $model = $this->findModel($id);
        $model->scenario = 'aboutPlace';
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['help', 'host_id' => $model->host_id]);
        } else {
            return $this->render('aboutPlace', [
                        'model' => $model,
            ]);
        }
    }

    public function actionHelp($host_id) {
        return $this->render('help', [
                    'host_id' => $host_id,
        ]);
    }

    /**
     * Updates an existing AboutHostsLife model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $model->scenario = 'lifeAgenda';
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['bestthing', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
                        'host_id' => $model->host_id,
            ]);
        }
    }

    /**
     * Deletes an existing AboutHostsLife model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AboutHostsLife model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AboutHostsLife the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = AboutHostsLife::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
