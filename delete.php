<?php
$code = $_GET["code"];

//引用conn.php文件
require 'conn.php';

//写SQL语句
$sql = "delete from person where id = '{$code}'";

//执行
$result = mysqli_query($conn,$sql);

if($result)
{
//跳转页面
    header("location:person.php");  //删除成功，则跳转回显示页面
}
else
{
    echo "删除失败！";
    echo $code;
}