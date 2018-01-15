<?php 
       session_start();      
       include ("blocks/php.php");
       require_once ("blocks/myclass.php");
       $logged = $_SESSION["logged"];
       if ($logged != "good") include("login_check.php");
       else include("blocks/login_class.php");
       $login = $_SESSION["login"];
       $user_role = Login::getUserRoleByLogin($login);
       $user_role_description = Login::getUserRoleDescriptionByLogin($login);
       $user_name = Login::getUserRoleByLogin($login);
       $last_connect = Login::getLastConnect($login);
       $connects_count = Login::getCountConnect($login);
       $_SESSION["user_role"] = $user_role;
       $_SESSION["user_role_description"] = $user_role_description;      
?>