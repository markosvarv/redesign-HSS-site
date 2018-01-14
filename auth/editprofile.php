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
                                <img src="http://dsi-vd.github.io/patternlab-vd/images/fpo_avatar.png" class="img-circle img-thumbnail" alt="Cinque Terre">
                                <button type="button" class="btn btn-link center-block">Αλλαγή Φωτογραφίας</button>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="inputEmail" value=<?= $user['email']?>>
                                    </div>
                                </div>
                              <div class="form-group">
                                    <label for="OldPassword" class="col-sm-2 control-label">Παλιός Κωδικός</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="OldPassword" placeholder="Συμπληρώστε τον Παλιό σας Κωδικό..">
                                    </div>
                                </div>
                              <div class="form-group">
                                    <label for="NewPassword" class="col-sm-2 control-label">Νέος Κωδικός</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="NewPassword" placeholder="Επιλέξτε Νέο Κωδικό..">
                                    </div>
                                </div>
                              <div class="form-group">
                                    <label for="ConPassword" class="col-sm-2 control-label">Επαλήθευση Νέου Κωδικού</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="ConPassword" placeholder="Επαναλάβετε τον Νέο σας Κωδικό..">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <h2>Προσωπικά Στοιχεία</h2>
                        <div class="form-group">
                            <label for="FirstName" class="col-sm-2 control-label">Όνομα</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="FirstName" value=<?= $user['firstName']?> readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="LastName" class="col-sm-2 control-label">Επίθετο</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="LastName" value=<?= $user['lastName'] ?> readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Date" class="col-sm-2 control-label">Ημερομηνία Γέννησης</label>
                            <div class="col-sm-8">
                                <input type="date" id="Date" class ="form"value=<?= $user['birthday']?> readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputHouse" class="col-sm-2 control-label">Κατοικία</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputHouse" value=<?= $user['address'] ?>>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputTelephone" class="col-sm-2 control-label">Τηλέφωνο</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputTelephone" value=<?= $user['phone']?>>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="AMKA" class="col-sm-2 control-label">ΑΜΚΑ</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="AMKA" value=<?= $user['amka']?> readonly>
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
      <?php include('../_footer.php'); ?>
      <script type="text/javascript">
        $('#newsTabs a').click(function (e) {
          e.preventDefault();
          $(this).tab('show');
        })
      </script>
  </body>
</html>
