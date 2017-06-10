      <!--<div  class='col-md-4 wow fadeInDown align_cntr' data-wow-duration='1000ms' data-wow-delay='300ms'>
        <a href='news.php?id=1'>
          <img src='images/news/1.png' class='img-responsive' style='width:100%;' />
          <h3>Чемпіонат України 2017 року</h3>
          <p>З 12.05.2017 по 14.05.2107 в м.Харків проводився Чемпіонат України з військово-спортивних багатоборств, розділ 'Бойове двоборство'.
          </p>
        </a>
      </div>

      <div class='col-md-4 wow fadeInDown' data-wow-duration='1000ms' data-wow-delay='300ms'>
        <a href='news.php?id=1'>
        <img src='images/news/2.png' class='img-responsive' style='width:100%;'/>
        <h3>Технічні поясові атестації 2017 року</h3>
        <p>З 03.06.2017 в усіх відокремлених підрозділах 'ВФВСБ' проводились технічні поясові атестації.
        </p>
        </a>
      </div>

      <div class='col-md-4 wow fadeInDown' data-wow-duration='1000ms' data-wow-delay='300ms'>
        <a href='news.php?id=1'>
        <img src='images/news/3.png' class='img-responsive' style='width:100%;'/>
        <h3>Літні табори 2017 року</h3>
        <p>Ряд відокремлених підрозділів 'ВФВСБ' запрошує спортсменів взяти участь у літніх спортивних таборах по всій території України.
        </p>
        </a>        
      </div>-->

      <? 
       include('blocks/db.php');
       if ($result = mysqli_query($db, 'SELECT * FROM news ORDER BY date_ desc limit 3')) 
	     {
         while( $myrow = mysqli_fetch_assoc($result) )
	       {
           printf("
           <div class='col-md-4 wow fadeInDown' data-wow-duration='1000ms' data-wow-delay='300ms'>
             <a href='news_one.php?id=%s'>
               <img src='images/news/%s.png' class='img-responsive' style='width:100%%;'/>
               <h3>%s</h3>
               <p>%s</p>
             </a>        
           </div>", $myrow['id'], $myrow['id'], $myrow['title'], $myrow['description']);
               } 
             mysqli_free_result($result); 
	       }
	       mysqli_close($db); 
	?>