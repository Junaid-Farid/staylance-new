<?php

namespace backend\controllers;

use Yii;
use app\models\HostsGeneralHelp;
use app\models\HostsProfessionalHelp;
use app\models\HostsArtisticHelp;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\HostsSkillDetails;

/**
 * HostsprofessionalhelpController implements the CRUD actions for HostsProfessionalHelp model.
 */
class HostsprofessionalhelpController extends Controller {

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
     * Lists all HostsProfessionalHelp models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => HostsProfessionalHelp::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single HostsProfessionalHelp model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new HostsProfessionalHelp model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new HostsProfessionalHelp();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $newmodel = HostsGeneralHelp::find()->where(['host_id' => $model->host_id])->one();
            $newmodel->delete();
            $newmodel2 = HostsArtisticHelp::find()->where(['host_id' => $model->host_id])->one();
            $newmodel2->delete();
            $modelcount = HostsSkillDetails::find()->where(['host_id' => $model->host_id])->one();
            if (count($modelcount) != 1) {
                return $this->redirect(['hostskilldetails/create', 'host_id' => $model->host_id]);
            } else {
                return $this->redirect(['hostskilldetails/update', 'id' => $modelcount->id]);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
                        'host_id' => $_GET['host_id'],
            ]);
        }
    }

    /**
     * Updates an existing HostsProfessionalHelp model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $modelcount = HostsSkillDetails::find()->where(['host_id' => $model->host_id])->one();
            if (count($modelcount) != 1) {
                return $this->redirect(['hostskilldetails/create', 'host_id' => $model->host_id]);
            } else {
                return $this->redirect(['hostskilldetails/update', 'id' => $modelcount->id]);
            }
        } else {
            return $this->render('update', [
                        'model' => $model,
                        'host_id' => $model->host_id,
            ]);
        }
    }

    /**
     * Deletes an existing HostsProfessionalHelp model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the HostsProfessionalHelp model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return HostsProfessionalHelp the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = HostsProfessionalHelp::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
