<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
         $name = $_POST["username"];
         $pwd = $_POST["pwd"];
         $fp = fopen("./data.txt", "a");
         $str = "user:".$name."&password:".$pwd."\r\n";
         fwrite($fp,$str);
         fclose($fp);
         echo "<h1>欢迎回来,".$name."！</h1>";
     ?>
     <form>
          用户名：<input type="text" name="username" value=><br/><br/>
         密码：<input type="password" name="pwd"><br/><br/>
         <input type="submit" name="submit" value="提交">
         <table><td>$name</td><td>$pwd</td></table>
     </form>
</body>
</html>