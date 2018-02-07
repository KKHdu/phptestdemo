<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <style type="text/css">
		form{
		    width:300px;
		    background-color:#EEE0E5;
		    margin-left:300px;
		    margin-top:30px;
		    padding:30px;
		 }
	</style>
</head>
<body>
	<form method="post">
<label>username:<input type="text" name="name"></label>
<br/><br/>
<label>password:<input type="password" name="pw"></label>
<br/><br/>
<button type="submit" name="submit">login</button>
</form>

<?php 
$link = mysqli_connect('localhost', 'root', 'ZXCVBNM', 'testsql');
if (!$link){
    echo"<script>alert('数据库连接失败！')</script>";
}else {
    if (isset($_POST['submit'])){
        $query = "select * from user where name = '{$_POST['name']}' and pw = '{$_POST['pw']}'";
        $result = mysqli_query($link, $query);
        if (mysqli_num_rows($result) == 1){
            echo "<script>alert('登陆成功')</script>";
            // header("Location:index.php");
        }
    }
}
?>
</body>
</html>