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
 * HostsartistichelpController implements the CRUD actions for HostsArtisticHelp model.
 */
class HostsartistichelpController extends Controller {

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
     * Lists all HostsArtisticHelp models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => HostsArtisticHelp::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single HostsArtisticHelp model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new HostsArtisticHelp model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new HostsArtisticHelp();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $newmodel = HostsGeneralHelp::find()->where(['host_id' => $model->host_id])->one();
            $newmodel->delete();
            $newmodel1 = HostsProfessionalHelp::find()->where(['host_id' => $model->host_id])->one();
            $newmodel1->delete();
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
     * Updates an existing HostsArtisticHelp model.
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
     * Deletes an existing HostsArtisticHelp model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the HostsArtisticHelp model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return HostsArtisticHelp the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = HostsArtisticHelp::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
