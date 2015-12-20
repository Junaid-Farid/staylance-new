<?php

namespace frontend\controllers;

use Yii;
use app\models\TravellerPhoto;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\UploadImagesForm;
use frontend\models\Travellers;
use \app\models\TravellerDescription;
use yii\web\UploadedFile;
use \backend\models\Attachments;

/**
 * TravellerphotoController implements the CRUD actions for TravellerPhoto model.
 */
class TravellerphotoController extends Controller {

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
     * Lists all TravellerPhoto models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => TravellerPhoto::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TravellerPhoto model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TravellerPhoto model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new TravellerPhoto();
        $uploadModel = new UploadImagesForm();
        $traveller_id = isset($_GET['traveller_id']) ? $_GET['traveller_id'] : 0;
        $traveldescription = TravellerDescription::find()->where(['traveller_id' => $traveller_id])->one();
        if ($uploadModel->load(Yii::$app->request->post()) && $model->load(Yii::$app->request->post())) {
            $traveller = Travellers::findOne($traveller_id);
            $uploadImagePath = Yii::$app->basePath . "/../profiles/travellers/";
            $img = str_replace(' ', '+', str_replace('data:image/png;base64,', '', $uploadModel->uploadFiles));
            $data = base64_decode($img);
            $filename = uniqid() . '.png';
            $file = $uploadImagePath . $filename;
            if (!is_dir($uploadImagePath)) {
                mkdir($uploadImagePath);
            }
            $success = file_put_contents($file, $data);
            if ($success) {
                $orignalname = $filename;
                $manupolated_name = md5(uniqid()) . '.png';
                $modelAttachments = new Attachments;
                $modelAttachments->user_id = $traveller->user - _id;
                $modelAttachments->orignal_name = $orignalname;
                $modelAttachments->manupulated_name = $manupolated_name;
                if ($modelAttachments->save()) {
                    $model->attachment_id = $modelAttachments->id;
                    if ($model->save()) {
                        if (count($traveldescription) > 0) {
                            return $this->redirect(['travellerdescription/update', 'id' => $traveldescription->id]);
                        } else {
                            return $this->redirect(['travellerdescription/create', 'traveller_id' => $model->traveller_id]);
                        }
                    }
                }
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
                        'uploadModel' => $uploadModel,
                        'traveller_id' => $traveller_id,
                        'traveldescription' => $traveldescription,
            ]);
        }
    }

    /**
     * Updates an existing TravellerPhoto model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $modelAttachments = Attachments::findOne($model->attachment_id);
        $uploadModel = new UploadImagesForm();
        $traveller_id = $model->traveller_id;
        $traveldescription = TravellerDescription::find()->where(['traveller_id' => $traveller_id])->one();
        if ($uploadModel->load(Yii::$app->request->post()) && $model->load(Yii::$app->request->post())) {
            $traveller = Travellers::findOne($traveller_id);
            if (isset($uploadModel->uploadFiles)) {
                $uploadImagePath = Yii::$app->basePath . "/../profiles/travellers/";
                $img = str_replace(' ', '+', str_replace('data:image/png;base64,', '', $uploadModel->uploadFiles));
                $data = base64_decode($img);
                $filename = uniqid() . '.png';
                $file = $uploadImagePath . $filename;
                if (!is_dir($uploadImagePath)) {
                    mkdir($uploadImagePath);
                }
                $success = file_put_contents($file, $data);
                if ($success) {
                    $orignalname = $filename;
                    $manupolated_name = md5(uniqid()) . '.png';
                    $modelAttachments = new Attachments;
                    $modelAttachments->user_id = $traveller->user_id;
                    $modelAttachments->orignal_name = $orignalname;
                    $modelAttachments->manupulated_name = $manupolated_name;
                    if ($modelAttachments->save()) {
                        $model->attachment_id = $modelAttachments->id;
                    }
                }
            }
            if ($model->save(false)) {
                if (count($traveldescription) > 0) {
                    return $this->redirect(['travellerdescription/update', 'id' => $traveldescription->id]);
                } else {
                    return $this->redirect(['travellerdescription/create', 'traveller_id' => $model->traveller_id]);
                }
            }
        } else {
            return $this->render('update', [
                        'model' => $model,
                        'uploadModel' => $uploadModel,
                        'traveller_id' => $traveller_id,
                        'traveldescription' => $traveldescription,
                        'modelAttachments' => $modelAttachments,
            ]);
        }
    }

    /**
     * Deletes an existing TravellerPhoto model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TravellerPhoto model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TravellerPhoto the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = TravellerPhoto::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
