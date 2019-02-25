<? 
    //$db = mysqli_connect("localhost","vites","30041986","fvsb");
    $db = mysqli_connect("db20.freehost.com.ua","fvsb_vites","vites1986","fvsb_db");
    $db->set_charset('utf8');
    if (!$db) 
    { 
       printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error()); 
       exit; 
    } 
    // $db = mysql_connect ("localhost","vites","30041986");
    // mysql_select_db("fvsb",$db); 
    // mysql_set_charset("utf8");
?>