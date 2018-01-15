<?php 
if (isset($_GET['news_id'])) {$news_id = $_GET['news_id'];} 
if (!isset($news_id))
{
    echo "<br><br>";
    $result = mysqli_query($db, "SELECT title, id, img FROM news");
    $myrow = mysqli_fetch_array($result); 
    do 
    {
         printf ("<p><img src='../$myrow[img]' style='height:50px;' />
                  <a href='index.php?id=7&news_id=%s'>%s</a></p><br>",$myrow["id"],$myrow["title"]);
    }
    while ($myrow = mysqli_fetch_array($result));
    echo "<br><br><br><br><br><br><br><br>";
}
else
{
     
     $news_directory = $_SERVER['DOCUMENT_ROOT'] ."/images/news/$news_id/";
     $files = scandir($news_directory); // Берём всё содержимое директории 
     if (count($files) == 2) {echo "<h1>Фотографії покищо не завантажені в дану новину</h1>";}
     print <<<HERE
     <form name="form1" method="post" action="handler.php" >
     <input type="hidden" name="handler"  id="handler" value="del_newsPhoto"/><br><br>
     <table style='width:100%;text-align:center'>
     <tr>
     <td style='width:33%;'>      
HERE;
       for ($i = 0; $i < count($files); $i++) 
       {
              if($i%3==0) 
              {
                if (($files[$i] != ".") && ($files[$i] != "..")) 
                { // Текущий каталог и родительский пропускаем
                    $path = $dir.$files[$i]; // Получаем путь к картинке  
                    $fileName=basename($path);      
                    echo "<div style='width:100%;height:75px;'>
                          <img align='middle' height='100px' width='155px' src='../images/news/$news_id/$fileName'/>&nbsp;&nbsp;
                          <input align='middle' type='checkbox' name='check_list[]' value='../images/news/$news_id/$fileName'>Обрати<br>
                          </div><br><br><br>";     
                    $k++; // Увеличиваем вспомогательный счётчик      
                 } 
              } 
         } // Перебираем все файлы
echo "</td>
      <td style='width:33%;'>";
        for ($i = 0; $i < count($files); $i++) 
        {
              if($i%3==2) 
              {
                  if (($files[$i] != ".") && ($files[$i] != "..")) 
                     { // Текущий каталог и родительский пропускаем
                      $path = $dir.$files[$i]; // Получаем путь к картинке  
                      $fileName=basename($path);      
                      echo "<div style='width:100%;height:75px;'>
                            <img align='middle' height='100px' width='155px' src='../images/news/$news_id/$fileName'/>&nbsp;&nbsp;
                            <input align='middle' type='checkbox' name='check_list[]' value='../images/news/$news_id/$fileName'>Обрати<br>
                            </div><br><br><br>";     
                     }  
              }
         } 
 echo "</td>
      <td style='width:34%;'>";
        for ($i = 0; $i < count($files); $i++) 
        {
              if($i%3==1) 
              {
                  if (($files[$i] != ".") && ($files[$i] != "..")) 
                     { // Текущий каталог и родительский пропускаем
                      $path = $dir.$files[$i]; // Получаем путь к картинке  
                      $fileName=basename($path);      
                      echo "<div style='width:100%;height:75px;'>
                            <img align='middle' height='100px' width='155px' src='../images/news/$news_id/$fileName'/>&nbsp;&nbsp;
                            <input align='middle' type='checkbox' name='check_list[]' value='../images/news/$news_id/$fileName'>Обрати<br>
                            </div><br><br><br>";     
                     }  
              }
         } 
echo "</td>
      <tr>
      <td></td>
      <td>";
    if (count($files) != 2) /* приховати кнопку видалення фото*/
    {
    echo "<input name='id' type='hidden' value='$news_id'>
             <p><br><br><br>
               <label style='width:100%; text-align:center'>
               <input type='submit' name='submit' id='submit' value='Видалити обране'>
               </label>
             </p>"
          ;
    }else{echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";}
echo "</td>
      <td></td>
      </tr>
      </table>
      </form>";

}
?>
<br><br><br><br><br><br><br><br><br><br><br><br>