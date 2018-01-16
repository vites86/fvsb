<?
    $units_row = mysqli_query($db,"SELECT * FROM units");
    if (!$units_row) { die('Неверный запрос: ' . mysqli_error($db));}
    $units = "<select class='form-control' style='width:30%;color:black' id='unitId' name='unitId' required> ".
    "<option value=''>-- Оберіть підрозділ --</option>;";
    while ($line = mysqli_fetch_array($units_row)) 
        {
             $units = $units."<option value=".$line['id']." >".$line['region']."</option>";
        }
    $units = $units."</select>";

    $ranks_row = mysqli_query($db,"SELECT * FROM sport_ranks");
    if (!$ranks_row) { die('Неверный запрос: ' . mysqli_error($db));}
    $ranks = "<select class='form-control' style='width:30%;color:black' id='sport_rankId' name='sport_rankId'> ".
    "<option value=''>-- Оберіть спортивне звання --</option>;";
    while ($line = mysqli_fetch_array($ranks_row)) 
        {
             $ranks = $ranks."<option value=".$line['id']." >".$line['name']."</option>";
        }
    $ranks = $ranks."</select>";

    $suddiv_row = mysqli_query($db,"SELECT * FROM suddivRanks");
    if (!$suddiv_row) { die('Неверный запрос: ' . mysqli_error($db));}
    $suddiv = "<select class='form-control' style='width:30%;color:black' id='suddiv_rankId' name='suddiv_rankId'> ".
    "<option value=''>-- Оберіть суддівську категорію --</option>;";
    while ($line = mysqli_fetch_array($suddiv_row)) 
        {
             $suddiv = $suddiv."<option value=".$line['id']." >".$line['name']."</option>";
        }
    $suddiv = $suddiv."</select>";

    $coach_row = mysqli_query($db,"SELECT * FROM paticiepents where coach is true");
    if (!$coach_row) { die('Неверный запрос: ' . mysqli_error($db));}
    $coaches = "<select class='form-control' style='width:30%;color:black' id='coachId' name='coachkId'> ".
    "<option value=''>-- Оберіть тренера --</option>;";
    while ($line = mysqli_fetch_array($coach_row)) 
        {
             $coaches = $coaches."<option value=".$line['id']." >".$line['name']."</option>";
        }
    $coaches = $coaches."</select>";
?>
 
 
 
 <form action="handler.php" method="post" enctype="multipart/form-data">
                              <input type="hidden" name="handler"  id="handler" value="add_sportsman"/>
                              <table class="table">
                                <tr>
                                   <td>Прізвище</td>
                                   <td><textarea name="firstName" id="firstName"  cols="100" rows="1" class="form-control" required></textarea></td>
                                </tr>
                                <tr>
                                   <td>Ім`я</td>
                                   <td><textarea name="lastName" id="lastName"  cols="100" rows="1" class="form-control" required></textarea></td>
                                </tr>
                                <tr>
                                   <td>По-батькові</td>
                                   <td><textarea name="secondName" id="secondName"  cols="100" rows="1" class="form-control" required></textarea></td>
                                </tr>
                                <tr>
                                   <td>Вага</td>
                                   <td><textarea name="weight" id="weight"  cols="100" rows="1" class="form-control" required></textarea></td>
                                </tr>
                                <tr>
                                    <td>Підрозділ</td>
                                    <td><?php echo $units; ?><br></td>
                                </tr>
                                <tr>
                                   <td>Спортивне звання</td>
                                   <td><?php echo $ranks; ?><br></td>
                                </tr>
                                <tr>
                                   <td>Суддівська категорія</td>
                                   <td><?php echo $suddiv; ?><br></td>
                                </tr>
                                <tr>
                                   <td>Тренер</td>
                                   <td><?php echo $coaches; ?><br></td>
                                </tr>
                                <tr>
                                   <td>Наявність звання ЗТУ </td>
                                   <td><input type="checkbox" name="ztu" id="ztu" value="1"   cols="1" rows="1" style="float:left" class="radio-inline"></input></td>
                                  
                                </tr>
                                <tr>
                                   <td>Чи є інструктором </td>
                                   <td><input type="checkbox" name="coach" id="coach" value="1"   cols="2" rows="1" style="float:left" class="radio-inline"></input></td>
                                </tr>  
                                <tr>
                                   <td>Ідентифікаційний код </td>
                                   <td><textarea name="identCode" id="identCode"  cols="100" rows="1" class="form-control" required></textarea></td>
                                </tr>
                                <tr>
                                   <td>Телефон</td>
                                   <td><textarea name="telephone" id="telephone"  cols="100" rows="1" class="form-control" required></textarea></td>
                                </tr>
                                <tr>
                                   <td>Примітки</td>
                                   <td><textarea name="description" id="description"  cols="100" rows="1" class="form-control" ></textarea></td>
                                </tr>                         
                              <tr>
                                <td>Фото (210x210)&nbsp;&nbsp;&nbsp;&nbsp;<br>формат .png </td>
                                <td> <input type='file' name='myfile' id='myfile' required></td>
                              </tr>
                              <tr>
                                 <td><br><br>                                
                                 <input type="submit" value="Додати"><br><br></td>
                              </tr>
                             </table>                              
               </form><br><br>