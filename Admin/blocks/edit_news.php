<?php 
if (isset($_GET['news_id'])) {$news_id = $_GET['news_id'];} 
if (!isset($news_id))
{
     echo "<br><br>";
     $result = mysqli_query($db,"SELECT title, id, img FROM news order by id desc");
     $myrow = mysqli_fetch_array($result); 
     do 
     {
     printf ("<p><img src='../$myrow[img]' style='height:50px;' />
              <a href='index.php?id=5&news_id=%s'>%s</a></p><br>",$myrow["id"],$myrow["title"]);
     }
     while ($myrow = mysqli_fetch_array($result));
     echo "<br><br><br><br><br><br><br><br>";
}
else
{
     $result = mysqli_query($db, "SELECT * FROM news WHERE id = $news_id order by id desc");
     $myrow = mysqli_fetch_array($result); 
     $img_src = $_SERVER['DOCUMENT_ROOT'] .  $myrow['img'];
     $title = str_replace("\"", "''", $myrow['title']);
     $text = str_replace("\"", "''", $myrow['text_']);
     $description = str_replace("\"", "''", $myrow['description']);    

     $clients_row = mysqli_query($db, "SELECT * FROM news_category");
     $categories = "<select class='form-control' style='width:50%' id='categories' name='categories' required>
                     <option value=''>Оберіть категорію..</option>;";
      while ($line = mysqli_fetch_array($clients_row)) 
          {
              if($myrow['category_id'] == $line['id']) $categories = $categories."<option value=".$line['id']." selected>".$line['name']."</option>";
              else $categories = $categories."<option value=".$line['id']." >".$line['name']."</option>";
          }
      $categories = $categories."</select>";
     
     print <<<HERE
     <h1>$myrow[title]</h1>
     <div style="width:50%; text-align:center"><img style='width:150px' src='../$myrow[img]' alt='../$myrow[img]' /></div><br><br>
     <form name="form1" method="post" action="handler.php" enctype='multipart/form-data'>
         <input type="hidden" name="handler"  id="handler" value="edit_news"/>
         <p>
           <label>Назва</label> <br>
           <input value="$title" type="text" name="title" id="title" size="100" maxlength="90" required>       
                    
         </p>
         <p>
          <label>Категорiя</label>
          $categories
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
           <label>Автор </label><br>
             <input value="$myrow[author]" name="author" type="text" id="author" size="100" required>       
         </p>
         <p>
           <label>Дата</label><br>
             <input value="$myrow[date_]"  name="date_" type="text" id="date_" size="100" required>        
         </p>
         <p>
           <label>Текст новини </label><br>   
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