<?php

namespace frontend\controllers;

use Yii;
use app\models\HostsLanguages;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HostslanguagesController implements the CRUD actions for HostsLanguages model.
 */
class HostslanguagesController extends Controller {

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
     * Lists all HostsLanguages models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => HostsLanguages::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single HostsLanguages model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new HostsLanguages model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $host_id = $_GET['host_id'];
        $dataProvidermothertounge = new ActiveDataProvider([
            'query' => HostsLanguages::find()->where(['host_id' => $host_id])->andWhere(['type' => 'Mother Tongue']),
        ]);
        $dataProviderFluent = new ActiveDataProvider([
            'query' => HostsLanguages::find()->where(['host_id' => $host_id])->andWhere(['type' => 'Fluent']),
        ]);
        $dataProviderLearnig = new ActiveDataProvider([
            'query' => HostsLanguages::find()->where(['host_id' => $host_id])->andWhere(['type' => 'Learning']),
        ]);
        $model = new HostsLanguages();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['create', 'host_id' => $model->host_id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
                        'host_id' => $host_id,
                        'dataProvidermothertounge' => $dataProvidermothertounge,
                        'dataProviderFluent' => $dataProviderFluent,
                        'dataProviderLearnig' => $dataProviderLearnig,
            ]);
        }
    }

    /**
     * Updates an existing HostsLanguages model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['create', 'host_id' => $model->host_id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing HostsLanguages model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $model = $this->findModel($id);
        $this->findModel($id)->delete();

        return $this->redirect(['create', 'host_id' => $model->host_id]);
    }

    /**
     * Finds the HostsLanguages model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return HostsLanguages the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = HostsLanguages::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
