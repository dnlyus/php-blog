<?php 
$localhost = "localhost";
$db = "pinguin";
$user = "root";
$password = "root";
$link = mysqli_connect($localhost, $user, $password) or 
trigger_error(msql_error(), E_USER_ERROR);
//mysqli_query($link, "SET NAME utf8;") or die(mysql_error());
//mysqli_query($link, "SET CHARACTER SET utf8;") or die(mysql_error());
//mysqle_select_db($link, $db);
    $mysql = new mysqli('localhost', 'root', 'root', 'pinguin');
    $mysql->query("INSERT INTO `users` (`login`, `password`) VALUES ('login', 'pass')");
    $mysql->close();
?>