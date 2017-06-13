<!DOCTYPE html>
<html lang="en">
  <head>   
    <title>Фото</title>
    <?php include("blocks/header_links.php") ;?>
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
               $(window).load(function(){   
                  document.getElementById("header_media").className = 'active';          
             }); 
      </script>
	</header>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="index.html">Головна</a></li>
				<li>Фото</li>			
			</div>		
		</div>	
	</div>
	
	<section id="portfolio">	
        <div class="container">
            <div class="center">
               <p>Пропунуємо Вашій увазі <b>фото-галерею</b> Всеукраїнської Федерації Військово-спортивних багатоборств</p>
            </div>

            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">Усі альбоми</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".html">Змагання</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".joomla">Збори</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".wordpress">Семінари</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".drupal">Атестації</a></li>
            </ul><!--/#portfolio-filter-->
		</div>
</p><p>
		<div class="container">
            <div style="text-align:center;">
                <div class="portfolio-items">
            <!--apps(усі) html(змагання) wordpress(семінари) joomla(збори)  bootstrap-->

    <? include("blocks/db.php");
       if ($result = mysqli_query($db, 'SELECT * FROM news ORDER BY id')) 
	   {
           while( $myrow = mysqli_fetch_assoc($result) )
		   {
               if ($myrow['category_id']=="1") $category="html";
               if ($myrow['category_id']=="2") $category="joomla";
               if ($myrow['category_id']=="3") $category="wordpress";
               if ($myrow['category_id']=="4") $category="drupal";
               

             printf(" <div class='portfolio-item %s col-xs-12 col-sm-4 col-md-3'>
                          <div class='recent-work-wrap'>
                            <a target='_blank' class='news_link' href='gallery.php?id=%s' rel=''>
                              <img class='img-responsive' src='images/news/%s.png' alt=''>
                              <div class='overlay'>
                                <div class='recent-work-inner'>
                                    <h4>%s</h4>
                                    <p>%s</p>
                                </div> 
                              </div>
                            </a>
                        </div>
                    </div>", $category, $myrow['id'], $myrow['id'], $myrow['title'], $myrow['description']);
             } 
           mysqli_free_result($result); 
	   }
	   mysqli_close($db); 
	?>
               
                    <!--<div class="portfolio-item html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <a class="news_link" href="#" rel="">
                            <img class="img-responsive" src="images/news/1.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h4>Чемпіонат України 2017</h4>
                                    <p>12-14 травня 2017 у м. Харкові пройшов Чемпіонат України</p>
                                </div> 
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="portfolio-item html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item2.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Чемпіонат світу 2016</a></h3>
                                    <p>З 18 по 20 листопада 2016 року в місті Харкові відбувся 11-й Чемпіонат Світу</p>
                                </div> 
                            </div>
                        </div>          
                    </div>

                     <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item6.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Національний семінар 2016</a></h3>
                                    <p>28 серпня 2016 року у м.Харькові було проведено Національний семінар для Інструкторів по ВСБ</p>
                                </div> 
                            </div>
                        </div>         
                    </div>

                    <div class="portfolio-item html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item3.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Кубок України 2016</a></h3>
                                    <p>8 жовтня 2016 в м. Одеса відбувся Кубок України пам`яті Героя України Генерал-майора Кульчицького Сергія Петровича</p>
                                    <a class="preview" href="images/portfolio/full/item3.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>        
                    </div>

                    <div class="portfolio-item joomla col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item4.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Національні літні збори 2016</a></h3>
                                    <p>В Херсонській області смт.Лазурне було провдено 10-дені національні збори</p>
                                    <a class="preview" href="images/portfolio/full/item4.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>           
                    </div>
          
                    <div class="portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item5.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="images/portfolio/full/item5.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>      
                    </div>                   

                    <div class="portfolio-item wordpress html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item7.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="images/portfolio/full/item7.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div>

                    <div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item8.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="images/portfolio/full/item8.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div>-->

                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->
	

	<footer>
		 <? include("blocks/footer.php"); ?>
	</footer>
</body>
</html>