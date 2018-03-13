<?php
ini_set("error_reporting","E_ALL & ~E_NOTICE");

$con = mysqli_connect("localhost","root","ZXCVBNM");
if (!$con)
{
    die('Could not connect: ' . mysqli_error());
}

mysqli_select_db($con,"testsql");

$result = mysqli_query($con,"SELECT * FROM person");

echo "
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>test</title>
</head>

<a href='test.php'>test</a>
<table border='1'>

<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>action</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo '<td><a href="delete.php?code='.$row['id'].'">删除</a></td>';
    echo "</tr>";
}
echo "</table></html>";

mysqli_close($con);
?>