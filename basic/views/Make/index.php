<form action="index.php?r=make/insert" method="post" enctype="multipart/form-data">
<input name="_csrf" type="hidden" id="_csrf" value="<?= Yii::$app->request->csrfToken ?>">

    <table>
    <tr>
        <td>username：</td>
        <td><input type="text" name="uname"></td>
    </tr>
    <tr>
        <td>password：</td>
        <td><input type="password" name="upwd"></td>
    </tr>
    <tr>
        <td>upload：</td>
        <td><input type="file" name="myfile"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="submit"></td>
    </tr>
</table>
</form>