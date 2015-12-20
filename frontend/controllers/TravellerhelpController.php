<?php

namespace frontend\controllers;

use Yii;
use app\models\TravellerHelp;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use \app\models\TravellerDescription;
use app\models\TravellersProfile;

/**
 * TravellerhelpController implements the CRUD actions for TravellerHelp model.
 */
class TravellerhelpController extends Controller {

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
     * Lists all TravellerHelp models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => TravellerHelp::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TravellerHelp model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TravellerHelp model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new TravellerHelp();
        $traveller_id = isset($_GET['traveller_id']) ? $_GET['traveller_id'] : 0;
        $descriptionmodel = TravellerDescription::find()->where(['traveller_id' => $traveller_id])->one();
        $profilemodel = TravellersProfile::find()->where(['traveller_id' => $traveller_id])->one();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if (count($profilemodel) > 0) {
                return $this->redirect(['travellersprofile/update', 'id' => $profilemodel->id]);
            } else {
                return $this->redirect(['travellersprofile/create', 'traveller_id' => $model->traveller_id]);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
                        'traveller_id' => $traveller_id,
                        'descriptionmodel' => $descriptionmodel,
                        'profilemodel' => $profilemodel,
            ]);
        }
    }

    /**
     * Updates an existing TravellerHelp model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $descriptionmodel = TravellerDescription::find()->where(['traveller_id' => $model->traveller_id])->one();
        $profilemodel = TravellersProfile::find()->where(['traveller_id' => $model->traveller_id])->one();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if (count($profilemodel) > 0) {
                return $this->redirect(['travellersprofile/update', 'id' => $profilemodel->id]);
            } else {
                return $this->redirect(['travellersprofile/create', 'traveller_id' => $model->traveller_id]);
            }
        } else {
            return $this->render('update', [
                        'model' => $model,
                        'traveller_id' => $model->traveller_id,
                        'descriptionmodel' => $descriptionmodel,
                        'profilemodel' => $profilemodel,
            ]);
        }
    }

    /**
     * Deletes an existing TravellerHelp model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TravellerHelp model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TravellerHelp the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = TravellerHelp::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
