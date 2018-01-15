<?php
include("blocks/db.php");
include("blocks/myclass.php");
$id = isset($_GET["id"]) ? $_GET["id"] : "%" ;
if(isset($_GET["id"])) $nws_name = Db::GetEventsName($id);

  $result = mysqli_query($db, "SELECT *, DATE_FORMAT(date_,'%d.%m.%Y') as eurodate FROM `events` WHERE id LIKE '$id' LIMIT 1");
  $myrow = mysqli_fetch_assoc($result);
  $id = $myrow['id'];
  $img= $myrow['img'];
  $eurodate = $myrow['eurodate'];
  $time_span = $myrow['time_span'];
  $adress = $myrow['adress'];
  $start_time = $myrow['start_time'];
  $finish_time = $myrow['finish_time'];
  $text_ = $myrow['text_'];
  $name = $myrow['name'];
  $meta_k= $myrow['meta_k'];
  $meta_d= $myrow['meta_d'];
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title><?php echo $nws_name; ?></title>
    <meta name="keywords" content="<?php echo $meta_k; ?>">
    <meta name="description" content="<?php echo $meta_d; ?>">
    <?php include("blocks/header_links.php") ;?>
    <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" media="screen" />
    <link href="css/mobile.css" rel="stylesheet" />
    <script type="text/javascript" src="fancybox/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="fancybox/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="fancybox/jquery.fancybox-1.2.1.pack.js"></script>
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
            document.getElementById("header_events").className = 'active';
          });
        </script>
    </header>

    <div id="breadcrumb-mobile">
      <div class="container">
        <div class="breadcrumb-mobile">
            <ul>
          <li><a href="index.php">Головна</a></li>
          <li>Події | <? echo $nws_name; ?></li> 
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
                printf("<div class='blog-item'>
                <div class='row'>
                <div class='col-xs-12 col-sm-12 blog-content'>
                <img style='float: left; width:100%%;margin-bottom:10px;' src='%s'>
                <div style='color:black;font-size:16px; margin-bottom:30px;'>                
                <span><b>Дата</b>: %s року<br></span>
                <span><b>Tривалість</b>: %s  днів(дні)<br></span>
                <span><b>Місце проведення</b>: %s<br></span>
                <span><b>Початок </b>: в %s</b> <br></span>
                <span><b>Закінчення</b>: приблизно %s</span>
                <br><br><br><br>
                %s
                <hr>
                </div>
                <span id='publish_date'>%s</span>
                <span><i class='fa'>#</i><a href='#'><b>%s</b></a></span>
                <span><i class='fa fa-user'></i> <a href='#'>Адміністратор</a></span>
                <span><i class='fa fa-comment'></i> <a href='#'>0 Коментарів</a></span>                
                </div>
                </div>
                </div>",  $img, $eurodate, $time_span, $adress, $start_time, $finish_time, $text_, $eurodate, $name );
                mysqli_free_result($result);
            //  mysqli_close($db);
            ?>
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