<!DOCTYPE html>
<html lang="en">

<head>
  <title>Події</title>
  <?php include("blocks/header_links.php") ;?>
    <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" media="screen" />
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

      <?
include("blocks/db.php");
include("blocks/myclass.php");
$id = isset($_GET["id"]) ? $_GET["id"] : "%" ;
if(isset($_GET["id"])) $nws_name = Db::GetEventsName($id);
?>
  </header>

  <div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="index.html">Головна</a></li>
        <li>Події</li>
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

<? 
    if ($result = mysqli_query($db, "SELECT *, DATE_FORMAT(date_,'%d.%m.%Y') as eurodate FROM `events` WHERE id LIKE '$id' LIMIT 1")) 
	   {
          $myrow = mysqli_fetch_assoc($result);
		  printf("<div class='blog-item'>
                        <div class='row'>   
                            <div class='col-xs-12 col-sm-12 blog-content'>
                            <img style='float: left; width:300px; margin: 0px 20px 10px 0px;' src='images/events/%s.png'>
                               <div style='color:black;font-size:16px; margin-bottom:30px; '>%s</div>
                               <span id='publish_date'>%s</span>
                               <span><i class='fa'>#</i><a href='#'><b>%s</b></a></span>                                    
                               <span><i class='fa fa-user'></i> <a href='#'>Адміністратор</a></span>
                               <span><i class='fa fa-comment'></i> <a href='#'>0 Коментарів</a></span>
                               <span><i class='fa fa-heart'></i><a href='#'>0 Likes</a></span>
                            </div>
                        </div>    
                    </div>",  $myrow['id'], $myrow['text_'], $myrow['eurodate'], $myrow['name'] );
           mysqli_free_result($result); 
	   }
	//    mysqli_close($db); 
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