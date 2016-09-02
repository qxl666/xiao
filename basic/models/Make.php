<?php
namespace app\models;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;
use yii\base\Model;
class Make extends Model{
//图片上传
    public $a_pic;
    public function upload(){
        $this->a_pic->saveAs('uploads/' . $this->a_pic->baseName . '.' . $this->a_pic->extension);
        return true;
    }
}