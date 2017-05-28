<!DOCTYPE html>
<html lang="en">

<head>
  <title>ВСБ</title>
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
              <div class="col-sm-6">
                <div class="carousel-content" style="text-align:center !important;text-shadow: grey 1px 2px 3px;">
                  <p class="animation animated-item-2">громадська організація</p>
                  <h2 class="animation animated-item-1">Всеукраїнська <span>Федерація</span></h2>
                  <p class="animation animated-item-2"style="color:white !important; ">військово-спортивних багатоборств</p>
                  <img style="width:45%;" src="images/logo.png" />
                  <br>
                  <br>
                  <span id='status' style="display:none">08.10.2010 року ВФВСБ наказом № 3531 Міністерства України у справах молоді, сім'ї та спорту присвоєно статус <b>«Національної»</b></span>
                  <input type="button" onclick="showStatus()" value="Статус федерації" class="btn-slide animation animated-item-3 btn btn-success" href="#"></input>
                </div>
              </div>

              <div class="col-sm-6 hidden-xs animation animated-item-4">
                <div class="slider-img">
                  <img style="margin-top: 50px;" src="images/slider/maine_slide.png" class="img-responsive">
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

  <div class="feature">
    <div class="container">
      <div class="text-center">
        <h1 style="color: #1BBD36; font-weight: bold;margin-top: -20px;">Військово - спортивні багатоборства</h1>

        <div class="col-md-6">
          <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <!-- <h2>Бойове двоборство:</h2>
<ul type="none" style="color:black; text-align: left; ">
<li>- стрільба з пневматичної гвинтівки</li>
<li>- всестильовий бій <em style="color: grey">(раціональне поєднання ударів руками, ногами, ліктями, колінами, боротьби(кидки, больові і задушливі прийоми)</em></li>
<li><img style="width: 100%;margin-top: 15px;" src="images/slider/dvoborstvo.png"></li>
</ul> -->
            <img style="width: 100%;margin-top: 15px;" src="images/slider/dvoborstvo.png">

          </div>
        </div>
        <div class="col-md-6">
          <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Військово-прикладне семиборствo:</h2>
            <ul type="none" style="color:black; text-align: left; margin-left: 100px;">
              <li>- плавання 50 метрів</li>
              <li>- стрільба з автомата Калашникова</li>
              <li>- біг на 100 та 3000 м</li>
              <li>- підтягування на перекладені</li>
              <li>- подолання смуги перешкод</li>
              <li>- метання гранат</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="about">
    <div class="container">
      <div class="col-md-6 wow fadeInDown justif" data-wow-duration="1000ms" data-wow-delay="300ms">
        <h2>Про нас</h2>
        <img src="images/world.png" class="img-responsive" />
        <p>Громадська організація "Всеукраїнська Федерація військово-спортивних багатоборств" <b>(ВФВСБ)</b> створена 8 лютого 2000 року на базі Федерації військово-прикладного спорту Харківської області (зареєстрована 31.01.1997)
        </p>
        <p>08.10.2010 року ВФВСБ наказом № 3531 Міністерства України у справах молоді, сім'ї та спорту присвоєно статус <b>«Національної»</b>.
        </p>
        <p>У 2005 році ВФВСБ стала одним із засновників Міжнародного Союзу громадських організацій «Розвитку військово-спортивних багатоборства», президентом якого став <b>Зайцев С.В.</b> (Засновник бойового багатоборства, заслужений тренер України, суддя
          міжнародної категорії, чорний пояс 10 дан, майстер спорту), першим віце-президентом став Федорцов А.П. - Засновник бойового багатоборства, суддя міжнародної категорії, чорний пояс 8 дан), другим віце-президентом став Самсонов В.
        </p>
      </div>

      <div class="col-md-6 wow fadeInDown justif" data-wow-duration="1000ms" data-wow-delay="600ms">
        <h2><br></h2>
        <p>Основна мета діяльності організації – військово-патріотичне виховання дітей та молоді, пропаганда здорового способу життя, підвищення громадянської активності дітей та молоді, забезпечення їх доступу до участі у державотворчих процесах, залучення
          дітей та молоді до культурного життя України та сприяння проведенню державних, народних і традиційних свят за їх участю, сприяння розвитку лідерських якостей у дітей та молоді, сприяння підготовці молоді до служби у лавах Збройних Сил України.</p>
        <p>Спортсмени, які займаються цим видом спорту, мають можливість брати участь:
          <br> - У поясний атестації міжнародної Федерації
          <br> - У районних, обласних, національних, міжнародних змаганнях та отримувати відповідні <b>спортивні розряди</b> і <b>звання</b>
          <br> - У літніх спортивних таборах
          <br> - У військово-патріотичних іграх
          <br>
        </p>
        <p>ВФВСБ на даний момент підготовлені:
          <br> - Заслужених тренерів України - 9 осіб;
          <br> - Майстрів спорту міжнародного класу - 20 осіб;
          <br> - Майстрів спорту України - 200 осіб;
          <br> - І велика кількість спортсменів розрядників.
          <br>
        </p>
        <p>В процесі роботи ВФВСБ були підготовлені:
          <br> - 7 суддів міжнародної категорії;
          <br> - 5 суддів Національної категорії;
          <br> - І більше 150 суддів 1-3 їх категорій.
        </p>
      </div>
    </div>
  </div>

  <div class="lates">
    <div class="container">
      <div class="text-center">
        <h2>Останні Новини</h2>
      </div>
      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <img src="images/news/1.png" class="img-responsive" />
        <h3>Чемпіонат України 2017 року</h3>
        <p>З 12.05.2017 по 14.05.2107 в м.Харків проводився Чемпіонат України з військово-спортивних багатоборств, розділ "Бойове двоборство".
        </p>
      </div>

      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <img src="images/news/1.png" class="img-responsive" />
        <h3>Чемпіонат України 2017 року</h3>
        <p>З 12.05.2017 по 14.05.2107 в м.Харків проводився Чемпіонат України з військово-спортивних багатоборств, розділ "Бойове двоборство".
        </p>
      </div>

      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <img src="images/news/1.png" class="img-responsive" />
        <h3>Чемпіонат України 2017 року</h3>
        <p>З 12.05.2017 по 14.05.2107 в м.Харків проводився Чемпіонат України з військово-спортивних багатоборств, розділ "Бойове двоборство".
        </p>
      </div>
    </div>
  </div>

  <section id="partner">
    <div class="container">
      <div class="center wow fadeInDown">
        <h2>Наші підрозділи</h2>
        <p>В даний час ВФВСБ має свої структурні підрозділи в 15 областях України.</p>
        <br>
        <br>
      </div>

      <div class="partners">
        <ul style="text-align: left" class="regions">
          <li>
            - <a href="units.php#tnp">Тернопільська область</a>
            <br> - <a href="units.php#chk">Черкаська область</a>
            <br> - <a href="units.php#lv">Львівська область </a>
            <br> - <a href="units.php#pl">Полтавська область </a>
            <br>
            <!-- <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/partner1.png"></a> -->
          </li>
          <li>
            - <a href="#">Луганська область </a>
            <br> - <a href="#">Харьківська область</a>
            <br> - <a href="#">Донецька область</a>
            <br> - <a href="#">Запорізька область</a>
            <br>
            <!-- <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="images/partners/partner2.png"></a> -->
          </li>
          <li>- <a href="units.php#dnr">Дніпропетровська область</a>
            <br> - <a href="#">Сумська область</a>
            <br> - <a href="#">Чернігівська область  </a>
            <br> - <a href="units.php#kv">Київська область </a>
            <br>
            <!-- <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="images/partners/partner3.png"></a></li> -->
          </li>
          <li>- <a href="units.php#krg">Кропивницька область</a>
            <br> - <a href="#">Херсонська область</a>
            <br> - <a href="#">Житомирська область</a>
            <br> - <a href="#">Одесська область </a>
            <br> - <a href="#">Хмельницька область </a>
            <br>
            <!-- <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="images/partners/partner4.png"></a> -->
          </li>
          <li>
            - <a href="units.php#khs">Херсонська область</a>
            <br> - <a href="#">Одеська область</a>
            <br> - <a href="#">Кіровоградська область </a>
            <br> - <a href="#">Луганська область</a>
            <br>
            <!-- <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="images/partners/partner5.png"></a> -->
          </li>
        </ul>
      </div>
    </div>
    <!--/.container-->
  </section>
  <!--/#partner-->

  <section id="conatcat-info">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="center wow fadeInDown">
            <h2>Анонс подій</h2>
            <div class="tt-panel" style="display: block;">
              <ul class="skr">
                <li class='tcarusel-item'>

                  <img class='news_img' src="images/events/1.jpg" alt='%s' tooltip='%s'>
                  <a href='events.php?id=%s&page=1'><b>Дата</b> // Місто //   <br>Заголовок події 1
</a>
                </li>
                <li class='tcarusel-item'>
                  <a href='events.php?id=%s&page=1'>
                    <img class='news_img' src='images/events/1.jpg' alt='%s' tooltip='%s'>
                    <br>
                    <b>Дата</b> // Місто //
                    <br>Заголовок події 1
                  </a>
                </li>
                <li class='tcarusel-item'>
                  <a href='events.php?id=%s&page=1'>
                    <img class='news_img' src='images/events/1.jpg' alt='%s' tooltip='%s'>
                    <br>
                    <b>Дата</b> // Місто //
                    <br>Заголовок події 1
                  </a>
                </li>
                <li class='tcarusel-item'>
                  <a href='events.php?id=%s&page=1'>
                    <img class='news_img' src='images/events/1.jpg' alt='%s' tooltip='%s'>
                    <br>
                    <b>Дата</b> // Місто //
                    <br>Заголовок події 1
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="center wow fadeInDown">
            <h2>Контакти</h2>
            <ul class="contacts">
              <li>Президент федерації: Зайцев Сергій Васильович</li>
              <li>тел.: ххх - ххх - ххх</li>
              <li>email: email@ukr.net</li>
              <li>адреса: м. Харків</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--/.container-->
  </section>
  <!--/#conatcat-info-->

  <footer>
   <? include("blocks/footer.php"); ?>
  </footer>

</body>
</html>