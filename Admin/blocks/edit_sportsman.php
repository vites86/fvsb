<?php 
if (isset($_GET['news_id'])) {$news_id = $_GET['news_id'];} 
if (!isset($news_id))
{
echo "<br><br>";
$result = mysql_query("SELECT id, name, rank, description FROM sportmen order by id desc");
$myrow = mysql_fetch_array($result); 
do 
{
printf ("<p><img src='../img/sportmen/$myrow[id].png' style='height:50px;' />
         <a href='index.php?id=12&news_id=%s'>%s</a></p><br>",$myrow["id"],$myrow["name"]);
}
while ($myrow = mysql_fetch_array($result));
echo "<br><br><br><br><br><br><br><br>";
}
else
{
$result = mysql_query("SELECT * FROM sportmen WHERE id = $news_id order by id desc");
$myrow = mysql_fetch_array($result); 
$img_src = $_SERVER['DOCUMENT_ROOT'] . "/msac/" . $myrow['img'];
$name = str_replace("\"", "''", $myrow['name']);
$rank = str_replace("\"", "''", $myrow['rank']);
$description = str_replace("\"", "''", $myrow['description']);

print <<<HERE
<h1>$myrow[name]</h1>
<div style="width:50%; text-align:center"><img style='width:150px' src='../img/sportmen/$myrow[id].png' alt='../img/sportmen/$myrow[id].png' /></div><br><br>
<form name="form1" method="post" action="handler.php" enctype='multipart/form-data'>
    <input type="hidden" name="handler"  id="handler" value="edit_sportsman"/>
    <p>
      <label>ПІБ</label> <br>
      <input value="$name" type="text" name="name" id="name" size="100" maxlength="90" required>                      
    </p>
     <p>
      <label>Спортивне звання</label> <br>
      <input value="$myrow[rank]" type="text" name="rank" id="rank" size="20" maxlength="20" required>                  
    </p>
    <p>
      <label>Досягнення</label><br>
      <input value="$myrow[description]" type="text" name="competitions" id="competitions" size="100" required>      
    </p>
   
    <p>
      <label>Картинка (310x310)&nbsp; лише формат .png  </label>   
      <input type='file' name='myfile' id='myfile' />        
    </p>
    <input name="id" type="hidden" value="$myrow[id]"><br>
     <p>
      <label>
      <input type="submit" name="submit" id="submit" value="Зберегти зміни">
      </label>
    </p>
  </form>

HERE;
}
?>