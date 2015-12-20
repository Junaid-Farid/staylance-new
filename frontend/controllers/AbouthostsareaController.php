<?php

namespace frontend\controllers;

use Yii;
use app\models\AboutHostsArea;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\HostsAccommodation;

/**
 * AbouthostsareaController implements the CRUD actions for AboutHostsArea model.
 */
class AbouthostsareaController extends Controller {

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
     * Lists all AboutHostsArea models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => AboutHostsArea::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AboutHostsArea model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new AboutHostsArea model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new AboutHostsArea();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $newmodel = HostsAccommodation::find()->where(['host_id' => $model->host_id])->one();
            if (count($newmodel) != 1) {
                return $this->redirect(['hostaccommodation/create', 'host_id' => $model->host_id]);
            } else {
                return $this->redirect(['hostaccommodation/update', 'id' => $newmodel->id]);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
                        'host_id' => $_GET['host_id'],
            ]);
        }
    }

    /**
     * Updates an existing AboutHostsArea model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $newmodel = HostsAccommodation::find()->where(['host_id' => $model->host_id])->one();
            if (count($newmodel) != 1) {
                return $this->redirect(['hostaccommodation/create', 'host_id' => $model->host_id]);
            } else {
                return $this->redirect(['hostaccommodation/update', 'id' => $newmodel->id]);
            }
        } else {
            return $this->render('update', [
                        'model' => $model,
                        'host_id' => $model->id,
            ]);
        }
    }

    /**
     * Deletes an existing AboutHostsArea model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AboutHostsArea model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AboutHostsArea the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = AboutHostsArea::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
