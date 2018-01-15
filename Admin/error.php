<?php 
$current_page="error.php"; 
include ("blocks/start.php");
include ("blocks/php.php");
?>
<!doctype html>
<html class="no-js">
  <head>
    <meta charset="UTF-8">
    <title>Помилка</title>
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
            <h3><i class="fa fa-home"></i>&nbsp; Наш Рідний Край</h3>
          </div>
        </header>
      </div>
       <?php include ("blocks/left.php"); ?>   
      <div id="content">
        <div class="outer">
          <div class="inner bg-light lter">
            <div class="col-lg-12">
              <div style="width:100%;text-align:center;">
                 <form action="handler.php" method="post" enctype="multipart/form-data">
                     <h1>Упс! Помилочка! </h1>
                     <img src="assets/img/error.jpg" style="width: 50%;"/><br><br>
                     <div>
                       <label style="width:100%; text-align: center;">                      
                       <span style="color:red;"><?php echo isset($_GET["error"]) ? $_GET["error"] : ""; ?></span>   
                       <h3>Повідомте адміністратора сайту про дану помилку!</h3> <br><br>                   
                       </label> 
                     </div>
                     <?php 
                           $error = isset($_GET['error']) ? $_GET['error'] : '';
                           echo "<input type='hidden' name='admin_error_message'  id='admin_error_message' value='$error'/>"  
                     ?>                    
                     <input type="hidden" name="handler"  id="handler" value="admin_error_message"/>
                     <div><input type="submit" value="Повідомити"></div><br><br></td>
               </form>
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