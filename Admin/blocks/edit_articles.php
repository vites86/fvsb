<?php 
if (isset($_GET['article_id'])) {$article_id = $_GET['article_id'];} 
if (!isset($article_id))
{
    echo "<br><br>";
    $result = mysqli_query($db,"SELECT title, id, img FROM events order by id desc");
    $myrow = mysqli_fetch_array($result); 
    do 
    {
        printf ("<p><img src='../$myrow[img]' style='height:50px;' />
             <a href='index.php?id=9&article_id=%s'>%s</a></p><br>",$myrow["id"],$myrow["title"]);
    }
    while ($myrow = mysqli_fetch_array($result));
    echo "<br><br><br><br><br><br><br><br>";
}
else
{
    $result = mysqli_query($db,"SELECT * FROM events WHERE id = $article_id order by id desc");
    $myrow = mysqli_fetch_array($result); 
    $img_src = $_SERVER['DOCUMENT_ROOT'] . $myrow['img'];
    $title = str_replace("\"", "''", $myrow['title']);
    $text = str_replace("\"", "''", $myrow['text_']);
    $description = str_replace("\"", "''", $myrow['description']);
    //$title = str_replace("`", "'", $myrow['title']);
    //$text = str_replace("`", "'", $myrow['text']);
    //$description = str_replace("`", "'", $myrow['description']);
    
    $clients_row = mysqli_query($db, "SELECT * FROM news_category");
         $categories = "<select class='form-control' style='width:50%' id='categories' name='categories' required>
                         <option value=''>Оберіть категорію..</option>;";
          while ($line = mysqli_fetch_array($clients_row)) 
              {
                  if($myrow['cat_id'] == $line['id']) $categories = $categories."<option value=".$line['id']." selected>".$line['name']."</option>";
                  else $categories = $categories."<option value=".$line['id']." >".$line['name']."</option>";
              }
          $categories = $categories."</select>";

print <<<HERE
<h1>$myrow[title]</h1>
<div style="width:50%; text-align:center"><img style='width:150px' src='../$myrow[img]' alt='../$myrow[img]' /></div><br><br>
<form name="form1" method="post" action="handler.php" enctype='multipart/form-data'>
    <input type="hidden" name="handler"  id="handler" value="edit_event"/>
    <p>
      <label>Назва</label> <br>
      <input value="$title" type="text" name="title" id="title" size="100" maxlength="90" required>       
               
    </p>
    <p>
          <label>Категорiя</label>
          $categories
    </p>
    <p>
      <label>Дата проведення</label><br>
        <input value="$myrow[date_]"  name="date_" type="text" id="date_" size="100" required>        
    </p>

    <p>
      <label>Tривалість</label><br>
      <input value="$myrow[time_span]" type="text" name="time_span" id="time_span" size="100" required>
      
    </p>
    
    <p>
    <label>Початок</label><br>
    <input value="$myrow[start_time]" type="text" name="start_time" id="start_time" size="100" required>
    
  </p><p>
  <label>Закінчення</label><br>
  <input value="$myrow[finish_time]" type="text" name="finish_time" id="finish_time" size="100" required>
  
</p>
<p>
<label>Місто проведення</label><br>
<input value="$myrow[place]" type="text" name="place" id="place" size="100" required>

</p>
<p>
<label>Адреса проведення</label><br>
<input value="$myrow[adress]" type="text" name="adress" id="adress" size="100" required>
</p>   
    <p>
      <label>Ключовий опис</label><br>
      <input value="$myrow[meta_d]" type="text" name="meta_d" id="meta_d" size="100" required>
      
    </p>
    <p>
      <label>Ключові слова</label><br>
      <input value="$myrow[meta_k]" type="text" name="meta_k" id="meta_k" size="100" required>
      
    </p>   
    <p>
      <label>Короткий опис</label><br>
        <input value="$description" name="description" type="text" id="description" size="100" required>       
    </p>      
    
    <p>
      <label>Текст події </label><br>   
        <textarea name="text" id="text" cols="100" rows="20" required>$text</textarea>       
    </p>    
    <p>
      <label>Картинка (370x300)&nbsp; бажано формат .png  </label>   
      <input type='file' name='myfile' id='myfile' />        
    </p>
    <input name="id" type="hidden" value="$myrow[id]"><br>
    <input name="img_src" type="hidden" value="$myrow[img]"><br>
     <p>
      <label>
      <input type="submit" name="submit" id="submit" value="Зберегти зміни">
      </label>
    </p>
  </form>

HERE;
}
?>