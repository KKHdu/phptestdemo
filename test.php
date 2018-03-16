
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>test</title>
</head>

<?php
session_start(); //开启session
$username = $_SESSION['name'];//获得用户名
echo "用户名：<a>" . $_SESSION['name'] . "</a>" ?>

</br><a href="person.php">跳转：person</a>

<form action="test.php" method="get">
    id：<input type="text" name="id" value="<?php //引用conn.php文件
    require 'conn.php'; echo $_GET['id']?>" size="8">
    名:<input type="text" name="name" value="<?php //引用conn.php文件
    require 'conn.php'; echo $_GET['name']?>" size="8">
    type1：<input type="text" name="type1" value="<?php //引用conn.php文件
    require 'conn.php'; echo $_GET['type1']?>" size="8">
    <input type="button" value="查看全部" onclick="window.location='test.php'">
    <input type="submit" value="搜索">
</form>
<br/>
<table border="1" width="500" >
    <tr>
        <td>编号</td>
        <td>物名</td>
        <td>分类1</td>
        <td>分类2</td>
        <td>分类3</td>
        <td>作者</td>
    </tr>

    <?php

    //引用conn.php文件
    require 'conn.php';

    while($row= mysqli_fetch_assoc($res)){?>
    <form action="test.php" method="get">
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><input type="text" name="totype1" value="<?php echo $row['name'] ?>"/>
                <input type="submit" value="搜索"></td>
            <td><?php echo $row['type1'] ?></td>
            <td><?php echo $row['type2'] ?></td>
            <td><?php echo $row['type3'] ?></td>
            <td><?php echo $row['author'] ?></td>
            <td><a href="add-to-user.php?code=<?php echo $row['id'] ?>">GET</a></td>
        </tr>
    </form>
    <?php }?>

    <tr>
        <td colspan="6">
            <?php
            //引用conn.php文件
            require 'conn.php';

            echo " 当前{$page}/{$maxpage}页 共{$totalnum}条";
            echo " <a href='test.php?page=1{$url}'>首页</a> ";
            echo "<a href='test.php?page=".($page-1)."{$url}'>上一页</a>";
            echo "<a href='test.php?page=".($page+1)."{$url}'>下一页</a>";
            echo " <a href='test.php?page={$maxpage}{$url}'>尾页</a> ";
            ?>
        </td>
    </tr>
</table>
</body>
</html>