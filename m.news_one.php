<!DOCTYPE html>
<html lang="en">
<head>
  <title>Новини</title>
  <link href="css/mobile.css" rel="stylesheet" />  
    <?php include("blocks/header_links.php") ;?>
    <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" media="screen" />
    <script type="text/javascript" src="fancybox/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="fancybox/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="fancybox/jquery.fancybox-1.2.1.pack.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a.gallery").fancybox();
      });

      $("a.gallery2").fancybox(
			{						
          "padding" : 20,
          "imageScale" : false, 
			"zoomOpacity" : false,
			"zoomSpeedIn" : 1000,	
			"zoomSpeedOut" : 1000,	
			"zoomSpeedChange" : 1000, 
			"frameWidth" : 700,	 
			"frameHeight" : 600, 
			"overlayShow" : true, 
			"overlayOpacity" : 0.8,	
			"hideOnContentClick" :false,
			"centerOnScroll" : true
				
			});
    </script>

</head>

<body>
  <header>
    <?php include("blocks/header.php"); ?>
      <script>
        function showStatus() {
          var el = document.getElementById('status');
          var display = getComputedStyle(el).display;
          el.style.display = display === 'none' ? 'block' : 'none';
        }
        $(window).load(function() {
          document.getElementById("header_news").className = 'active';
        });
      </script>

<?
include("blocks/db.php");
include("blocks/myclass.php");
$id = isset($_GET["id"]) ? $_GET["id"] : "%" ;
if(isset($_GET["id"])) $nws_name = Db::GetNewsName($id);
?>
  </header>

  <div id="breadcrumb-mobile">
    <div class="container">
      <div class="breadcrumb-mobile">
          <ul>
        <li><a href="index.php">Головна</a></li>
        <li>Новини | <? echo $nws_name; ?></li> 
    </ul>      
      </div>
    </div>
  </div>

  <section id="blog" class="container">
    <div class="blog">
      <div class="row">
        <div class="col-lg-12">
          <h1 style='color:black;text-align:center'><? echo $nws_name; ?></h1>
          <br>
<? 
    if ($result = mysqli_query($db, "SELECT *, DATE_FORMAT(date_,'%d.%m.%Y') as eurodate FROM `news` WHERE id LIKE '$id' LIMIT 1")) 
	   {
          $myrow = mysqli_fetch_assoc($result);
		  printf("<div class='blog-item'>
                        <div class='row'>   
                            <div class='col-xs-12 col-sm-12 blog-content'>
                               <div style='color:black;font-size:16px; margin-bottom:30px; '>%s</div>
                               <span id='publish_date'>%s</span>
                               <span><i class='fa'>#</i><a href='#'><b>%s</b></a></span>                                    
                               <span><i class='fa fa-user'></i> <a href='#'>Адміністратор</a></span>
                               <span><i class='fa fa-comment'></i> <a href='#'>0 Коментарів</a></span>
                            </div>
                        </div>    
                    </div>",  $myrow['text_'], $myrow['eurodate'], $myrow['name'] );
           mysqli_free_result($result); 
	   }
	//    mysqli_close($db); 
	?>


<h2 style='color:black;text-align:center'>Фото</h1>
<div style="text-align:center;">
<?php
        $dir = "images/news/".$id."/"; // Папка с изображениями
        $files = scandir($dir); // Берём всё содержимое директории
        echo "";
        $k = 0; // Вспомогательный счётчик для перехода на новые строки
        for ($i = 0; $i < count($files); $i++) { // Перебираем все файлы
            if (($files[$i] != ".") && ($files[$i] != "..")) { // Текущий каталог и родительский пропускаем
                $path = $dir.$files[$i]; // Получаем путь к картинке
                echo "<a style='margin-top:150px;' class='gallery'  rel='group' title='фото номер $k' href='$path'>
                <img style='height:180px; width:260px; margin:20px 20px 0 0' src='$path' />
                </a>";
                $k++; // Увеличиваем вспомогательный счётчик
            }
        }
?>
</div>
            <br>
            <br>
        </div>
        <!--/.row-->
      </div>
  </section>
  <!--/#blog-->

  <footer>
     <? include("blocks/m.footer.php"); ?>
</footer>
</body>

</html>