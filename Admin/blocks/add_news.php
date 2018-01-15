<?
    $clients_row = mysqli_query($db,"SELECT * FROM news_category");
    if (!$clients_row) { die('Неверный запрос: ' . mysql_error());}
    $categories = "<select class='form-control' style='width:50%;color:black' id='categories' name='categories' required> ".
    "<option value=''>Оберіть категорію..</option>;";
    while ($line = mysqli_fetch_array($clients_row)) 
        {
             $categories = $categories."<option value=".$line['id']." >".$line['name']."</option>";
        }
    $categories = $categories."</select>";
?>


 <form action="handler.php" method="post" enctype="multipart/form-data" class="form-horisontal">
                              <input type="hidden" name="handler"  id="handler" value="add_news"/>
                              <table>
                              <tr>
                                  <td>Назва</td>
                                  <td><textarea name="title" id="title" cols="100" rows="1" maxlength="90" class="form-control" required></textarea><br></td>
                              </tr>   
                              <tr>                              
                                  <td>Категорія<br><br></td>
                                  <td><?php echo $categories; ?><br></td>
                              </tr>                           
                              <!-- <tr>
                                  <td>Коротка назва<br>(для Галереї)<br><br></td>
                                  <td><textarea name="short_name" id="short_name" cols="20" rows="1" required></textarea><br><br></td>
                              </tr> -->
                              <tr>
                                  <td>Короткий опис</td>
                                  <td><textarea name="description" id="description"  cols="100" rows="2" class="form-control" required></textarea><br></td>
                              </tr>
                              <tr>
                                  <td>Ключові слова</td>
                                  <td><textarea name="meta_k" id="meta_k" cols="100" rows="2" class="form-control" required></textarea><br></td>
                              </tr>
                              <center> 
                              <tr>
                                  <td>Ключовий опис</td>
                                  <td><textarea name="meta_d" id="meta_d" cols="100" rows="2" class="form-control" required></textarea><br></td>
                              </tr>
                              </center>
                              <tr>
                                  <td>Автор</td>
                                  <td><textarea name="author" id="author" cols="100" rows="2" class="form-control" required></textarea><br></td>
                              </tr>
                              <tr>
                                  <td>Текст новини<br><br></td>
                                  <td><textarea name="text" id="text" cols="100" rows="20" required></textarea><br><br></td>
                              </tr>                              
                              <tr>                              
                                  <td><img src='assets/img/fb.png' alt='fb' style='height:15px;'> Опублікувати<br><br></td>
                                  <td><input type='checkbox' name='soc_list[]' value='facebook'><br><br></td>
                              </tr>
                              <tr>
                                  <td><img src='assets/img/tw.png' alt='tw' style='height:15px;'> Опублікувати<br><br></td>
                                  <td><input type='checkbox' name='soc_list[]' value='twitter'><br><br></td>
                              </tr>
                              <tr>
                                  <td>Картинка (370x300)&nbsp;&nbsp;&nbsp;&nbsp;<br>формат .png </td>
                                  <td> <input type='file' name='myfile' id='myfile' class="form-control" required></td>
                              </tr>
                              <tr>
                              <td><br><br>                                
                                <input type="submit" value="Додати" class="btn btn-primary"><br><br></td>
                              </tr>
                              </table>                              
               </form><br><br>