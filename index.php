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
      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Καλωσήρθες στο <span style="color:#f48e40;">ΙΚΑ.gr</span></h1>
        <p class="lead">Δοκίμασε να πλοηγηθείς μέσω του menu ή να πληκρολογήσεις το ερώτημά σου παρακάτω</p>

        <form class="form-horizontal" role="search" action="/faq.php">
            <div class="input-group">
              <input class="form-control input-lg" placeholder="Αναζήτηση" name="q" type="text">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
              </div>
            </div>
        </form>
        <!-- <p><a class="btn btn-lg btn-info" href="#" role="button">Get started today</a></p> -->
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-6">
          <h2>Δημοφιλή στο IKA.gr</h2>
          <div id="tagCloud">
            <a href="/" class="tier1">ΑΜΚΑ</a>
            <a href="/ypologismos_syntaksis.php" class="tier2">Υπολογισμός Σύνταξης</a>
            <a href="/" class="tier3">Εκδοση Σύνταξης</a>
            <a href="/" class="tier2">Νέος Ασφαλισμένος</a>
            <a href="/" class="tier1">Ηλεκτρονικές Υπηρεσίες</a>
            <a href="/" class="tier3">Ασφαλιστική Ικανότητα</a>

          </div>
        </div>

        <div class="col-lg-6">
          <ul class="nav nav-tabs" id="newsTabs" role="tablist">
            <li class="active"><a href="#last_news" role="tab" data-toggle="tab" aria-controls="last_news" aria-expanded="true">Τελευταία Νέα</a></li>
            <li><a href="#staff_news" role="tab" data-toggle="tab" aria-controls="staff_news" aria-expanded="false">Ενημέρωση Προσωπικού</a></li>
          </ul>
          <div class="tab-content" id="newsContent"> 
            <div class="tab-pane active" role="tabpanel" id="last_news">
                <div class="media">
                  <div class="media-left">
                    <img width="80px" class="media-object" src="https://s.nbst.gr/files/1/2012/03/15/ika_1.thumbnail.jpg" alt="">
                  </div>
                  <div class="media-body">
                    <a href="/"><h4 class="media-heading">Απεργία στο ΙΚΑ Θεσσαλονίκης και Κ. Μακεδονίας</h4></a>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum neque nisi, eget blandit augue hendrerit nec. Sed consequat neque eu pulvinar ornare. Mauris non nisl vel leo volutpat pharetra
                  </div>
                </div>

                <div class="media">
                  <div class="media-left">
                    <img width="80px" class="media-object" src="http://www.corfupress.com/cp/wp-content/uploads/2011/02/www.kolivas.de_wp-content_uploads_2010_12_ika_kerkyras_2.jpg" alt="">
                  </div>
                  <div class="media-body">
                    <a href="/"><h4 class="media-heading">ΙΚΑ Κέρκυρας: Ταλαιπωρία, μετά την απεργία…</h4></a>
                    Vestibulum consectetur rutrum tincidunt. Suspendisse a finibus tellus, eget sodales lorem. Duis pharetra elit eu fringilla accumsan. Nullam feugiat consequat dolor non tempus. Nulla facilisi
                  </div>
                </div>
                
                <div class="btn-group btn-group-justified" role="group" aria-label="" style="margin-top:15px;">
                  <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default">Φόρτωση Παλαιώτερων</button>
                  </div>
                </div>
            </div> 
            <div class="tab-pane" role="tabpanel" id="staff_news">
              <div class="media">
                  <div class="media-left">
                    <img width="80px" class="media-object" src="http://www.aftodioikisi.gr/wp-content/uploads/2017/10/ika.jpg" alt="">
                  </div>
                  <div class="media-body">
                    <a href="/"><h4 class="media-heading">ΙΚΑ: Διευκρινίσεις για τις προϋποθέσεις χορήγησης παροχών σε χρήμα στο προσωπικό των ΟΤΑ</h4></a>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </div>
                </div>

                <div class="media">
                  <div class="media-left">
                    <img width="80px" class="media-object" src="https://www.drt915.gr/wp-content/uploads/2015/05/064c220229fd238a1b5e1c2099e969b9.jpg" alt="">
                  </div>
                  <div class="media-body">
                    <a href="/"><h4 class="media-heading">Άμεση ενίσχυση του ΙΚΑ Τρίπολης με προσωπικό ζητά από την κυβέρνηση ο Κ. Βλάσης</h4></a>
                    Vestibulum consectetur rutrum tincidunt. Suspendisse a finibus tellus, eget sodales lorem. Duis pharetra elit eu fringilla accumsan. Nullam feugiat consequat dolor non tempus. Nulla facilisi
                  </div>
                </div>
                
                <div class="btn-group btn-group-justified" role="group" aria-label="" style="margin-top:15px;">
                  <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default">Φόρτωση Παλαιώτερων</button>
                  </div>
                </div>
            </div> 
          </div>
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
