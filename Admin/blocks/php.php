<? 
    $db = mysqli_connect("localhost","vites","30041986","fvsb");
    $db->set_charset('utf8');
    if (!$db) 
    { 
       printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error()); 
       exit; 
    } 
?>