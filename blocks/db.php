<? 
    $db = mysqli_connect("localhost","vites","30041986","fvsb");
    if (!$db) 
    { 
       printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error()); 
       exit; 
    } 
    // $db = mysql_connect ("localhost","vites","30041986");
    // mysql_select_db("fvsb",$db); 
    // mysql_set_charset("utf8");
?>