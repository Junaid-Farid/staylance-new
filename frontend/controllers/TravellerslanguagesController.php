<?php

namespace frontend\controllers;

use Yii;
use app\models\TravellersLanguages;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\TravellersProfile;
use backend\models\Languages;
use app\models\TravellersFood;

/**
 * TravellerslanguagesController implements the CRUD actions for TravellersLanguages model.
 */
class TravellerslanguagesController extends Controller {

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
     * Lists all TravellersLanguages models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => TravellersLanguages::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TravellersLanguages model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TravellersLanguages model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new TravellersLanguages();
        $traveller_id = isset($_GET['traveller_id']) ? $_GET['traveller_id'] : 0;
        $Languages = Yii::$app->commoncomponent->getAllLanguagesArray();
        $travellerprofile = TravellersProfile::find()->where(['traveller_id' => $traveller_id])->one();
        $travellerfood = TravellersFood::find()->where(['traveller_id' => $traveller_id])->one();
        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->commoncomponent->saveTravellerLanguages($model->mother_language, $id, 'mother_language');
            Yii::$app->commoncomponent->saveTravellerLanguages($model->fluent_language, $id, 'fluent');
            Yii::$app->commoncomponent->saveTravellerLanguages($model->learning_language, $id, 'learning');
            if (count($travellerfood) > 0) {
                return $this->redirect(['travellersfood/update', 'id' => $travellerfood->id]);
            } else {
                return $this->redirect(['travellersfood/create', 'traveller_id' => $traveller_id]);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
                        'traveller_id' => $traveller_id,
                        'travellerprofile' => $travellerprofile,
                        'Languages' => $Languages,
                        'travellerfood' => $travellerfood,
            ]);
        }
    }

    /**
     * Updates an existing TravellersLanguages model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $traveller = \frontend\models\Travellers::findOne($id);
        $model = new TravellersLanguages();
        $model->mother_language = Yii::$app->commoncomponent->getLanguagesArray($traveller->motherLanguages);
        $model->fluent_language = Yii::$app->commoncomponent->getLanguagesArray($traveller->fluentLanguages);
        $model->learning_language = Yii::$app->commoncomponent->getLanguagesArray($traveller->learningLanguages);
        $Languages = Yii::$app->commoncomponent->getAllLanguagesArray();
        $travellerprofile = TravellersProfile::find()->where(['traveller_id' => $id])->one();
        $travellerfood = TravellersFood::find()->where(['traveller_id' => $id])->one();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->commoncomponent->deleteTravellerLanguages($id);
            Yii::$app->commoncomponent->saveTravellerLanguages($model->mother_language, $id, 'mother_language');
            Yii::$app->commoncomponent->saveTravellerLanguages($model->fluent_language, $id, 'fluent');
            Yii::$app->commoncomponent->saveTravellerLanguages($model->learning_language, $id, 'learning');
            if (count($travellerfood) > 0) {
                return $this->redirect(['travellersfood/update', 'id' => $travellerfood->id]);
            } else {
                return $this->redirect(['travellersfood/create', 'traveller_id' => $traveller_id]);
            }
        } else {
            return $this->render('update', [
                        'model' => $model,
                        'traveller_id' => $id,
                        'travellerprofile' => $travellerprofile,
                        'Languages' => $Languages,
                        'travellerfood' => $travellerfood,
            ]);
        }
    }

    /**
     * Deletes an existing TravellersLanguages model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TravellersLanguages model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TravellersLanguages the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = TravellersLanguages::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
