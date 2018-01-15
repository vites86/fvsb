<?php 
$current_page="test.php";
include ("blocks/php.php"); 
include ("blocks/myclass.php"); 
$id=$_GET["id"];  
if (!isset($id)) { $id = 1; }
?>
<!doctype html>
<html class="no-js">
  <head>
    <meta charset="UTF-8">
    <title>Admin</title>
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
          <div class="main-bar" style="text-align:center">
            <h3><i class="fa fa-home"></i>&nbsp; Наш Рідний Край</h3>
          </div>
        </header>
      </div>
       <?php include ("blocks/left.php"); ?>   
      <div id="content">
        <div class="outer">
          <div class="inner bg-light lter">
            <div class="col-lg-12" >
<?php phpinfo(); ?>          


              
                       
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