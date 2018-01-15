<?php 
if (isset($_GET['news_id'])) {$news_id = $_GET['news_id'];} 
if (!isset($news_id))
{
echo "<br><br>";
$result = mysqli_query($db,"SELECT title, id, img FROM news");
$myrow = mysqli_fetch_array($result); 
do 
{
printf ("<p><img src='../$myrow[img]' style='height:50px;' />
         <a href='index.php?id=6&news_id=%s'>%s</a></p><br>",$myrow["id"],$myrow["title"]);
}
while ($myrow = mysqli_fetch_array($result));
echo "<br><br><br><br><br><br><br><br>";
}
else
{
$result = mysqli_query($db,"SELECT * FROM news WHERE id = $news_id");
$myrow = mysqli_fetch_array($result); 
$img_src = $_SERVER['DOCUMENT_ROOT'] . $myrow['img'];
$title = str_replace("\"", "''", $myrow['title']);
$text = str_replace("\"", "''", $myrow['text_']);
$description = str_replace("\"", "''", $myrow['description']);
//$title = str_replace("`", "'", $myrow['title']);
//$text = str_replace("`", "'", $myrow['text']);
//$description = str_replace("`", "'", $myrow['description']);


print <<<HERE
<h1>$myrow[title]</h1>
<form name="form1" method="post" action="handler.php" enctype='multipart/form-data'>
    <input type="hidden" name="handler"  id="handler" value="add_newsPhoto"/>    
    <p>
      <label>Картинка 1 </label>   
      <input type='file' name='myfile1' id='myfile1' />        
    </p>
    <p>
      <label>Картинка 2</label>   
      <input type='file' name='myfile2' id='myfile2' />        
    </p>
    <p>
      <label>Картинка 3</label>   
      <input type='file' name='myfile3' id='myfile3' />        
    </p>
    <p>
      <label>Картинка 4</label>   
      <input type='file' name='myfile4' id='myfile4' />        
    </p>
    <p>
      <label>Картинка 5</label>   
      <input type='file' name='myfile5' id='myfile5' />        
    </p>
    <input name="id" type="hidden" value="$news_id"><br>   
     <p>
      <label>
      <input type="submit" name="submit" id="submit" value="Добавити фото">
      </label>
    </p>
  </form>

HERE;
}
?>