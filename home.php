<?php 
  include ('./auth/_session.php');
  only_loggedin($conn);
?>
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



      <style>
          .panel-heading .accordion-toggle:after {
              /* symbol for "opening" panels */
              font-family: 'Glyphicons Halflings';  /* essential for enabling glyphicon */
              content: "\e114";    /* adjust as needed, taken from bootstrap.css */
              float: right;        /* adjust as needed */
              color: grey;         /* adjust as needed */
          }
          .panel-heading .accordion-toggle.collapsed:after {
              /* symbol for "collapsed" panels */
              content: "\e080";    /* adjust as needed, taken from bootstrap.css */
          }
      </style>

    <title>IKA</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link href="./assets/css/justified-nav.css" rel="stylesheet">
    <link href="./assets/css/theme.css" rel="stylesheet">
    <link href="./assets/css/yamm.css" rel="stylesheet">
    <link href="./assets/css/app.css" rel="stylesheet">

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
      <?php include('./_menu.php'); ?>
      <?php include('./_flush.php'); ?>
      <div id="body">


              <h1>Καλωσήλθες στο ΙΚΑ, <?= $user['firstName']?>!</h1>
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title">
                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                              Τα στοιχεία μου:
                          </a>
                      </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse in">
                      <div class="panel-body">
                          <!--   <div class="row">
                          <div class="col-md-3">
                              <p>Όνοματεπώνυμο</p>
                              <p>Email</p>
                              <p>ΑΜΚΑ</p>
                              <p>Ημερομηνία Γέννησης</p>
                          </div>
                          <div class="col-md-3">
                              <p><strong><?/*= $user['firstName']*/?> <?/*= $user['lastName'] */?></strong></p>
                              <p><strong><?/*= $user['email']*/?></strong></p>
                              <p><strong><?/*= $user['amka']*/?></strong></p>
                              <p><strong><?/*= $user['birthday']*/?></strong></p>
                          </div>
                          <div class="col-md-3">
                              <p>Διεύθυνση</p>
                              <p>Τηλέφωνο</p>
                              <p>Ασφαλισμένος</p>
                          </div>
                          <div class="col-md-3">
                              <p><strong><?/*= $user['address'] */?></strong></p>
                              <p><strong><?/*= $user['phone']*/?></strong></p>
                              <p><strong><?/*= $user['user_type']*/?></strong></p>
                          </div>
                      </div>-->


                          <div class="col-md-6">
                              <div class ="row">
                                  <label class="col-md-4">Όνομα:</label>
                                  <p class="col-md-8"><?= $user['firstName']?></p>
                              </div>
                              <div class ="row">
                                  <label class="col-md-4">Επίθετο:</label>
                                  <p class="col-md-8"><?= $user['lastName'] ?></p>
                              </div>
                              <div class ="row">
                                  <label class="col-md-4">Email:</label>
                                  <p class="col-md-8"><?= $user['email']?></p>
                              </div>
                              <div class ="row">
                                  <label class="col-md-4">Ημερομηνία Γέννησης:</label>
                                  <p class="col-md-8"><?= $user['birthday']?></p>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class ="row">
                                  <label class="col-md-4">ΑΜΚΑ:</label>
                                  <p class="col-md-8"><?= $user['amka']?></p>
                              </div>
                              <div class ="row">
                                  <label class="col-md-4">Περιοχή:</label>
                                  <p class="col-lg-8"><?= $user['address'] ?></p>
                              </div>
                              <div class ="row">
                                  <label class="col-md-4">Τηλέφωνο:</label>
                                  <p class="col-md-8"><?= $user['phone']?></p>
                              </div>
                              <div class ="row">
                                  <label class="col-md-4">Ασφαλισμένος:</label>
                                  <p class="col-md-8"><?= $user['user_type']?></p>
                              </div>
                          </div>


                          <a style="float: right;" href="/θπδατε.php" class="btn btn-default">Επεξεργασία Προφίλ</a>

                      </div>
                  </div>
              </div>
              <div class="btn-group" role="group" aria-label="...">
                  <a class="btn btn-primary btn-lg" href="#" role="button">Προσθήκη Μηνιαίας Ασφάλισης</a>
                  <a class="btn btn-default btn-lg" href="#" role="button">Αναζήτηση Γιατρού ΕΟΠΥΥ</a>
                  <a class="btn btn-info btn-lg" href="#" role="button">Περισσότερες Υπηρεσίες...</a>
              </div>


      </div>

      <?php include('./_footer.php'); ?>
      <script type="text/javascript">
        $('#newsTabs a').click(function (e) {
          e.preventDefault();
          $(this).tab('show');
        })
      </script>
  </body>
</html>
