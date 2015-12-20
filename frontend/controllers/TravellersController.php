<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Travellers;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\TravellerPhoto;
use zxbodya\yii2\galleryManager\GalleryManagerAction;
use app\models\TravellersCountries;
use app\models\TravellersVerification;

/**
 * TravellersController implements the CRUD actions for Travellers model.
 */
class TravellersController extends Controller {

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

    public function actions() {
        return [
            'galleryApi' => [
                'class' => GalleryManagerAction::className(),
                // mappings between type names and model classes (should be the same as in behaviour)
                'types' => [
                    'travellers' => Travellers::className()
                ]
            ],
        ];
    }

    /**
     * Lists all Travellers models.
     * @return mixed
     */
    public function actionImagegallery($id) {
        $travellerVerification = TravellersVerification::find()->where(['traveller_id' => $id])->one();
        $travellercountries = TravellersCountries::find()->where(['traveller_id' => $id])->one();
        return $this->render('imagegallery', [
                    'model' => $this->findModel($id),
                    'travellercountries' => $travellercountries,
                    'traveller_id' => $id,
                    'travellerVerification' => $travellerVerification,
        ]);
    }

    public function actionIndex() {
//        $dataProvider = new ActiveDataProvider([
//            'query' => Travellers::find(),
//        ]);
        $user_id = $_GET['user_id'];
        $model = Travellers::find()->where(['user_id' => $user_id])->one();
        if (count($model) == 0) {
            $model = new Travellers();
        }
        $model->scenario = 'typeOfAccont';
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if ($model->user_name != '') {
                return $this->redirect(['update', 'id' => $model->id]);
            } else {
                return $this->redirect(['create', 'id' => $model->id]);
            }
        } else {
            return $this->render('type', [
                        'user_id' => $user_id,
                        'model' => $model,
            ]);
        }
    }

    public function actionUpdatetype() {
        $model = $this->findModel($_GET['id']);
        $model->scenario = 'typeOfAccont';
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if ($model->user_name != '') {
                return $this->redirect(['update', 'id' => $model->id]);
            } else {
                return $this->redirect(['create', 'id' => $model->id]);
            }
        } else {
            return $this->render('type', [
                        'user_id' => $model->user_id,
                        'model' => $model,
            ]);
        }
    }

    /**
     * Displays a single Travellers model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Travellers model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id) {
        $model = $this->findModel($id);
        $model->scenario = 'addressDetails';

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $traveller_photo = TravellerPhoto::find()->where(['traveller_id' => $model->id])->one();
            if (count($traveller_photo) > 0) {
                return $this->redirect(['travellerphoto/update', 'id' => $traveller_photo->id]);
            } else {
                return $this->redirect(['travellerphoto/create', 'traveller_id' => $model->id]);
            }
        } else {
            $model->postcode = ($model->postcode == 0) ? '' : $model->postcode;
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Travellers model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $model->scenario = 'addressDetails';

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $traveller_photo = TravellerPhoto::find()->where(['traveller_id' => $model->id])->one();
            if (count($traveller_photo) > 0) {
                return $this->redirect(['travellerphoto/update', 'id' => $traveller_photo->id]);
            } else {
                return $this->redirect(['travellerphoto/create', 'traveller_id' => $model->id]);
            }
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Travellers model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Travellers model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Travellers the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Travellers::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
