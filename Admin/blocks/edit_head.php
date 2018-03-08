
<style>
.table_tr1 {
  width:15% !important;
}
table input{
    left: 15px;
    width:30% !important;
}
</style>
<?php 
if (isset($_GET['sportsman_id'])) {$sportsman_id = $_GET['sportsman_id'];} 
if (isset($_POST['unitId'])) {$unit_id = $_POST['unitId'];} else {$unit_id = "%";}

$units_row = mysqli_query($db,"SELECT * FROM units");
if (!$units_row) { die('Неверный запрос: ' . mysqli_error($db));}
$units = "<select class='form-control' style='width:30%;color:black' id='unitId' name='unitId' required> ".
"<option value=''>-- Оберіть підрозділ --</option>;<option value='%'>-- Усі підрозділи --</option>";
while ($line = mysqli_fetch_array($units_row)) 
    {
        if($unit_id == $line['id']) $units = $units."<option value=".$line['id']." selected>".$line['region']."</option>";
        else $units = $units."<option value=".$line['id']." >".$line['region']."</option>";
    }
$units = $units."</select>";

if (!isset($sportsman_id))
{
    echo "<form action='index.php?id=14' method='post' enctype='multipart/form-data'>";
    echo $units;
    echo "<br><input type='submit' value='Відібрати' class='btn'>";
    echo "<br><br>";
    $result = mysqli_query($db, "SELECT id, img, lastName, firstName FROM `paticiepents` 
                                 WHERE unitId like '$unit_id' AND roleId = 5 order by id desc");
    if (!$result) { die('Неверный запрос: ' . mysqli_error($db));}
    $myrow = mysqli_fetch_array($result); 
    do 
    {
       printf ("<p><img src='../$myrow[img]' style='height:50px;' />
         <a href='index.php?id=14&sportsman_id=%s'>%s</a></p><br>",$myrow["id"],$myrow["lastName"].' '.$myrow["firstName"]);
    }
    while ($myrow = mysqli_fetch_array($result));
    echo "<br><br><br><br><br><br><br><br>";    
}
else
{ 

    $result = mysqli_query($db,"SELECT ptp.img, ptp.firstName,ptp.lastName,ptp.secondName,
    ptp.weight as weight,
    ptp.ztu,
    ptp.id as id, 
    DATE_FORMAT(ptp.birthday,'%Y-%m-%d') as birthday, 
    ptp.coach as coach,
    ptp.description as description,
    ptp.telephone as telephone,
    ptp.identCode as identCode,
    un.region as unit, 
    un.id as unitId,
    sprt.name as sport_rank, 
    sprt.id as sport_rankId,
    sud.name as suddiv_rank, 
    sud.id as suddiv_rankId, 
    ptp.roleId as role_Id,
    coach.firstName as coachName, coach.lastName as coachlastName,
    coach.id as coach_Id
     FROM paticiepents as ptp 
     LEFT OUTER JOIN `units` as un
     ON ptp.unitId = un.id
     LEFT OUTER JOIN sport_ranks as sprt
     ON ptp.sport_rankId = sprt.id
     LEFT OUTER JOIN suddivranks as sud
     on ptp.suddiv_rankId = sud.id
     LEFT OUTER JOIN paticiepents as coach
     ON ptp.coachId = coach.id 
     WHERE un.id like '$unit_id' AND ptp.roleId = 5 
     AND ptp.id = $sportsman_id");
    $myrow = mysqli_fetch_array($result); 
    $img_src = $_SERVER['DOCUMENT_ROOT'] . "" . $myrow['img'];
    $id = $myrow['id'];
    $lastName = str_replace("\"", "''", $myrow['lastName']);
    $firstName = str_replace("\"", "''", $myrow['firstName']);
    $description = str_replace("\"", "''", $myrow['description']);
    $secondName = str_replace("\"", "''", $myrow['secondName']);
    $sport_rankId =  $myrow['sport_rankId'];
    $suddiv_rankId = $myrow['suddiv_rankId'];
    $unitId = $myrow['unitId'];
    $coach_Id = $myrow['coach_Id'];
    $role_Id = $myrow['role_Id'];
    $birthday = $myrow['birthday'];
    $identCode = $myrow['identCode'];
    $telephone = $myrow['telephone'];
    $description = $myrow['description'];
    $weight = $myrow["weight"];

    $ranks_row = mysqli_query($db,"SELECT * FROM sport_ranks");
    if (!$ranks_row) { die('Неверный запрос: ' . mysqli_error($db));}
    $ranks = "<select class='form-control' style='width:30%;color:black' id='sport_rankId' name='sport_rankId'> ".
    "<option value=''>-- Оберіть спортивне звання --</option>";
    while ($line = mysqli_fetch_array($ranks_row)) 
        {
             if($sport_rankId == $line['id']) $ranks = $ranks."<option value=".$line['id']." selected>".$line['name']."</option>";
             else $ranks = $ranks."<option value=".$line['id']." >".$line['name']."</option>";
        }
    $ranks = $ranks."</select>";

    $suddiv_row = mysqli_query($db,"SELECT * FROM suddivRanks");
    if (!$suddiv_row) { die('Неверный запрос: ' . mysqli_error($db));}
    $suddiv = "<select class='form-control' style='width:30%;color:black' id='suddiv_rankId' name='suddiv_rankId'> ".
    "<option value=''>-- Оберіть суддівську категорію --</option>";
    while ($line = mysqli_fetch_array($suddiv_row)) 
        {
             if($suddiv_rankId == $line['id']) $suddiv = $suddiv."<option value=".$line['id']." selected>".$line['name']."</option>";
             else $suddiv = $suddiv."<option value=".$line['id']." >".$line['name']."</option>";
        }
    $suddiv = $suddiv."</select>";

    $coach_row = mysqli_query($db,"SELECT * FROM paticiepents where coach = 1 ");
    if (!$coach_row) { die('Неверный запрос: ' . mysqli_error($db));}
    $coaches = "<select class='form-control' style='width:30%;color:black' id='coachId' name='coachId'> ".
    "<option value=''>-- Оберіть тренера --</option>;<option value='0'>-- Не має тренера --</option>";
    while ($line = mysqli_fetch_array($coach_row)) 
        {
             if($coach_Id == $line['id']) $coaches = $coaches."<option value=".$line['id']." selected>".$line['firstName']." ".$line['lastName']."</option>";
             else $coaches = $coaches."<option value=".$line['id']." >".$line['firstName']." ".$line['lastName']."</option>";
        }
    $coaches = $coaches."</select>";

    $roles_row = mysqli_query($db,"SELECT * FROM roles where id=5 or id=6");
    if (!$roles_row) { die('Неверный запрос: ' . mysqli_error($db));}
    $roles = "<select class='form-control' style='width:30%;color:black' id='roleId' name='roleId' required> ".
    "<option value=''>-- Оберіть роль --</option>;";
    while ($line = mysqli_fetch_array($roles_row)) 
        {
             if($role_Id == $line['id']) $roles = $roles."<option value=".$line['id']." selected>".$line['description']."</option>";
             else $roles = $roles."<option value=".$line['id']." >".$line['description']."</option>";
        }
    $roles = $roles."</select>";

    $units_userRow = mysqli_query($db,"SELECT * FROM units");
    if (!$units_userRow) { die('Неверный запрос: ' . mysqli_error($db));}
    $unitsUser = "<select class='form-control' style='width:30%;color:black' id='unitId' name='unitId' required> ".
    "<option value=''>-- Оберіть підрозділ --</option>;";
    while ($line = mysqli_fetch_array($units_userRow)) 
        {
            if($unitId == $line['id']) $unitsUser = $unitsUser."<option value=".$line['id']." selected>".$line['region']."</option>";
            else $unitsUser = $unitsUser."<option value=".$line['id']." >".$line['region']."</option>";
        }
    $unitsUser = $unitsUser."</select>";
 ?>
<h1><?echo $myrow["name"]  ?></h1>
<div style='width:50%; text-align:center'>
    <img style='width:150px' src='../<?echo $myrow["img"]  ?>' alt='../<? echo $myrow["img"]  ?>' />
</div>
<br><br>
<form name='form1' method='post' action='handler.php' enctype='multipart/form-data'>
    <input type='hidden' name='handler'  id='handler' value='edit_sportsman'/>    
    <table class="table">
    <tr>
    <td class="table_tr1">Прізвище</td>
       <td><input value='<?echo $firstName; ?>' name='firstName' id='firstName' rows='1' class='form-control' required></input></td>
    </tr>
    <tr>
       <td>Ім`я</td>
       <td><input value='<?echo $lastName; ?>' name='lastName' id='lastName' rows='1' class='form-control' required></input></td>
    </tr>
    <tr>
       <td>По-батькові</td>
       <td><input value='<?echo $secondName; ?>' name='secondName' id='secondName'  rows='1' class='form-control' required></input></td>
    </tr>
    <tr>
        <td>Статус в федерації</td>
        <td><?php echo $roles; ?><br></td>
    </tr>
    <tr>
       <td>Дата народження</td>
       <td><input type='date' value='<?echo $birthday; ?>'  name='birthday' id='birthday' rows='1' class='form-control' required></input></td>
    </tr>
    <tr>
       <td>Вага</td>
       <td><input value='<?echo $weight; ?>' name='weight' id='weight'  cols='10' rows='1' class='form-control' required></input></td>
    </tr>
    <tr>
        <td>Підрозділ</td>
        <td><?php echo $unitsUser; ?><br></td>
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
    <td><input value="1" type='checkbox' name='ztu' id='ztu' class="radio-inline" <?php echo $myrow['ztu']==1 ? 'checked' : ''; ?>></input></td>
   
 </tr>
 <tr>
    <td>Чи є інструктором </td>
    <td><input value="1" type='checkbox' name='coach' id='coach' class="radio-inline" <?php echo $myrow['coach']==1 ? 'checked' : ''; ?>></input></td>
 </tr>  
    <tr>
       <td>Ідентифікаційний код </td>
       <td><input value="<?php echo $identCode ?>" name='identCode' id='identCode' class='form-control' required></input></td>
    </tr>
    <tr>
       <td>Телефон</td>
       <td><input value="<?php echo $telephone ?>" name='telephone' id='telephone' class='form-control' required></input></td>
    </tr>
    <tr>
       <td>Примітки</td>
       <td><input value="<?php echo $description ?>" name='description' id='description' class='form-control' ></input></td>
    </tr>                         
  <tr>
  </table>
   
    <p>
      <label>Картинка (310x310)&nbsp; лише формат .png  </label>   
      <input type='file' name='myfile' id='myfile' />        
    </p>
    <input name='id' type="hidden" value="<?php echo $id; ?>"><br>
     <p>
      <label>
      <input type="submit" name='submit' id='submit' value="Зберегти зміни">
      </label>
    </p>
  </form>
<?
}
?>

  

