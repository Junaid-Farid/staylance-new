<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model {

    /**
     * @var UploadedFile
     */
    public $videoFile;

    public function rules() {
        return [
            [['videoFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'ogg, mp4, sql'],
        ];
    }

    public function upload() {
        $done = $this->videoFile->saveAs('uploads/' . $this->videoFile->baseName . '.' . $this->videoFile->extension);
        if ($done) {
            return true;
        } else {
            return false;
        }
    }

}
