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
      <?php include('./flush.php'); ?>
      <ul class="breadcrumb">
        <li><a href="#">Αρχική Σελίδα</a></li>
        <li><a href="#">Σύνδεση</a></li>
        <li>Επεξεργασία Προφίλ</li>
      </ul>
      <h1>Επεξεργασία Προφίλ</h1>
      <div class="editprofile_cont" id="body">
        <div class="row">
                    <form class="form-horizontal">
                        <h2>Επεξεργασία Στοιχείων Λογαριασμού</h2>
                        <div class="row">
                            <div class="col-lg-2">
                                <img src="http://www.espressonews.gr/sites/default/files/field/image/4r34tq345tqw45t_2.jpg" class="img-circle img-thumbnail" alt="Cinque Terre">
                                <button type="button" class="btn btn-link center-block">Αλλαγή Φωτογραφίας</button>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Όνομα Χρήστη</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputUsername" value="soulamaroussi">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="inputEmail" value="soulamaroussi@gmail.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="button" class="btn btn-default">Αλλαγή Κωδικού</button>
                                    </div>
                                </div>


                            </div>

                        </div>
                        <h2>Προσωπικά Στοιχεία</h2>
                        <div class="form-group">
                            <label for="FirstName" class="col-sm-2 control-label">Όνομα</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="FirstName" value="Σούλα" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="LastName" class="col-sm-2 control-label">Επίθετο</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="LastName" value="Κατσουλίδου" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Date" class="col-sm-2 control-label">Ημερομηνία Γέννησης</label>
                            <div class="col-sm-8">
                                <input type="date" id="Date" class ="form"value="1979-12-31" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputHouse" class="col-sm-2 control-label">Κατοικία</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputHouse" value="Πεισίστρατου 56, Αμμαρούσιο Αττικής">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputTelephone" class="col-sm-2 control-label">Τηλέφωνο</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputTelephone" value="6969696969">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="AMKA" class="col-sm-2 control-label">ΑΜΚΑ</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="AMKA" value="3107195200023" readonly>
                            </div>
                        </div>

                        <h2>Στοιχεία Ασφαλισμένου</h2>
                        <div class="form-group">
                            <label for="TotalInsTime" class="col-sm-2 control-label">Συνολικός Χρόνος Ασφάλισης</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="TotalInsTime" value="20 Χρόνια, 7 Μήνες, 100 Μέρες" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ΑΜΑ" class="col-sm-2 control-label">Αριθμός Μητρώου ΙΚΑ</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="ΑΜΑ" value="9868758654898" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 pull-right">
                                <button type="submit" class="btn btn-primary btn-lg">Αποθήκευση Στοιχείων</button>
                            </div>
                        </div>
                    </form>
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
