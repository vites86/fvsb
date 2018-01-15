<?php 

class Login 
{

      public static function getUserId($login)
      {  
            include ("php.php");
            $result = mysqli_query($db, "SELECT id as id FROM userlist where login like '$login'");  
            $myrow = mysqli_fetch_array ($result); 
            do { 
              $user_id = $myrow['id'];
            }
            while($myrow = mysqli_fetch_array($result));      
            return $user_id;
            exit;      
      }
      
      
      public static function getUsernameByLoginAndPass($login,$password)
      {  
      	    include ("php.php");
            $password_md5 = md5($password);
            $result = mysqli_query($db, "SELECT login as login FROM userlist where login like '$login' and pass like '$password_md5'");             
            $myrow = mysqli_fetch_array ($result); 
            do { 
              $login = $myrow['login'];
            }
            while($myrow = mysqli_fetch_array($result));      
            return $login;
            exit;      
      }

      public static function getUserRoleByLogin($login)
      {  
            include ("php.php");
            $result = mysqli_query($db, "SELECT rus_name as rus_name FROM userlist 
                                   where login like '$login'");             
            $myrow = mysqli_fetch_array ($result); 
            do { 
              $rus_name = $myrow['rus_name'];
            }
            while($myrow = mysqli_fetch_array($result));      
            return $rus_name;
            exit;      
      }

      public static function getUserRusNameByLogin($login)
      {  
          include ("php.php");
            $result = mysqli_query($db, "SELECT rls.role as role FROM userlist as usr
                                   LEFT OUTER JOIN roles as rls
                                   ON rls.id = usr.role_id
                                   where usr.login like '$login'");             
            $myrow = mysqli_fetch_array ($result); 
            do { 
              $user_role = $myrow['role'];
            }
            while($myrow = mysqli_fetch_array($result));      
            return $user_role;
            exit;      
      }

      public static function getUserRoleDescriptionByLogin($login)
      {  
          include ("php.php");
            $result = mysqli_query($db, "SELECT rls.description as role FROM userlist as usr
                                   LEFT OUTER JOIN roles as rls
                                   ON rls.id = usr.role_id
                                   where usr.login like '$login'");             
            $myrow = mysqli_fetch_array ($result); 
            do { 
              $user_role = $myrow['role'];
            }
            while($myrow = mysqli_fetch_array($result));      
            return $user_role;
            exit;      
      }
      
      public function change_password($login, $old_password, $new_password)// Заменяет старый пароль новым. Возвращает значение true или генерирует исключение
      {  // Если прежний пароль введен правильно, он заменяется новым и возвращается значение true, в противном случае генерируется исключение
        include ("php.php");
        $result = mysqli_query($db, "update userlist set pass = '$new_password' where user like '$login'"); 
        if (!$result)
        {                  
          header("HTTP/1.1 301 Moved Permanently");                    
          header('Location: update_password.php?error=Пароль не изменен!');
          exit;
        }    
        else
        {
          // Пароль успешно изменен
          header("HTTP/1.1 301 Moved Permanently");                    
          header('Location: update_password.php?result=Пароль успешно изменен!');
          exit;
      
        }              
      }

       public function change_userPassword($client_id, $new_password)// Заменяет старый пароль новым. Возвращает значение true или генерирует исключение
      {  // Если прежний пароль введен правильно, он заменяется новым и возвращается значение true, в противном случае генерируется исключение
        include ("php.php");
        $result = mysqli_query($db, "update users_passwords set password = '$new_password' where client_id like '$client_id'"); 
        if (!$result)
        {                  
          return 'Пароль не изменен!';
          exit;
        }    
        else
        {
          return 'Пароль изменен! Новый пароль: '.$new_password;
          exit;      
        }              
      }

      public function checkValidPass($login,$password)
      {  
            include ("php.php");
            $result = mysqli_query($db, "SELECT user FROM userlist where login like '$login' and pass like '$password'");             
            $myrow = mysqli_fetch_array ($result); 
            do { 
              $login = $myrow['login'];
            }
            while($myrow = mysqli_fetch_array($result));     
            return $login;                   
            // if ($user == '')  return true; 
            // else return false;        
      }

      public function insertConnect($login)
      {  
            include ("php.php");
            $user_id = Login::getUserId($login);
            $result = mysqli_query($db, "INSERT INTO admin_entries(user_id, date_connect) VALUES ('$user_id',NOW())");   
            if (!$result) {
            die('Ошибка выполнения запроса:' . mysqli_error());}            
      }

     public static function getLastConnect($login)
      {  
            include ("php.php");
            $user_id = Login::getUserId($login);
            $result = mysqli_query($db, "SELECT date_connect as last_date FROM admin_entries where user_id like '$user_id' order by date_connect desc limit 2");             
            $myrow = mysqli_fetch_array ($result); 
            do { 
              $last_date = $myrow['last_date'];
            }
            while($myrow = mysqli_fetch_array($result));     
            return $last_date;  
      }
      public static function getCountConnect($login)
      {  
            include ("php.php");
            $user_id = Login::getUserId($login);
            $result = mysqli_query($db, "SELECT COUNT(date_connect) as connects_count FROM admin_entries where user_id like '$user_id'");             
            $myrow = mysqli_fetch_array ($result); 
            do { 
              $connects_count = $myrow['connects_count'];
            }
            while($myrow = mysqli_fetch_array($result));     
            return $connects_count;  
      }

           
}




?>