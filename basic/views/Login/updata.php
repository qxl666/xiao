<form action="index.php?r=make/save" method="post">
    <input name="_csrf" type="hidden" id="_csrf" value="<?= Yii::$app->request->csrfToken ?>">
    <input name="uid" type="hidden" value="<?php echo $uid?>">
    <table>
        <tr>
            <td>username：</td>
            <td><input type="text" name="uname" value="<?php echo $list['uname']?>"></td>
        </tr>
        <tr>
            <td>password：</td>
            <td><input type="password" name="upwd" value="<?php echo $list['upwd']?>"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="submit"></td>
        </tr>
    </table>
</form>