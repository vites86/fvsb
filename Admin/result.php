<?php 
$current_page="result.php";
include ("blocks/start.php");
include ("blocks/php.php");
?>
<!doctype html>
<html class="no-js">
  <head>
    <meta charset="UTF-8">
    <title>Результат</title>
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
            <h3><i class="fa fa-home"></i>&nbsp; Київська обласна федерація ВСБ</h3>
          </div>
        </header>
      </div>
       <?php include ("blocks/left.php"); ?>   
      <div id="content">
        <div class="outer">
          <div class="inner bg-light lter">
            <div class="col-lg-12">
              <div style="width:100%;text-align:center;">
                     <h1>Результат виконання! </h1>
                     <img src="assets/img/good.jpeg" style="width: 50%;"/><br><br>
                     <label style="width:100%; text-align: center">                      
                       <span style="color:blue;font-size:3em"><?php echo isset($_GET["result"]) ? $_GET["result"] : ""; ?></span>                       
                     </label> 
              </div>        
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