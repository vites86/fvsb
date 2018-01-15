<?php 
session_start();
include ("blocks/login_class.php");
// exit;
// $current_page = $_SESSION["current_page"];
// echo "current_page=$current_page"; 
if ($_POST["current_page"] != "login.php" )
{     
    $login = $_SESSION["login"];
    $password = $_SESSION["password"];   
    if($password =='' && $login=='' )
    {       
      $_SESSION["logged"] = "not good";   
      header("HTTP/1.1 301 Moved Permanently");                    
      header('Location: login.php');
      exit;
    }
    $result = Login::getUsernameByLoginAndPass($login, $password);   
    if ($result != '' )
    {
      $_SESSION["logged"] = "good";
      $_SESSION["login"] = $login;
      header("HTTP/1.1 301 Moved Permanently");                    
      header('Location: '.$current_page);
      exit;
    } 
    else
    {
           $_SESSION["logged"] = "not good"; 
           header("HTTP/1.1 301 Moved Permanently");                    
           header('Location: login.php');
           exit;
    }

}
else if ($_POST["current_page"] == "login.php")
{ 
   if (isset($_POST['password']) && isset($_POST['login'])) 
          { 
               $password = $_POST["password"];
               $login = $_POST["login"]; 
               if($password =='' || $login=='')
               {
                 $_SESSION["logged"] = "not good"; 
                 header("HTTP/1.1 301 Moved Permanently");                    
                 header('Location: login.php?error=Введіть данні!');
                 exit;
               }
               else
               {
                 $result = Login::getUsernameByLoginAndPass($login, $password); 
                 // echo "result=$result"; exit;    
                 if ($result=='')
                 { 
                     $_SESSION["logged"] = "not good"; 
                     header("HTTP/1.1 301 Moved Permanently");                    
                     header('Location: login.php?error=Введено неправильні данні!');
                 }
                 else 
                 {
                   $_SESSION["login"] = $login;
                   $_SESSION["password"] = $password;
                   $_SESSION["logged"] = "good";
                   Login::insertConnect($login); 
                   header("HTTP/1.1 301 Moved Permanently");                    
                   header('Location: index.php');
                   exit;   
                 }
               }      
          } 
    else 
          {       
              $_SESSION["logged"] = "not good"; 
              header("HTTP/1.1 301 Moved Permanently");                    
              header('Location: login.php?error=Логін та пароль не ідентифікуються!');
              exit;
          }
}


?>