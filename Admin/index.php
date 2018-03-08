<?php 
include ("blocks/start.php");
$id = $_GET["id"];  
if (!isset($id)) { $id = 1; }
?>
<!doctype html>
<html class="no-js">
  <head>
    <meta charset="UTF-8">
    <title><?php echo Adminka::getPageTitle($id); ?></title>
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="ckeditor/ckeditor.js"></script>
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
            <h3><i class="fa fa-home"></i>&nbsp;Всеукраїнська федерація ВСБ</h3>
          </div>
        </header>
      </div>
       <?php include ("blocks/left.php"); ?>   
      <div id="content">
        <div class="outer">
          <div class="inner bg-light lter">
            <div class="col-lg-12">
                       <?php                         
                        $result = mysqli_query($db,"SELECT * FROM pages WHERE id=$id");
                        if (!$result) { die('Неверный запрос: ' . mysqli_error($db));}
                        $myrow = mysqli_fetch_array ($result); 
                        do {  
                           printf ("<h1 style='color:green' id='bootstrap-admin-template'>%s</h1>", $myrow['name']); 
                           include ("blocks/".$myrow['src']);                          
                         }
                           while ($myrow = mysqli_fetch_array($result));
                        ?> 
            </div>
          </div><!-- /.inner -->
        </div><!-- /.outer -->
      </div><!-- /#content -->      
    </div><!-- /#wrap -->
    <footer class="Footer bg-dark dker">
      <p>2018 &copy; VDStudio Admin Template</p>
    </footer><!-- /#footer -->  
   <?php include ("blocks/scripts.php"); ?> 
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'text' );
            </script>
  </body>