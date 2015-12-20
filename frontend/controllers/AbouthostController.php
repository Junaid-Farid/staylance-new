<?php

namespace frontend\controllers;

use Yii;
use app\models\AboutHost;
use app\models\UploadForm;
use yii\web\UploadedFile;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AbouthostController implements the CRUD actions for AboutHost model.
 */
class AbouthostController extends Controller {

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
     * Lists all AboutHost models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => AboutHost::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AboutHost model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new AboutHost model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new AboutHost();
        $model2 = new UploadForm();
        $host_id = $_GET['host_id'];

        if ($model->load(Yii::$app->request->post())) {
            $model2->videoFile = UploadedFile::getInstance($model2, 'videoFile');
            if ($model2->upload()) {
                if ($model->save()) {
                    return $this->redirect(['hostslanguages/create', 'host_id' => $model->host_id]);
                }
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model2' => $model2,
                        'model' => $model,
                        'host_id' => $host_id,
            ]);
        }
    }

    /**
     * Updates an existing AboutHost model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $model2 = new UploadForm();

        if ($model->load(Yii::$app->request->post())) {
            $model2->videoFile = UploadedFile::getInstance($model2, 'videoFile');
            if ($model2->upload()) {
                if ($model->save()) {
                    return $this->redirect(['hostslanguages/create', 'host_id' => $model->host_id]);
                }
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model2' => $model2,
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing AboutHost model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AboutHost model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AboutHost the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = AboutHost::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
