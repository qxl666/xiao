<table border="1">
    <tr>
        <td>  &nbsp;username</td>
        <td>  &nbsp;password</td>
        <td>  &nbsp;operate</td>
    </tr>
    <?php foreach($list as $val){?>
        <tr>
            <td><?php echo $val['uname']?></td>
            <td><?php echo $val['upwd']?></td>
            <td><img src="<?php echo $val['myfile']?>" width="100" height="75px"></td>
            <td>
                <a href="?r=make/del&id=<?php echo $val['uid']?>">delete</a> |
                <a href="?r=make/updata&id=<?php echo $val['uid']?>">updata</a>
            </td>
        </tr>
    <?php }?>
</table>