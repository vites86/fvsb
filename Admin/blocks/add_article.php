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
<form action="handler.php" method="post" enctype="multipart/form-data" class="form-рщкшіщтефд">
                              <input type="hidden" name="handler"  id="handler" value="add_event"/>
                              <table>
                              <tr>
                              <td><lable>Назва</lable></td>
                              <td><textarea name="title" id="title" cols="100" rows="1" maxlength="120" class="form-control" required></textarea><br></td>
                              </tr>
                              <tr>                              
                                  <td>Категорія<br><br></td>
                                  <td><?php echo $categories; ?><br></td>
                              </tr>  
                              
                              <tr>
                              <td>Дата проведення</td>
                              <td><input name="date_" id="date_" type="date" maxlength="120" class="form-control" required/><br></td>
                              </tr>
                              <tr>
                              <tr>
                              <td>Tривалість</td>
                              <td><input name="time_span" id="time_span" type="text" maxlength="120" placeholder="скільки днів?" class="form-control" required/><br></td>
                              </tr>
                              <tr>
                              <tr>
                              <td>Початок</td>
                              <td><input name="start_time" id="start_time" type="text" maxlength="120" class="form-control" required/><br></td>
                              </tr>
                              <tr>
                              <tr>
                              <td>Закінчення</td>
                              <td><input name="finish_time" id="finish_time" type="text" maxlength="120" placeholder="приблизно 18.00" class="form-control" required/><br></td>
                              </tr>
                              <tr>
                              <td>Місто проведення</td>
                              <td><input name="place" id="place" type="text"  maxlength="120" class="form-control" required/><br></td>
                              </tr>
                              <tr>
                              <tr>
                              <td>Адреса проведення</td>
                              <td>
                              <input name="adress" id="adress" type="text" maxlength="120" placeholder="повна адреса" class="form-control" required/><br></td>
                              </tr>                              
                              <td>Короткий опис</td>
                              <td><textarea name="description" id="description"  cols="100" rows="2" class="form-control" required></textarea><br></td>
                              </tr>
                              <tr>
                              <td>Ключові слова</td>
                              <td><textarea name="meta_k" id="meta_k" cols="100" rows="2" class="form-control" required></textarea><br></td>
                              </tr><center> <tr>
                              <td>Ключовий опис</td>
                              <td><textarea name="meta_d" id="meta_d" cols="100" rows="2" class="form-control" required></textarea><br></td>
                              </tr></center>                            
                              <tr>
                              <td>Текст події<br><br></td>
                              <td><textarea name="text" id="text" cols="100" rows="20" class="form-control" required></textarea><br><br></td>
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
                              <td>Картинка (604x340)&nbsp;&nbsp;&nbsp;&nbsp;<br>формат .png </td>
                              <td> <input type='file' name='myfile' id='myfile' required></td>
                              </tr>
                              <tr>
                              <td><br><br>                                
                                <input type="submit" value="Додати подію" class="btn btn-primary"><br><br></td>
                              </tr>
                              </table>                              
               </form><br><br>