<!DOCTYPE html>
<html lang="en">
<head>
  <title>ВСБ</title>
  <?php include("blocks/header_links.php") ;?>
  <?php
 $uagent=$_SERVER['HTTP_USER_AGENT'];
 if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$uagent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($uagent,0,4)))
    header('location: http://fvsb.com.ua/m/index.php');
 ?>
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
                  <span id='status' style="display:none">
                     08.10.2010 року ВФВСБ наказом № 3531 Міністерства України у справах молоді, сім'ї та спорту присвоєно статус <b>«Національної»</b>
                  </span>
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
<div class="row">
         <div class="col-md-12 text-center">
           <h1 style="color: #1BBD36; font-weight: bold;margin-top: 20px;">Військово - спортивні багатоборства</h1>
         </div>
      </div>
  <div class="feature">
    <div class="container">
      <div class="text-center">
      
        <div class="col-md-6 hidden-xs">
          <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <img style="width: 100%;margin-top: 15px;" src="images/slider/dvoborstvo.png">
          </div>
        </div>
        <div class="col-md-6 hidden-xs">
          <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Військово-прикладне семиборствo:</h2>
            <ul type="none" style="color:black; text-align: left; margin-left: 100px;">
              <li>- плавання 50 метрів</li>
              <li>- стрільба</li>
              <li>- біг на 100 та 3000 м</li>
              <li>- підтягування на перекладені</li>
              <li>- подолання смуги перешкод</li>
              <li>- метання імітаційних гранат</li>
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
        <p> Громадська організація "Всеукраїнська Федерація військово-спортивних багатоборств" <b>(ВФВСБ)</b> створена 8 лютого 2000 року 
            на базі Федерації військово-прикладного спорту Харківської області (зареєстрована 31.01.1997).
        </p>
        <p> 08.10.2010 року ВФВСБ наказом № 3531 Міністерства України у справах молоді, сім'ї та спорту присвоєно статус <b>«Національної»</b>. 
            В подальшому статус «Національної» був продовжений згідно наказу Міністерства молоді та спорту України №2385 від 18.07.2014 року.
        </p>
        <p> У 2005 році ВФВСБ стала одним із засновників Міжнародного Союзу громадських організацій «Розвитку військово-спортивних багатоборств», 
            президентом якого став <b>Зайцев С.В.</b> (Засновник бойового багатоборства, заслужений тренер України, суддя
            міжнародної категорії, чорний пояс 10 дан, майстер спорту), першим віце-президентом став Федорцов А.П. - 
            Засновник бойового багатоборства, суддя міжнародної категорії, чорний пояс 8 дан.
        </p>
        <p> Основна <b>мета</b> діяльності організації – задоволення та захист законних соціальних, економічних, творчих, спортивних та інших спільних 
            інтересів членів Організації та сприяння розвитку військово-спортивних багатоборств на території України, підвищенню ролі цього виду 
            спорту у всебічному і гармонійному розвитку особистості, зміцнення здоров'я, формування здорового способу життя. Військово-патріотичне 
            виховання дітей та молоді, пропаганда здорового способу життя і сприяння підготовці молоді до служби у лавах Збройних Сил України.
        </p>
      </div>

      <div class="col-md-6 wow fadeInDown justif" data-wow-duration="1000ms" data-wow-delay="600ms">
        <h2><br></h2>        
        <p style="text-align:left;"> Спортсмени, які займаються цим видом спорту, мають можливість брати участь:
        <br> - У технічній поясовій атестації згідно <a style="color:darkblue;text-decoration:underline" href="documents/mezhdunarodnoe_polozhenie_o_tpa_utverzhdenoe_15.06.2011.doc">положення</a> відповідної міжнародної організаціїї 
        <br> - У районних, обласних, національних, міжнародних змаганнях та отримувати відповідні <b>спортивні розряди</b> і <b>звання</b>
        <br> - У літніх спортивних таборах
        <br> - У військово-патріотичних заходах
        <br>
        </p>        
        <table class="">    
            <tr>
                 <td colspan="2"><span style="color:black; font-weight:bold;">ВФВСБ на даний момент підготовлені:</span></td>
            </tr>      
             <tr>
               <td style="padding-right:3px;width:55%;">
                 <p style="margin-bottom:0px !important;">
                     - Заслужених тренерів України - 9 осіб;
                    <br> - Майстрів спорту міжнародного класу - 20 осіб;
                    <br> - Майстрів спорту України - 200 осіб;
                    <br> - Велика кількість спортсменів розрядників.
                  </p>
               </td>
               <td style="vertical-align:top; padding-right:3px;">
                <p>
                    - Суддів міжнародної категорії - 10 осіб;
                   <br> - Суддів Національної категорії - 9 осіб;
                   <br> - Суддів 1-3 категорій - більше 150 осіб.
                </p>
               </td>
             </tr>
        </table>
        <br>
        <p>Правила спортивних змагань з військово-спортивних багатоборств затверджені <a style="color:blue" target="_blank" href="http://zakon2.rada.gov.ua/laws/show/z0504-14">Наказом</a> від 22.04.2014  № 1283 Міністерства молоді та спорту</p>
        <hr>
        <div style="position:relative;height:0;padding-bottom:56.25%">
          <iframe src="https://www.youtube.com/embed/ja5MK4A1SxU?ecver=2" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen>
          </iframe>
        </div><br>
      <p>
          Спортивні звання та розряди з військово-спортивних багатоборств присвоюються відповідно до <a style="color:blue" target="_blank" href="http://zakon2.rada.gov.ua/laws/show/z0497-14">Наказу</a> №1305 Міністерства молоді та спорту України від 24.04.14 
          "Про затвердження Кваліфікаційних норм та вимог Єдиної спортивної класифікації України з неолімпійських видів спорту"
      </p>
      </div>
    </div>
  </div>

  <div class="lates">
    <div class="container" style="text-align:center">
      <div class="text-center">
        <h2>Останні Новини</h2>
      </div>
        <? include("blocks/news.php"); ?>      
    </div>
  </div>

  <section id="partner">
    <div class="container">
      <div class="center wow fadeInDown">
        <h2>Наші підрозділи</h2>
        <p>В даний час ВФВСБ має свої структурні підрозділи в 17 областях України.</p>
        <br>
        <br>
      </div>

      <div class="partners">
        <ul style="text-align: left" class="regions">
          <? include ("blocks/units.php"); ?>
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
            <? include("blocks/anons.php"); ?>
          </div>
        </div>
        <div class="col-md-5">
          <div class="center wow fadeInDown">
            <h2>Контакти</h2>
            <ul class="contacts">
              <li>Президент федерації: Зайцев Сергій Васильович</li>
              <li>тел.: (063) 119 57 15</li>
              <li>email: president.fvsb@gmail.com</li>
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