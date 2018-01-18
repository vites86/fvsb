<?php 
  require_once("blocks/myclass.php");
  if (isset($_POST['handler'])) { 
  	    $handler = $_POST['handler']; 
        if($handler ==''){
  	      header("HTTP/1.1 301 Moved Permanently");                    
          header('Location: error.php?error=Помилка файлу handlers!');
          exit;
        }
    }
    else{
    	  header("HTTP/1.1 301 Moved Permanently");                    
          header('Location: error.php?error=Помилка файлу handlers!');
         exit;
    }

switch ($handler) {

    case "add_news":         
        if (isset($_POST['title']))      { $title = $_POST['title'];           if($title ==''){unset($title);}   }
        if (isset($_POST['meta_d']))     { $meta_d = $_POST['meta_d'];         if($meta_d ==''){unset($meta_d);} }
        if (isset($_POST['meta_k']))     { $meta_k = $_POST['meta_k'];         if($meta_k ==''){unset($meta_k);} }
        if (isset($_POST['author']))     { $author = $_POST['author'];         if($author ==''){unset($author);} }
        if (isset($_POST['text']))       { $text = $_POST['text'];             if($text ==''){unset($text);}     }
        if (isset($_POST['description'])){ $descr = $_POST['description'];     if($descr ==''){unset($descr);}   }
        if (isset($_POST['categories'])) { $category_id = $_POST['categories'];  if($category_id ==''){unset($category_id);} }

        if (isset($title) && isset($category_id) && isset($meta_d) && isset($meta_k) && isset($descr) && isset($author) && isset($text) && $_FILES["myfile"]['size'] > 0)
        {
                $news_count = Adminka::getNewsCount()+1;        
                // echo "$news_count, $title, $meta_d, $meta_k, $descr, $author, $text";exit;        
                $ext = pathinfo($_FILES['myfile']['name'], PATHINFO_EXTENSION);
                $fileName = $news_count.".".$ext;                 
                $news_directory = $_SERVER['DOCUMENT_ROOT'] . "/images/news/$news_count/";
                if (!is_dir($news_directory)) mkdir($news_directory,0777);           
                $path_to_file_tmp = $news_directory . $fileName;
                if (file_exists($path_to_file_tmp)) unlink($path_to_file_tmp);
                move_uploaded_file($_FILES["myfile"]['tmp_name'], $path_to_file_tmp);                  
                $path_to_newsIcon = $_SERVER['DOCUMENT_ROOT'] ."/images/news/" . $fileName;  
                move_uploaded_file($_FILES["myfile"]['tmp_name'], $path_to_newsIcon);                 
                Adminka::imgResize($path_to_file_tmp, $path_to_newsIcon, 460, 296, $ext);              
                
                $result = Adminka::addNews($news_count, $title, $meta_d, $meta_k, $descr, $author, $text, $ext, $category_id); 
                if($result =="good") {
                    //Adminka::POSTInSocNetworks($news_count);
                    $res_text = urlencode ( "Новину №$news_count <em>$title</em><br><br> <img src='../images/news/$fileName' alt=''><br><p>Добавлено успішно!</p>");
                    header("HTTP/1.1 301 Moved Permanently");                    
                    header("Location: result.php?result=$res_text");
                    exit;
                }else{
                    $res_text = urlencode ("Новину Не Добавлено! -  ".$result);
                    header("HTTP/1.1 301 Moved Permanently");                    
                    header("Location: error.php?error=$res_text");
                    exit;
                }            
        }else{
            $res_text = urlencode ("Не всі параметри заповнені!");
            header("HTTP/1.1 301 Moved Permanently");                    
            header("Location: error.php?error=$res_text");
            exit;
        }                
        break;

    case "admin_error_message":
        if (mail("vites@outlook.com","admin_error_message", isset($_POST['error']) ? $_POST['error'] : "Empty message!"))
        {
            $res_text = urlencode ("Повідомлення надіслане адміністратору сайту!".$result);
            header("HTTP/1.1 301 Moved Permanently");                    
            header("Location: result.php?result=$res_text");
            exit;
        }else{
            $res_text = urlencode ("Повідомлення не надіслано!");
            header("HTTP/1.1 301 Moved Permanently");                    
            header("Location: error.php?error=$res_text");
            exit;
        }        
        break;
        
    case "del_news":
        if (isset($_POST['id'])) {$id = $_POST['id']; if($id ==''){unset($id);}}
        if (isset($_POST['img_src'])) {$img_src = $_POST['img_src']; if($img_src ==''){unset($img_src);}}       
        if (isset($img_src) && isset($id) )
        {
            $result = Adminka::delNews($id, $img_src);
            if($result=="good") 
            {
                    $res_text = urlencode ( "Новину Видалено успiшно!");
                    header("HTTP/1.1 301 Moved Permanently");                    
                    header("Location: result.php?result=$res_text");
                    exit;
            }else{
                    $res_text = urlencode ("Новину Не Видалено! -  ".$result);
                    header("HTTP/1.1 301 Moved Permanently");                    
                    header("Location: error.php?error=$res_text");
                    exit;
            }           
        }else{
            $res_text = urlencode ("Не вибрана жодна новина для видалення!");
            header("HTTP/1.1 301 Moved Permanently");                    
            header("Location: error.php?error=$res_text");
            exit;
        }       
        break;

    case "edit_news":
        if (isset($_POST['id']))         { $id = $_POST['id'];            if($id ==''){unset($id);}         }
        if (isset($_POST['img_src']))    { $img_src = $_POST['img_src'];  if($img_src ==''){unset($img_src);}}
        if (isset($_POST['title']))      { $title = $_POST['title'];      if($title ==''){unset($title);}   }
        if (isset($_POST['categories'])) { $category_id = $_POST['categories'];  if($category_id ==''){unset($category_id);} }
        if (isset($_POST['meta_d']))     { $meta_d = $_POST['meta_d'];    if($meta_d ==''){unset($meta_d);} }
        if (isset($_POST['meta_k']))     { $meta_k = $_POST['meta_k'];    if($meta_k ==''){unset($meta_k);} }
        if (isset($_POST['author']))     { $author = $_POST['author'];    if($author ==''){unset($author);} }
        if (isset($_POST['text']))       { $text = $_POST['text'];        if($text =='') {unset($text);}     }
        if (isset($_POST['description'])){ $descr = $_POST['description'];if($descr ==''){unset($descr);}   }
        if (isset($_POST['date_']))       { $date = $_POST['date_'];        if($date =='') {unset($date);}     }
        if (isset($category_id) && isset($title) && isset($meta_d) && isset($meta_k) && isset($descr) && isset($author) && isset($text) && isset($date) && isset($img_src))
        {
            if( $_FILES["myfile"]['size'] > 0)
            {
                    $ext = pathinfo($_FILES['myfile']['name'], PATHINFO_EXTENSION);
                    $fileName = $id.".".$ext; 
                    $news_directory = $_SERVER['DOCUMENT_ROOT'] ."/images/news/$id/";
                    $path_to_file_tmp = $news_directory . $fileName;
                    if (file_exists($path_to_file_tmp)) unlink($path_to_file_tmp);
                    move_uploaded_file($_FILES["myfile"]['tmp_name'], $path_to_file_tmp);                  
                    $path_to_newsIcon = $_SERVER['DOCUMENT_ROOT'] ."/images/news/" . $fileName; 
                    $path_to_oldNewsIcon = $_SERVER['DOCUMENT_ROOT'] ."/".$img_src;
                    $img_src = "images/news/".$fileName;
                    if (file_exists($path_to_newsIcon)) unlink($path_to_newsIcon); 
                    if (file_exists($path_to_oldNewsIcon)) unlink($path_to_oldNewsIcon); 
                    move_uploaded_file($_FILES["myfile"]['tmp_name'], $path_to_newsIcon);                 
                    Adminka::imgResize($path_to_file_tmp, $path_to_newsIcon, 370, 300, $ext); 
            }        
            $result = Adminka::updateNews($id, $title, $category_id, $meta_d, $meta_k, $descr, $author, $date, $text, $img_src);
            if($result=="good") 
            {
                    $res_text = urlencode ( "Новину Обновлено успiшно!");
                    header("HTTP/1.1 301 Moved Permanently");                    
                    header("Location: result.php?result=$res_text");
                    exit;
            }else{
                    $res_text = urlencode ("Новину Не Обновлено! -  ".$result);
                    header("HTTP/1.1 301 Moved Permanently");                    
                    header("Location: error.php?error=$res_text");
                    exit;
            }       
        }else{
            //echo "$title,$meta_d,$meta_k,$descr,$author,$text,$date,$img_src";exit;
            $res_text = urlencode ("Не всі параметри заповнені!");
            header("HTTP/1.1 301 Moved Permanently");                    
            header("Location: error.php?error=$res_text");
            exit;
        }
    break;
    case "add_newsPhoto":
        if (isset($_POST['id'])) { $id = $_POST['id']; if($id ==''){unset($id);}}
        if (isset($_POST['id']))
        { 
            $news_directory = $_SERVER['DOCUMENT_ROOT'] ."/images/news/$id/";
            if( $_FILES["myfile1"]['size'] > 0)
            {
                $path_to_file = $news_directory . $_FILES["myfile1"]['name'];
                if (file_exists($path_to_file)) unlink($path_to_file);
                move_uploaded_file($_FILES["myfile1"]['tmp_name'], $path_to_file); 
            }
            if( $_FILES["myfile2"]['size'] > 0)
            {
                $path_to_file = $news_directory . $_FILES["myfile2"]['name'];
                if (file_exists($path_to_file)) unlink($path_to_file);
                move_uploaded_file($_FILES["myfile2"]['tmp_name'], $path_to_file); 
            }
            if( $_FILES["myfile3"]['size'] > 0)
            {
                $path_to_file = $news_directory . $_FILES["myfile3"]['name'];
                if (file_exists($path_to_file)) unlink($path_to_file);
                move_uploaded_file($_FILES["myfile3"]['tmp_name'], $path_to_file); 
            }
            if( $_FILES["myfile4"]['size'] > 0)
            {
                $path_to_file = $news_directory . $_FILES["myfile4"]['name'];
                if (file_exists($path_to_file)) unlink($path_to_file);
                move_uploaded_file($_FILES["myfile4"]['tmp_name'], $path_to_file); 
            }
            if( $_FILES["myfile5"]['size'] > 0)
            {
                $path_to_file = $news_directory . $_FILES["myfile5"]['name'];
                if (file_exists($path_to_file)) unlink($path_to_file);
                move_uploaded_file($_FILES["myfile5"]['tmp_name'], $path_to_file); 
            }
            $res_text = urlencode ( "Фото добалено!");
            header("HTTP/1.1 301 Moved Permanently");                    
            header("Location: result.php?result=$res_text");
            exit;
        }else{
            //echo "$title,$meta_d,$meta_k,$descr,$author,$text,$date,$img_src";exit;
            $res_text = urlencode ("Не всі параметри заповнені!");
            header("HTTP/1.1 301 Moved Permanently");                    
            header("Location: error.php?error=$res_text");
            exit;
        }
    break;
    case "del_newsPhoto":
            $result = Adminka::delFotoNews();
            if($result=="good") 
            {
                    $res_text = urlencode ( "Фотографії видалено успiшно!");
                    header("HTTP/1.1 301 Moved Permanently");                    
                    header("Location: result.php?result=$res_text");
                    exit;
            }else{
                    $res_text = urlencode ("Фотографії не видалено! -  ".$result);
                    header("HTTP/1.1 301 Moved Permanently");                    
                    header("Location: error.php?error=$res_text");
                    exit;
            }       
    break;

     case "add_event":   
        if (isset($_POST['categories'])) { $category_id = $_POST['categories'];   if($category_id ==''){unset($category_id);} }
        if (isset($_POST['time_span']))  { $time_span = $_POST['time_span'];      if($time_span ==''){unset($time_span);}   }
        if (isset($_POST['start_time'])) { $start_time = $_POST['start_time'];    if($start_time ==''){unset($start_time);}   }
        if (isset($_POST['finish_time'])){ $finish_time = $_POST['finish_time'];  if($finish_time ==''){unset($finish_time);}   }           
        if (isset($_POST['title']))      { $title = $_POST['title'];      if($title ==''){unset($title);}   }
        if (isset($_POST['meta_d']))     { $meta_d = $_POST['meta_d'];    if($meta_d ==''){unset($meta_d);} }
        if (isset($_POST['meta_k']))     { $meta_k = $_POST['meta_k'];    if($meta_k ==''){unset($meta_k);} }
        if (isset($_POST['text']))       { $text = $_POST['text'];        if($text ==''){unset($text);}     }
        if (isset($_POST['description'])){ $descr = $_POST['description'];if($descr ==''){unset($descr);}   }
        if (isset($_POST['place']))       { $place = $_POST['place'];        if($place ==''){unset($place);}   }
        if (isset($_POST['adress']))     { $adress = $_POST['adress'];        if($adress ==''){unset($adress);}   }
        if (isset($_POST['date_']))      { $date = $_POST['date_'];      if($date =='') {unset($date);}     }
        if (isset($category_id) && isset($time_span) && isset($place) && isset($start_time) && isset($finish_time) 
        && isset($date) && isset($title) && isset($meta_d) && isset($meta_k) && isset($descr) && isset($adress)
        && isset($text) && $_FILES["myfile"]['size'] > 0)
        {
                $events_count = Adminka::getEventsCount()+1;        
                // echo "$news_count, $title, $meta_d, $meta_k, $descr, $author, $text";exit;        
                $ext = pathinfo($_FILES['myfile']['name'], PATHINFO_EXTENSION);
                $fileName = $events_count.".".$ext;                 
                $news_directory = $_SERVER['DOCUMENT_ROOT'] ."/images/events/$events_count/";
                if (!is_dir($news_directory)) mkdir($news_directory,0777);           
                $path_to_file_tmp = $news_directory . $fileName;
                if (file_exists($path_to_file_tmp)) unlink($path_to_file_tmp);
                move_uploaded_file($_FILES["myfile"]['tmp_name'], $path_to_file_tmp);                  
                $path_to_newsIcon = $_SERVER['DOCUMENT_ROOT'] ."/images/events/" . $fileName;  
                move_uploaded_file($_FILES["myfile"]['tmp_name'], $path_to_newsIcon);                 
                Adminka::imgResize($path_to_file_tmp, $path_to_newsIcon, 604, 340, $ext);              
                $img_src = "images/events/".$fileName;
                
                $result = Adminka::addEvent($events_count, $title, $meta_d, $meta_k, $descr, $text, $img_src, $date, $category_id,$time_span,$start_time,$finish_time,$place, $adress); 
                if($result =="good") {
                    // Adminka::POSTInSocNetworks($news_count);
                    $res_text = urlencode ( "Подію <em>$title</em><br><br> <img src='../images/events/$fileName' alt=''><br><p>Добавлено успішно!</p>");
                    header("HTTP/1.1 301 Moved Permanently");                    
                    header("Location: result.php?result=$res_text");
                    exit;
                }else{
                    $res_text = urlencode ("Подію Не Добавлено! -  ".$result);
                    header("HTTP/1.1 301 Moved Permanently");                    
                    header("Location: error.php?error=$res_text");
                    exit;
                }            
        }else{
            $res_text = urlencode ("Не всі параметри заповнені!");
            header("HTTP/1.1 301 Moved Permanently");                    
            header("Location: error.php?error=$res_text");
            exit;
        }                
        break;

        case "edit_event":
        if (isset($_POST['id']))         { $id = $_POST['id'];            if($id ==''){unset($id);}         }
        if (isset($_POST['categories'])) { $category_id = $_POST['categories'];   if($category_id ==''){unset($category_id);} }
        if (isset($_POST['img_src']))    { $img_src = $_POST['img_src'];  if($img_src ==''){unset($img_src);}}
        if (isset($_POST['time_span']))  { $time_span = $_POST['time_span'];      if($time_span ==''){unset($time_span);}   }
        if (isset($_POST['start_time'])) { $start_time = $_POST['start_time'];    if($start_time ==''){unset($start_time);}   }
        if (isset($_POST['finish_time'])){ $finish_time = $_POST['finish_time'];  if($finish_time ==''){unset($finish_time);}   }           
        if (isset($_POST['title']))      { $title = $_POST['title'];      if($title ==''){unset($title);}   }
        if (isset($_POST['meta_d']))     { $meta_d = $_POST['meta_d'];    if($meta_d ==''){unset($meta_d);} }
        if (isset($_POST['meta_k']))     { $meta_k = $_POST['meta_k'];    if($meta_k ==''){unset($meta_k);} }
        if (isset($_POST['text']))       { $text = $_POST['text'];        if($text ==''){unset($text);}     }
        if (isset($_POST['description'])){ $descr = $_POST['description'];if($descr ==''){unset($descr);}   }
        if (isset($_POST['place']))       { $place = $_POST['place'];        if($place ==''){unset($place);}   }
        if (isset($_POST['date_']))      { $date = $_POST['date_'];      if($date =='') {unset($date);}     }
        if (isset($_POST['adress']))      { $adress = $_POST['adress'];      if($adress =='') {unset($adress);}     }
        if (isset($category_id) && isset($time_span) && isset($place) && isset($start_time) && isset($finish_time) 
        && isset($date) && isset($title) && isset($meta_d) && isset($meta_k) && isset($descr) 
        && isset($text) && $_FILES["myfile"]['size'] > 0)
        {
            if( $_FILES["myfile"]['size'] > 0)
            {
                    $ext = pathinfo($_FILES['myfile']['name'], PATHINFO_EXTENSION);
                    $fileName = $id.".".$ext; 
                    $news_directory = $_SERVER['DOCUMENT_ROOT'] ."/images/events/$id/";
                    $path_to_file_tmp = $news_directory . $fileName;
                    if (file_exists($path_to_file_tmp)) unlink($path_to_file_tmp);
                    move_uploaded_file($_FILES["myfile"]['tmp_name'], $path_to_file_tmp);                  
                    $path_to_newsIcon = $_SERVER['DOCUMENT_ROOT'] ."/images/events/" . $fileName; 
                    $path_to_oldNewsIcon = $_SERVER['DOCUMENT_ROOT'] ."/".$img_src;
                    $img_src = "images/events/".$fileName;
                    if (file_exists($path_to_newsIcon)) unlink($path_to_newsIcon); 
                    if (file_exists($path_to_oldNewsIcon)) unlink($path_to_oldNewsIcon); 
                    move_uploaded_file($_FILES["myfile"]['tmp_name'], $path_to_newsIcon);                 
                    Adminka::imgResize($path_to_file_tmp, $path_to_newsIcon, 604, 340, $ext); 
            }        
            $result = Adminka::updateEvent($id, $title, $meta_d, $meta_k, $descr, $text, $img_src, $date, $category_id,$time_span,$start_time,$finish_time,$place, $adress);
            if($result=="good") 
            {
                    $res_text = urlencode ( "Подію Обновлено успiшно!");
                    header("HTTP/1.1 301 Moved Permanently");                    
                    header("Location: result.php?result=$res_text");
                    exit;
            }else{
                    $res_text = urlencode ("Подію Не Обновлено! -  ".$result);
                    header("HTTP/1.1 301 Moved Permanently");                    
                    header("Location: error.php?error=$res_text");
                    exit;
            }       
        }else{
            //echo "$title,$meta_d,$meta_k,$descr,$author,$text,$date,$img_src";exit;
            $res_text = urlencode ("Не всі параметри заповнені!");
            header("HTTP/1.1 301 Moved Permanently");                    
            header("Location: error.php?error=$res_text");
            exit;
        }
    break;

    case "del_event":
        if (isset($_POST['id'])) {$id = $_POST['id']; if($id ==''){unset($id);}}
        if (isset($_POST['img_src'])) {$img_src = $_POST['img_src']; if($img_src ==''){unset($img_src);}}       
        if (isset($img_src) && isset($id) )
        {
            $result = Adminka::delEvent($id, $img_src);
            if($result=="good") 
            {
                    $res_text = urlencode ( "Подію Видалено успiшно!");
                    header("HTTP/1.1 301 Moved Permanently");                    
                    header("Location: result.php?result=$res_text");
                    exit;
            }
            else
            {
                    $res_text = urlencode ("Подію Не Видалено! -  ".$result);
                    header("HTTP/1.1 301 Moved Permanently");                    
                    header("Location: error.php?error=$res_text");
                    exit;
            }           
        }
        else
        {
            $res_text = urlencode ("Не вибрана жодна Подія для видалення!");
            header("HTTP/1.1 301 Moved Permanently");                    
            header("Location: error.php?error=$res_text");
            exit;
        }       
        break;

        case "add_sportsman":     
               if (isset($_POST['firstName']))     $firstName = str_replace("'", "`", $_POST['firstName']);         if($firstName == '')     unset($firstName);
               if (isset($_POST['lastName']))      $lastName = str_replace("'", "`", $_POST['lastName']);           if($lastName == '')      unset($lastName);
               if (isset($_POST['secondName']))    $secondName = str_replace("'", "`", $_POST['secondName']);       if($secondName == '')    unset($secondName);
               if (isset($_POST['roleId']))        $roleId = $_POST['roleId'];                                      if($roleId == '')    unset($secondName);
               if (isset($_POST['birthday']))      $birthday = $_POST['birthday'];           if($birthday == '')      unset($birthday);
               if (isset($_POST['weight']))        $weight = $_POST['weight'];               if($weight == '')        unset($weight);
               if (isset($_POST['unitId']))        $unitId = $_POST['unitId'];               if($unitId == '')        unset($unitId);
               if (isset($_POST['sport_rankId']))  $sport_rankId = $_POST['sport_rankId'];   if(!isset($_POST['sport_rankId']))  $sport_rankId = 'NULL';
               if (isset($_POST['suddiv_rankId'])) $suddiv_rankId = $_POST['suddiv_rankId']; if(!isset($_POST['suddiv_rankId'])) $suddiv_rankId = 'NULL';               
               if (isset($_POST['coachId']))       $coachId = $_POST['coachId'];             if(!isset($_POST['coachId']))       $coachId = 'NULL';
               if (isset($_POST['ztu']))           $ztu = 1; else     $ztu = 0;
               if (isset($_POST['coach']))         $coach = 1; else   $coach = 0;
               if (isset($_POST['description']))   $description = str_replace("'", "`", $_POST['description']);  
               if (isset($_POST['telephone']))     $telephone = str_replace("'", "`", $_POST['telephone']);         
               if (isset($_POST['identCode']))     $identCode = str_replace("'", "`", $_POST['identCode']);         
         
           if (isset($firstName) && isset($lastName) && isset($secondName) && isset($birthday) && isset($roleId) && $_FILES["myfile"]['size'] > 0)
           {
                   $sportsmen_count = Adminka::getSportsmenCount()+1;        
                   $ext = pathinfo($_FILES['myfile']['name'], PATHINFO_EXTENSION);
                   $fileName = $sportsmen_count.".".$ext;                 
                   $paticiepents_directory = $_SERVER['DOCUMENT_ROOT'] ."/images/paticiepents/$sportsmen_count/";
                   if (!is_dir($paticiepents_directory)) mkdir($paticiepents_directory,0777);           
                   $path_to_file_tmp = $paticiepents_directory . $fileName;
                   if (file_exists($path_to_file_tmp)) unlink($path_to_file_tmp);
                   move_uploaded_file($_FILES["myfile"]['tmp_name'], $path_to_file_tmp);                  
                   $path_to_Icon = $_SERVER['DOCUMENT_ROOT'] ."/images/paticiepents/" . $fileName;  
                   move_uploaded_file($_FILES["myfile"]['tmp_name'], $path_to_Icon);                 
                   Adminka::imgResize($path_to_file_tmp, $path_to_Icon, 210, 210, $ext); 
                   $img_src = "images/paticiepents/".$fileName;                                
                   
                   $result = Adminka::addSportsmen($img_src,$firstName,$lastName,$secondName,$birthday,$weight,$unitId,$sport_rankId,$suddiv_rankId,$coachId,$ztu,$coach,$description,$telephone,$identCode,$roleId);
                   if($result =="good") 
                   {
                       $res_text = urlencode ( "Спортсмен <em>$title</em><br><br><br><p>Добавлено успешно!</p>");
                       header("HTTP/1.1 301 Moved Permanently");                    
                       header("Location: result.php?result=$res_text");
                       exit;
                   }
                   else
                   {
                       $res_text = urlencode ("Спортсмен Не Добавлено! -  ".$result);
                       header("HTTP/1.1 301 Moved Permanently");                    
                       header("Location: error.php?error=$res_text");
                       exit;
                   }            
           }
           else
           {
               $res_text = urlencode ("Не всі параметри заповнені!");
               header("HTTP/1.1 301 Moved Permanently");                    
               header("Location: error.php?error=$res_text");
               exit;
           }                
           break;

               case edit_sportsman:
               if (isset($_POST['id']))             { $id = $_POST['id'];                      if($id ==''){unset($id);}         }
               if (isset($_POST['name']))           { $name = $_POST['name'];                  if($name ==''){unset($name);}   }
               if (isset($_POST['rank']))           { $rank = $_POST['rank'];                  if($rank ==''){unset($rank);} }
               if (isset($_POST['competitions']))   { $competitions = $_POST['competitions'];  if($competitions ==''){unset($competitions);} }
               
                if (isset($_POST['id']) && isset($name) && isset($rank) && isset($competitions))
               {
                   if( $_FILES["myfile"]['size'] > 0)
                   {
                           $ext = pathinfo($_FILES['myfile']['name'], PATHINFO_EXTENSION);
                           $fileName = $id.".".$ext; 
                           $news_directory = $_SERVER['DOCUMENT_ROOT'] ."/images/sportmen/$id/";
                           $path_to_file_tmp = $news_directory . $fileName;
                           if (file_exists($path_to_file_tmp)) unlink($path_to_file_tmp);
                           move_uploaded_file($_FILES["myfile"]['tmp_name'], $path_to_file_tmp);                  
                           $path_to_newsIcon = $_SERVER['DOCUMENT_ROOT'] ."/images/sportmen/" . $fileName;
                           $img_src = "img/sportmen/".$fileName;                            
                           $path_to_oldNewsIcon = $_SERVER['DOCUMENT_ROOT'] ."/".$img_src;
                           if (file_exists($path_to_newsIcon)) unlink($path_to_newsIcon); 
                           if (file_exists($path_to_oldNewsIcon)) unlink($path_to_oldNewsIcon); 
                           move_uploaded_file($_FILES["myfile"]['tmp_name'], $path_to_newsIcon);                 
                           Adminka::imgResize($path_to_file_tmp, $path_to_newsIcon, 310, 310, $ext); 
                   }        
                   $result = Adminka::updateSportman($id, $name, $rank, $competitions);
                   if($result=="good") 
                   {
                           $res_text = urlencode ( "Обновлено успiшно!");
                           header("HTTP/1.1 301 Moved Permanently");                    
                           header("Location: result.php?result=$res_text");
                           exit;
                   }else{
                           $res_text = urlencode ("Не Обновлено! -  ".$result);
                           header("HTTP/1.1 301 Moved Permanently");                    
                           header("Location: error.php?error=$res_text");
                           exit;
                   }       
               }else{
                   //echo "$title,$meta_d,$meta_k,$descr,$author,$text,$date,$img_src";exit;
                   $res_text = urlencode ("Не всі параметри заповнені!");
                   header("HTTP/1.1 301 Moved Permanently");                    
                   header("Location: error.php?error=$res_text");
                   exit;
               }
           break;

           case del_sportmen:
               if (isset($_POST['id'])) { $id = $_POST['id'];  if($id ==''){unset($id);}         }
               if (isset($_POST['id']))
             
               {
                   $result = Adminka::delSportmen($id);
                   if($result=="good") 
                   {
                           $res_text = urlencode ( "Видалено успiшно!");
                           header("HTTP/1.1 301 Moved Permanently");                    
                           header("Location: result.php?result=$res_text");
                           exit;
                   }else{
                           $res_text = urlencode ("Не Видалено! -  ".$result);
                           header("HTTP/1.1 301 Moved Permanently");                    
                           header("Location: error.php?error=$res_text");
                           exit;
                   }           
               }else{
                   $res_text = urlencode ("Не вибранo для видалення!");
                   header("HTTP/1.1 301 Moved Permanently");                    
                   header("Location: error.php?error=$res_text");
                   exit;
               }       
               break;  
}     
  
  ?>