<?php include('_session.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/assets/img/favico.ico">

    <title>IKA | Σύνδεση</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link href="/assets/css/justified-nav.css" rel="stylesheet">
    <link href="/assets/css/theme.css" rel="stylesheet">
    <link href="/assets/css/yamm.css" rel="stylesheet">
    <link href="/assets/css/app.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-16-04 -->
    <!-- https://coolors.co/f48e40-0fa3b1-d9e5d6-eddea4-838486 -->
    <!-- https://material.io/icons/#ic_search -->
  </head>

  <body>

    <div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <?php include('../_menu.php'); ?>
      <?php include('../_flush.php'); ?>

      <h1>Σύνδεση Με Λογαριασμό ΙΚΑ</h1>
      <div class="login_cont" id="body">
        <form action="/auth/authenticate.php?a=login" method="post">
          <div class="row">
            <div class="col-md-4">
              <label for="mail">Διεύθυνση Ηλεκτρονικού Ταχυδρομείου</label>
            </div>
            <div class="col-md-8">
              <input type="email" id="mail" name="email" placeholder="Εισάγετε email.." required value="<?= $_SESSION['login_email']?>">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label for="pass">Κωδικός Χρήστη</label>
            </div>
            <div class="col-md-8">
              <input type="password" id="pass" name="password" placeholder="Επιλέξτε Κωδικό..">
            </div>
          </div>
          <div class="row" style="margin-top: 10px">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
              <input type="submit" value="Σύνδεση" class="btn btn-primary btn-lg btn-block">

            </div>
            <div class="col-md-4">
<!--              <input type="submit" value="Σύνδεση" class="btn btn-primary btn-lg btn-block">-->
            </div>
          </div> 
            <a style="font-size: 18px;" href="/auth/register.php">Δεν έχετε  Λογαριασμό; </a>       
      </div>
      <?php include('../_footer.php'); ?>
  </body>
</html>
