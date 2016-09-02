
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<form action="index.php?r=country/add" method="post">
<table border="1">
            <input name="_csrf" type="hidden" id="_csrf" value="<?= Yii::$app->request->csrfToken ?>">

    <tr>
        <td>用户名：</td>
        <td><input type="text" name="name"></td>
    </tr>
    <tr>
        <td>密码：</td>
        <td><input type="password" name="pwd"></td>
    </tr>
    <tr>
        <td><input type="submit" value="提交"></td>
    </tr>
</table>
</form>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
