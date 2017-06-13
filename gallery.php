<!DOCTYPE html>
<html lang="en">

<head>
  <title>Галерея</title>
  <?php include("blocks/header_links.php") ;?>
    <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" media="screen" />
    <script type="text/javascript" src="fancybox/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="fancybox/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="fancybox/jquery.fancybox-1.2.1.pack.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a.gallery").fancybox();
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
          // alert("08.10.2010 року ВФВСБ наказом № 3531 Міністерства України у справах молоді, сім'ї та спорту присвоєно статус <b>«Національної»</b>", this);
        }
        $(window).load(function() {
          document.getElementById("header_media").className = 'active';
        });
      </script>

<?
    include("blocks/db.php");
    include("blocks/myclass.php");
    $id = isset($_GET["id"]) ? $_GET["id"] : "%" ;
    if(isset($_GET["id"])) $nws_name = Db::GetNewsName($id);
?>
  </header>

  <div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="index.html">Головна</a></li>
        <li>Галерея</li>
        <li>
          <? echo $nws_name; ?>
        </li>
      </div>
    </div>
  </div>

  <section id="blog" class="container">
    <div class="blog">
      <div class="row">

        <div class="col-lg-12">
          <h1 style='color:black;text-align:center'><? echo $nws_name; ?></h1>
          <br>
<?php
       $dir = "images/news/".$id."/"; // Папка с изображениями
       $files = scandir($dir); // Берём всё содержимое директории
       echo "";
       $k = 0; // Вспомогательный счётчик для перехода на новые строки
       for ($i = 0; $i < count($files); $i++) { // Перебираем все файлы
           if (($files[$i] != ".") && ($files[$i] != "..")) { // Текущий каталог и родительский пропускаем
               $path = $dir.$files[$i]; // Получаем путь к картинке
               echo "<a class='gallery'  rel='group' title='фото номер $k' href='$path'>
               <img style='height:180px; width:260px; margin:20px 20px 0 0' src='$path' />
               </a>";
               $k++; // Увеличиваем вспомогательный счётчик
           }
       }
?>
            <br>
            <br>
        </div>
        <!--/.row-->
      </div>
  </section>
  <!--/#blog-->

  <footer>
    <? include("blocks/footer.php"); ?>
  </footer>
</body>

</html>