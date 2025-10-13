<?php

$mysql_host = "localhost";
$mysql_database = "u912169921_wupe";
$mysql_user = "u912169921_wupe";
$mysql_password = "resumedb1";

$link = mysqli_connect($mysql_host, $mysql_user, $mysql_password)or die(mysql_error());
mysqli_select_db($link, $mysql_database)or die(mysql_error()); 

$ip=''.$_SERVER['REMOTE_ADDR'];

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$date = date('Y-m-d H:i:s');

$sql = "INSERT INTO Statistics (Date, IPAddress, PageVisited)
VALUES ('$date', '$ip', '$url')";

mysqli_query($link, $sql) or die (); 
mysqli_close($link);

?>