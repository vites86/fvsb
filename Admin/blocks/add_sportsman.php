 <form action="handler.php" method="post" enctype="multipart/form-data">
                              <input type="hidden" name="handler"  id="handler" value="add_sportsman"/>
                              <table>
                              <tr>
                              <td>ПІБ</td>
                              <td><textarea name="name" id="name" cols="100" rows="1" maxlength="120" required></textarea></td>
                              </tr>
                              <tr>
                              <td>Cпортивне звання</td>
                              <td><textarea name="rank" id="rank"  cols="100" rows="2" required></textarea></td>
                              </tr>
                              <tr>
                              <td>Досягнення</td>
                              <td><textarea name="competitions" id="competitions" cols="100" rows="7" required></textarea></td>
                              </tr>                             
                              <tr>
                              <td>Картинка (210x210)&nbsp;&nbsp;&nbsp;&nbsp;<br>формат .png </td>
                              <td> <input type='file' name='myfile' id='myfile' required></td>
                              </tr>
                              <tr>
                              <td><br><br>                                
                                <input type="submit" value="Додати"><br><br></td>
                              </tr>
                              </table>                              
               </form><br><br>