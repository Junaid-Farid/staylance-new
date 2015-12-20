<?php

namespace backend\models;

use backend\models\Attachments;
use yii\base\Model;
use yii\web\UploadedFile;

class UploadImagesForm extends Model {

    /**
     * @var UploadedFile[]
     */
    public $imageFiles;
    public $uploadFiles;

    public function rules() {
        return [
            [['imageFiles'], 'file', 'skipOnEmpty' => TRUE, 'extensions' => 'png, jpg', 'maxFiles' => 4],
            [['uploadFiles'], 'string'],
        ];
    }

    public function upload($userId, $foldername = NULL) {
        if ($this->validate()) {
            $attachments = [];
            $i = 0;
            foreach ($this->imageFiles as $file) {
                $orignalname = $file->baseName . '.' . $file->extension;
                $manupolated_name = md5($file->baseName) . '.' . $file->extension;
                $model = new Attachments;
                $model->user_id = $userId;
                $model->orignal_name = $orignalname;
                $model->manupulated_name = $manupolated_name;
                $model->save();
                if ($foldername == NULL) {
                    $file->saveAs('../../profiles/' . $manupolated_name);
                } else {
                    $file->saveAs('../../profiles/' . $foldername . '/' . $manupolated_name);
                }
                $attachments[$i] = $model->id;
            }
            return $attachments;
        } else {
            return false;
        }
    }

}
