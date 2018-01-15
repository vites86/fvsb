<?php 
session_start();
$_SESSION["logged"] = "not good";   
$_SESSION["login"] = "";
$_SESSION["password"] = "";
header("HTTP/1.1 301 Moved Permanently");                    
header('Location: login.php');
exit;?>