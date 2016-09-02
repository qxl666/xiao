<h3>欢迎<?php echo $list['uname']?></h3>
</br>
<table border="1">
    <tr>
        <td>  &nbsp;username</td>
        <td>  &nbsp;uploads</td>
        <td>  &nbsp;operate</td>
    </tr>
        <tr>
            <td><?php echo $list['uname']?></td>
            <td><img src="<?php echo $list['myfile']?>" width="100" height="75px"></td>
            <td>
                <a href="?r=make/del&id=<?php echo $list['uid']?>">delete</a> |
                <a href="?r=make/updata&id=<?php echo $list['uid']?>">updata</a>
            </td>
        </tr>
</table>