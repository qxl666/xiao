<?php
namespace app\controllers;
use Yii;
use app\models\Post;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\data\Pagination;
use yii\web\UploadedFile;
use app\models\Make;
use yii\web\Session;
header("content-type:text/html;charset=utf-8");
class LoginController extends Controller{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionInsert()
    {
        $request=Yii::$app->request;
        $data=$request->post();
        unset($data['_csrf']);
        $name=$data['uname'];
        $pwd=$data['upwd'];
        //存session
        $session = Yii::$app->session;
        $session['name']=$name;
        $db=Yii::$app->db;
        $re=$db->createCommand("select * from user WHERE uname='$name' AND upwd='$pwd'")->queryOne();
        $session['id']=$re['uid'];
        if($re)
        {
            return $this->render('add',['name'=>$name]);
        }
    }
    public function actionAdd()
    {
        $session = Yii::$app->session;
        $id=$session['id'];
        $upload=new UploadedFile(); //实例化上传类
        $name=$upload->getInstanceByName('myfile'); //获取文件原名称
        $img=$_FILES['myfile']; //获取上传文件参数
        $upload->tempName=$img['tmp_name']; //设置上传的文件的临时名称
        $img_path='../uploads/'.$name; //设置上传文件的路径名称(这里的数据进行入库)
        $arr=$upload->saveAs($img_path); //保存文件
        $db=Yii::$app->db;
        $re=$db->createCommand()->update('user',['myfile'=>$img_path],"uid=$id")->execute();
        if($re)
        {
            return $this->redirect(array('login/show'));
        }
    }
    public function actionShow()
    {
        $session=Yii::$app->session;
        $id=$session['id'];
        $db=Yii::$app->db;
        $re=$db->createCommand("select * from user WHERE uid='$id'")->queryOne();
        return $this->render('show',['list'=>$re]);
    }
    public function actionDel($id='')
    {
        $db=Yii::$app->db;
        $re=$db->createCommand("delete from USER WHERE uid='$id'")->execute();
        if($re)
        {
           return $this->redirect(array('login/show'));
        }
    }
    public function actionUpdata($id='')
    {
        $db=Yii::$app->db;
        $re=$db->createCommand("select * from user WHERE uid='$id'")->queryOne();
        return $this->render('updata',['list'=>$re,'uid'=>$id]);
    }
    public function actionSave()
    {
        $request=Yii::$app->request;
        $data=$request->post();
        unset($data['_csrf']);
        $id=$data['uid'];
        $db=Yii::$app->db;
        $re=$db->createCommand()->update('user', $data, "uid = $id")->execute();
        if($re)
        {
            return $this->redirect(array('login/show'));
        }
    }
}



?>