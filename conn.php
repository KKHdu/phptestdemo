<?php
ini_set("error_reporting","E_ALL & ~E_NOTICE");

$wherelist=array();
$urlist=array();
if(!empty($_GET['id']))
{
    $wherelist[]=" id like '%".$_GET['id']."%'";
    $urllist[]="id=".$_GET['id'];
}
if(!empty($_GET['name']))
{
    $wherelist[]=" name like '%".$_GET['name']."%'";
    $urllist[]="name=".$_GET['name'];
}
if(!empty($_GET['type1']))
{
    $wherelist[]=" type1 like '%".$_GET['type1']."%'";
    $urllist[]="type1=".$_GET['type1'];
}
$where="";
if(count($wherelist)>0)
{
    $where=" where ".implode(' and ',$wherelist);
    $url='&'.implode('&',$urllist);
}
//分页的实现原理
//1.获取数据表中总记录数
$mysql_server_name='localhost';
$mysql_username='root';
$mysql_password='ZXCVBNM';
$conn=mysqli_connect($mysql_server_name,$mysql_username,$mysql_password);
mysqli_query($conn,"set names 'utf8'");
mysqli_select_db($conn,"testsql");
$sql="select * from test $where ";
$result=mysqli_query($conn,$sql);
$totalnum=mysqli_num_rows($result);
//每页显示条数
$pagesize=5;
//总共有几页
$maxpage=ceil($totalnum/$pagesize);
$page=isset($_GET['page'])?$_GET['page']:1;
if($page <1)
{
    $page=1;
}
if($page>$maxpage)
{
    $page=$maxpage;
}
$limit=" limit ".($page-1)*$pagesize.",$pagesize";
$sql1="select * from test {$where} order by id desc {$limit}"; //id降序
$res=mysqli_query($conn,$sql1);

?>
