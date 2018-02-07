<!DOCTYPE html>
<html lang="en" xmlns:Location="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>欢迎回来</h1>
    <input type="button" value="跳转" onclick="tiao('login.php')"/>
    <input type="button" value="tiaozhuan" onclick="window.location.href='login.php'">
</body>
</html>
<script>
    function tiao(urls){
        window.location.href=urls;//根据传过来的地址跳转
    }
</script>