<?php
namespace app\controllers;
use Yii;
use app\models\Post;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\data\Pagination;
use app\models\Country;

class CountryController extends Controller{
    public function actionIndex()    {
        return $this->render('new.php');
    }
    public function actionAdd(){
        //接值
        $name=$_POST['name'];
        $password=$_POST['pwd'];
    }
    public function actionShow()
    {
        $query=Country::find();
        $pagination = new Pagination([
            'defaultPageSize' => 2,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('show', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
    public function actionInsert()
    {
        $country = new Country();
        $country->code = 'Jp';
        $country->name = 'James';
        $country->population = '12121213';
        $country->save();  // 等同于 $customer->insert();
    }
    public function actionDel()
    {
        $country = new Country();
        $code='Jp';
        //删除
        /*$country = Country::findOne($code);
        $country->delete();*/

        // 更新现有客户记录
       /* $country = Country::findOne($code);
        $country->name = 'jamesqw';
        $country->save();  // 等同于 $customer->update();*/

        // 所有客户的age（年龄）字段加1：
       // Country::updateAllCounters(['age' => 1]);
    }
    public function actionArr()
    {
        yii\db\ActiveRecord::tableName();
    }
}



?>