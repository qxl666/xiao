<h3>欢迎<?php echo $name?>登陆</h3>
<form action="index.php?r=login/add" method="post" enctype="multipart/form-data">
    <input name="_csrf" type="hidden" id="_csrf" value="<?= Yii::$app->request->csrfToken ?>">

    <table>
        <tr>
            <td>uploads：</td>
            <td><input type="file" name="myfile"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="submit"></td>
        </tr>
    </table>
</form>