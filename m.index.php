<!DOCTYPE html>
<html lang="en">
<head>
  <title>ВСБ</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
	<link href="css/mobile.css" rel="stylesheet" />
	<?php include("blocks/header_links.php") ;?>
</head>
<body>
  <header>
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navigation">
		<div class="container">					
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="navbar-brand">
					<a href="index.html"><h1><span></span></h1></a> 
				</div>
			</div>
			
			<div class="navbar-collapse collapse">							
				<div class="menu">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation"><a id="header_index"     href="../index.php">Головна</a></li>
						<li role="presentation"><a id="header_about"     href="../about.php">Про нас</a></li>
						<li role="presentation"><a id="header_units"     href="../units.php">Підрозділи</a></li>	
						<li role="presentation"><a id="header_docs"      href="../docs.php">Документи</a></li>
						<li role="presentation"><a id="header_news"      href="../news.php">Новини</a></li>							
						<li role="presentation"><a id="header_media"     href="../media.php">Фото</a></li>
						<li role="presentation"><a id="header_events"     href="../events.php">Події</a></li>						
						<li role="presentation"><a id="header_contact"   href="../contacts.php">Контакти</a></li>						
					</ul>					
				</div>
			</div>						
		</div>
	</div>	
</nav>		
      <script>                                
               $(window).load(function(){   
                  document.getElementById("header_index").className = 'active';          
             }); 
      </script>
  </header>
  <section id="main-slider" class="no-margin">
    <div class="carousel slide">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
          <div class="container">
            <div class="row slide-margin">
              <div class="col-sm-12">
                <div class="carousel-content-mobile" style="text-align:center !important;text-shadow: grey 1px 2px 3px;">
                  <p class="animation animated-item-1">громадська організація</p>
                  <h2 class="animation animated-item-1" style="color:white !important;">Всеукраїнська <span>Федерація</span></h2>
                  <p class="animation animated-item-2"style="color:white !important; ">військово-спортивних багатоборств</p>
                  <img style="width:30%;" src="images/logo.png" />
                  <br>
                  <br>
                  <span id=''>
                     08.10.2010 року ВФВСБ наказом № 3531 Міністерства України у справах молоді, сім'ї та спорту присвоєно статус <b>«Національної»</b>
                  </span>
                  <hr>
                  <ul style="list-style-type:none; text-align:left;">
                      <li>- Заслужених тренерів України - 9 осіб;</li>
                      <li>- Майстрів спорту міжнародного класу - 20 осіб;</li>
                      <li>- Майстрів спорту України - 200 осіб;</li>
                      <li>- Велика кількість спортсменів розрядників.          </li>
                      <li>- Суддів міжнародної категорії - 10 осіб;</li>
                      <li>- Суддів Національної категорії - 9 осіб;</li>
                      <li>- Суддів 1-3 категорій - більше 150 осіб.</li>
                      </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/.item-->
      </div>
      <!--/.carousel-inner-->
    </div>
    <!--/.carousel-->
  </section>
  <!--/#main-slider-->
<div class="row">
   <div class="col-sm-12 text-center">
           <div style="color: black; padding: 10px 0 0 5px;">"
              <b> Військово-спортивні багатоборства"</b> (далі ВСБ) - це спортивно-технічний і прикладний вид спорту, 
              створений в кінці 90-х років в Україні. 
              Входить до "Переліку видів спорту, що визнані в Україні" та є неоліпійським видом спорту.
              <a href="https://uk.wikipedia.org/wiki/Військово-спортивні_багатоборства">(Вікіпедія)</a>
           </div>
   </div>
</div>
<div class="row">
    <div class="col-sm-12 text-justify">
      <div class="text-center">   
            <div>           
                <span style="color: black; font-weight:bold; text-transform: uppercase;"><br>Включає в себе:</span>
            </div>
            <h2>Військово-прикладне семиборствo:</h2>
            <ul type="none" style="color:black; text-align: left;">
              <li> плавання 50 метрів</li>
              <li> стрільба</li>
              <li> біг на 100 та 3000 м</li>
              <li> підтягування на перекладені</li>
              <li> подолання смуги перешкод</li>
              <li> метання імітаційних гранат</li>
            </ul>

            <h2>Бойове двоборство:</h2>
            <ul type="none" style="color:black; text-align: left; ">
              <li> Всестильовий бій (володіння прийомами за допомогою ударної і 
                     кидкової техніки з використанням елементів боротьби, боксу та східних 
                     єдиноборств (карате та ін.)).</li>
              <li> Стрільба з пневматичної гвинтівки.</li>             
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>  

  <div class="lates-mobile">
    <div class="container" style="text-align:center">
      <div class="text-center">
          <hr style="color:black !importent; height:3px;">        
          <h2>Останні Новини</h2>
      </div>
      <? 
       include('blocks/db.php');
       if ($result = mysqli_query($db, 'SELECT * FROM news ORDER BY date_ desc limit 3')) 
	     {
         while( $myrow = mysqli_fetch_assoc($result) )
	       {
           printf("
           <div class='col-sm-12'>
             <a target='_blank' href='news_one.php?id=%s'>
               <img src='images/news/%s.png' class='img-responsive' style='width:100%%;'/>
               <h3>%s</h3>
               <p>%s</p>
               <input type='button' value='Детальніше' 
               class='btn-slide animation animated-item-3 btn btn-success' href='news_one.php?id=%s'></input>               
             </a>        
           </div><hr>", $myrow['id'], $myrow['id'], $myrow['title'], $myrow['description'], $myrow['id']);
               } 
             mysqli_free_result($result); 
	       }
	       mysqli_close($db); 
?>
    </div>
  </div>

  <section id="partner-mobile">    
      <div class="center">
        <h2>Наші підрозділи</h2>
        <p>В даний час ВФВСБ має свої структурні підрозділи в 17 областях України.</p>
      </div>
      <div class="partners-mobile">
        <ul style="" class="">
        <li>
                 - <a href="units.php#tnp">Тернопільська область</a>
            <br> - <a href="units.php#chk">Черкаська область</a>
            <br> - <a href="units.php#lv">Львівська область</a>            
            <br> - <a href="units.php#od">Одесська область</a>           
            <br> - <a href="units.php#lg">Луганська область </a>
            <br> - <a href="units.php#khv">Харьківська область</a>
            <br> - <a href="#">Донецька область</a>
            <br> - <a href="units.php#khm">Хмельницька область</a>
            <br> - <a href="units.php#dnr">Дніпропетровська область</a>
            <br> - <a href="units.php#sm">Сумська область</a>
            <br> - <a href="#">Чернігівська область</a>
            <br> - <a href="/units.php#krg">Кропивницька область</a>
            <br> - <a href="/units.php#khs">Херсонська область</a>
            <br> - <a href="/units.php#zht">Житомирська область</a>
            <br> - <a href="/units.php#pl">Полтавська область </a>
            <br> - <a href="/units.php#zp">Запорізька область</a>
            <br> - <a href="/units.php#kv">Київська область </a>
            <br>
          </li>
        </ul>    
    </div>
    <!--/.container-->
  </section>
  <!--/#partner-->

  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="center">
              <br>
            <h2>Анонс подій</h2>
            <div class="tt-panel" style="display: block;text-align:center">             
                <? 
                     include('blocks/db.php');
                     if ($result = mysqli_query($db, "SELECT *, DATE_FORMAT(date_,'%d.%m.%Y') as eurodate FROM events where date_ > NOW() ORDER BY date_")) 
	                   {
                       while( $myrow = mysqli_fetch_assoc($result) )
	                     {
                         printf("  
                         <div class='col-sm-12'>
                           <a target='_blank' href='events_one.php?id=%s'>
                             <img src='images/events/%s.png' class='img-responsive' style='width:100%%;'/>
                             <h3>%s</h3>
                             <p><b>Дата проведення</b>: %s</p>
                             <p><b>Місце</b>: %s</p>
                             <input type='button' value='Детальніше' 
                             class='btn-slide animation animated-item-3 btn btn-success' href='events_one.php?id=%s'></input>               
                           </a>      
                         </div><hr>
                         ", $myrow['id'], $myrow['id'], $myrow['title'], $myrow['eurodate'], $myrow['place'], $myrow['id']);
                             } 
                           mysqli_free_result($result); 
	                     }
	                    //  mysqli_close($db); 
                ?>             

              </ul>
            </div>
          </div>
        </div>
        </div>
    </div>
    <!--/.container-->
  </section>
  <!--/#conatcat-info-->
            <div class="container" style="background-color: lightgrey; padding-top:15px;">
               <div class="row">
                 <div class="col-sm-12">
                   <div class="center">
                     <h2>Контакти</h2>                     
                     <div style="color:black; list-style-type:none; text-align:center;" >
                       <li><b>Президент федерації</b>: <br>Зайцев Сергій Васильович</li>
                       <li><img src="images/zaicev2.png" style="width:20%;" alt=""></li>
                       <li><b>тел.</b>: (063) 119 57 15</li>
                       <li><b>email</b>: president.fvsb@gmail.com</li>
                       <li><b>адреса</b>: м. Харків</li>
                     </div>
                   </div>
                 </div>
              </div>
            </div>


  <footer>
     <? include("blocks/m.footer.php"); ?>
  </footer>

</body>
</html>