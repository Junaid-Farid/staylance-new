<?php

namespace frontend\controllers;

use Yii;
use app\models\TravellersProfile;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\TravellerHelp;
use app\models\TravellersLanguages;

/**
 * TravellersprofileController implements the CRUD actions for TravellersProfile model.
 */
class TravellersprofileController extends Controller {

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
     * Lists all TravellersProfile models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => TravellersProfile::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TravellersProfile model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TravellersProfile model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new TravellersProfile();
        $traveller_id = isset($_GET['traveller_id']) ? $_GET['traveller_id'] : 0;
        $travellerhelp = TravellerHelp::find()->where(['traveller_id' => $traveller_id])->one();
        $travellerlanguages = TravellersLanguages::find()->where(['traveller_id' => $traveller_id])->one();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if (count($travellerlanguages) > 0) {
                return $this->redirect(['travellerslanguages/update', 'id' => $model->traveller_id]);
            } else {
                return $this->redirect(['travellerslanguages/create', 'traveller_id' => $model->traveller_id]);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
                        'traveller_id' => $traveller_id,
                        'travellerhelp' => $travellerhelp,
                        'travellerlanguages' => $travellerlanguages,
            ]);
        }
    }

    /**
     * Updates an existing TravellersProfile model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $travellerhelp = TravellerHelp::find()->where(['traveller_id' => $model->traveller_id])->one();
        $travellerlanguages = TravellersLanguages::find()->where(['traveller_id' => $model->traveller_id])->one();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if (count($travellerlanguages) > 0) {
                return $this->redirect(['travellerslanguages/update', 'id' => $model->traveller_id]);
            } else {
                return $this->redirect(['travellerslanguages/create', 'traveller_id' => $model->traveller_id]);
            }
        } else {
            return $this->render('update', [
                        'model' => $model,
                        'traveller_id' => $model->traveller_id,
                        'travellerhelp' => $travellerhelp,
                        'travellerlanguages' => $travellerlanguages,
            ]);
        }
    }

    /**
     * Deletes an existing TravellersProfile model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TravellersProfile model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TravellersProfile the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = TravellersProfile::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
