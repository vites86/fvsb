<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Адмінка</title>
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
    <link rel="shortcut icon" href="../img/favicon.ico">
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="assets/css/main.min.css">
  </head>
  <body class="login">
    <div class="form-signin">
      <div class="text-center">
        <img style="height:100px;"src="assets/img/logo.png" alt="Metis Logo">
      </div>
      <hr>
      <div class="tab-content">
                            <label style="width:100%; text-align: center">
                              <?php 
                                     $error = isset($_GET['error']) ? $_GET['error'] : "";
                                     echo '<span style="color:red;">'.$error.'</span>';
                              ?>
                            </label>
        <div id="login" class="tab-pane active">
          <form name="entry_form" action="login_check.php" method="post">
            <p class="text-muted text-center">Введіть Ваш логін і парль</p>
            <input type="text"     placeholder="Логін"  name="login"          id="login"        class="form-control top" required/>
            <input type="password" placeholder="Пароль" name="password"       id="password"     class="form-control bottom" required/>
            <input type="hidden"   name="current_page"  id="current_page" value="login.php"/>
            <div class="checkbox">
              <label>
                <input type="checkbox"> Запам'ятати мене
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Ввійти</button>
          </form>
        </div>
        <div id="forgot" class="tab-pane">
          <form action="index.php">
            <p class="text-muted text-center">Введіть справжній e-mail</p>
            <input type="email" placeholder="mail@domain.com" class="form-control">
            <br>
            <button class="btn btn-lg btn-danger btn-block" type="submit">Відновити пароль</button>
          </form>
        </div>
        <div id="signup" class="tab-pane">
          <form action="index.php">
            <input type="text" placeholder="логін" class="form-control top">
            <input type="email" placeholder="mail@domain.com" class="form-control middle">
            <input type="password" placeholder="пароль" class="form-control middle">
            <input type="password" placeholder="re-password" class="form-control bottom">
            <button class="btn btn-lg btn-success btn-block" type="submit">Регістрація</button>
          </form>
        </div>
      </div>
      <hr>
      <div class="text-center">
        <ul class="list-inline">
          <li> <a class="text-muted" href="#login" data-toggle="tab">Login</a>  </li>
          <li> <a class="text-muted" href="#forgot" data-toggle="tab">Forgot Password</a>  </li>
          <li> <a class="text-muted" href="#signup" data-toggle="tab">Signup</a>  </li>
        </ul>
                         
      </div>
    </div>

    <!--jQuery -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!--Bootstrap -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      (function($) {
        $(document).ready(function() {
          $('.list-inline li > a').click(function() {
            var activeForm = $(this).attr('href') + ' > form';
            //console.log(activeForm);
            $(activeForm).addClass('animated fadeIn');
            //set timer to 1 seconds, after that, unload the animate animation
            setTimeout(function() {
              $(activeForm).removeClass('animated fadeIn');
            }, 1000);
          });
        });
      })(jQuery);
    </script>
                          
  </body>
</html>