<?php
$code = $_GET["code"];

//引用conn.php文件
require 'conn.php';

//写SQL语句
$sql = "INSERT INTO person(name,type1,type2,type3,author) SELECT name,type1,type2,type3,author FROM test WHERE id='{$code}'";

//执行
$result = mysqli_query($conn,$sql);


if($result)
{
//跳转页面
    header("location:test.php");  //add成功，则跳转回显示页面
}
else
{
    echo "添加失败！";
    echo $code;
}