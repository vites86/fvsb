<?php 
if (isset($_POST['unitId'])) {$unit_id = $_POST['unitId'];} 
$current_page="paticiepents.php";
include ("blocks/start.php");
// include ("blocks/php.php");
?>
<style>
table th,td {
    text-align:center;
    /* margin-top:0px;
    margin-bottom:0px; */
    vertical-align: middle;
    vertical-align: middle;
}
.table>thead>tr>th {
    vertical-align: middle !important;    
}
.table>tbody>tr>td {
    vertical-align: middle !important;    
}
table img{
    text-align:center;
    width:100%
}
</style>
<!doctype html>
<html class="no-js">
  <head>
    <meta charset="UTF-8">
    <title>Керівники відокремлених підрозділів Федерації</title>
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include ("blocks/links.php"); ?>
  </head>
  <body class="  ">
    <div class="bg-dark dk" id="wrap">
      <div id="top">       
        <?php include ("blocks/nav_bar.php"); ?>       
        <header class="head">          
          <div class="main-bar" style="text-align:center; padding-right: 100px;">
            <h3><i class="fa fa-home"></i>&nbsp; ВФВСБ | MSAC</h3>
          </div>
        </header>
      </div>
       <?php include ("blocks/left.php"); ?>   
      <div id="content">
        <div class="outer">
          <div class="inner bg-light lter">
            <div class="col-lg-12">
              <div style="width:100%;text-align:center;">
              <h2>Члени Федерації</h2><br>

<form action="paticiepents.php" method="post" enctype="multipart/form-data">
<div class="form-inline">
<?
    $units_row = mysqli_query($db,"SELECT * FROM units");
    if (!$units_row) { die('Неверный запрос: ' . mysqli_error($db));}
    $units = "<select class='form-control' style='width:30%;color:black' id='unitId' name='unitId' required> ".
    "<option value=''>-- Оберіть підрозділ --</option>;<option value='%'>-- Усі підрозділи --</option>";
    while ($line = mysqli_fetch_array($units_row)) 
        {
             $units = $units."<option value=".$line['id']." >".$line['region']."</option>";
        }
    $units = $units."</select>";
    echo $units;
?>
 <input type="submit" value="Відібрати" class='btn'><br><br></td>
 </div>
</form>

              <table class="table table-hover active table-bordered">
              <thead>
               <tr>
                <th style="width:10%;">Фото</th>
                <th> ПІБ</th>
                <th> Дата народження</th>
                <th> Підрозділ</th>
                <th> Тренер</th>
                <th> Вага</th>
                <th> Спорт звання</th>
                <th> Суддівська категорія</th>
                <th> Інструктор</th>
                <th> Телефон</th>
                <th> Ідентиф код</th>
                <th> Примітки</th>      
               </tr>   
              </thead>  
              <tbody>    
                    <?php 
                    if (!isset($unit_id))
                    {
                      $unit_id = "%";
                    }

                         $result = mysqli_query($db, "SELECT ptp.img, ptp.firstName,ptp.lastName,ptp.secondName,
                         ptp.weight,
                         ptp.ztu,
                         DATE_FORMAT(ptp.birthday,'%Y.%m.%d') as birthday,
                         ptp.coach,
                         ptp.description,
                         ptp.telephone,
                         ptp.identCode,
                         un.region as unit, 
                         sprt.name as sport_rank, 
                         sud.name as suddiv_rank, 
                         coach.firstName as coachName, coach.lastName as coachlastName
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
                          ORDER BY ptp.firstName");
                          $myrow = mysqli_fetch_array($result); 
                          do 
                          {
                                  printf("
                                  <tr>
                                      <td ><img src='../%s' class=''/></td>
                                      <td>%s %s %s</td>
                                      <td>%s</td>
                                      <td>%s</td>
                                      <td>%s %s</td>
                                      <td>%s</td>
                                      <td>%s</td>
                                      <td>%s</td>
                                      <td>%s</td>
                                      <td>%s</td>
                                      <td>%s</td>
                                      <td>%s</td>
                                  </tr>", 
                                  $myrow['img'],
                                  $myrow['firstName'],
                                  $myrow['lastName'],
                                  $myrow['secondName'],
                                  $myrow['birthday'],
                                  $myrow['unit'],
                                  $myrow['coachName'],
                                  $myrow['coachlastName'],
                                  $myrow['weight'],                                  
                                  $myrow['sport_rank'],
                                  $myrow['suddiv_rank'],                                  
                                  $myrow['coach'] == 1 ? "так" : "ні",
                                  $myrow['telephone'],
                                  $myrow['identCode'],
                                  $myrow['description']);
                          }while( $myrow = mysqli_fetch_assoc($result));      
                    ?>   
                    </tbody>               
                </table>                     
              </div>        
                       <br><br><br><br><br><br>
                       <br><br><br><br><br><br>
            </div>
          </div><!-- /.inner -->
        </div><!-- /.outer -->
      </div><!-- /#content -->      
    </div><!-- /#wrap -->
    <footer class="Footer bg-dark dker">
      <p>2016 &copy; VDStudio Admin Template</p>
    </footer><!-- /#footer -->  
   <?php include ("blocks/scripts.php"); ?> 
  </body>