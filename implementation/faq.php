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

    <title>IKA | Πληροφορίες και Δικαιολογητικά</title>

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
      <?php include('./_menu.php'); ?>
      <?php include('./_flush.php'); ?>
      <div id="body">

          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/index.php">Αρχική Σελίδα</a></li>
              <li class="breadcrumb-item active">Πληροφορίες και Δικαιολογητικά</li>
          </ol>
          
          <div class="jumbotron">
            <h2>Πληροφορίες και Δικαιολογητικά</h2>
            <?php if($_GET['c']): ?>
              <h4>Στην κατηγορία <?= $_GET['c'] ?></h4>
            <?php endif; ?>

            <form class="form-horizontal" role="search" action="/faq.php">
                <div class="input-group">
                  <input class="form-control input-lg" placeholder="Αναζήτηση" name="q" type="text" value="<?= $_GET['q'] ?>">
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                  </div>
                </div>
            </form>
            <!-- <p><a class="btn btn-lg btn-info" href="#" role="button">Get started today</a></p> -->
          </div>


           <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                    Τι είναι ο ΑΜΚΑ;</a>
                  </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                  <div class="panel-body">Ο ΑΜΚΑ (Αριθμός Μητρώου Κοινωνικής Ασφάλισης) είναι ουσιαστικά η ταυτότητα εργασίας και ασφάλισης κάθε εργαζόμενου, συνταξιούχου και προστατευόμενου μέλους της οικογένειάς τους στη χώρα μας. Με τον ΑΜΚΑ θα εξυπηρετήστε πιο εύκολα και γρήγορα σε όλες σας τις συναλλαγές που αφορούν την εργασία και την ασφάλιση όπως: να προχωρήσετε σε έναρξη απασχόλησης και ασφάλισης, να καταβάλετε τις ασφαλιστικές σας εισφορές, να εκδώσετε ή να ανανεώσετε το βιβλιάριο ασθένειας, να πάρετε τη σύνταξή σας ή τις οποιεσδήποτε παροχές, επιδόματα και βοηθήματα και όλα αυτά με πολύ λιγότερες καθυστερήσεις και γραφειοκρατικές διαδικασίες.
                      Ο ΑΜΚΑ αντικαθιστά τον Αριθμό Μητρώου (ΑΜ) που μέχρι σήμερα χορηγούν οι Ασφαλιστικοί Φορείς στους ασφαλιζόμενους και στους συνταξιούχους, κάνοντας τη ζωή σας ακόμα πιο εύκολη.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                        Ποια είναι τα δικαιολογητικά για ασφάλιση συζύγου;</a>
                  </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                  <div class="panel-body">ΑΣΦΑΛΙΣΗ ΣΥΖΥΓΟΥ
                      1. Αίτηση του άμεσα ασφαλισμένου.
                      2. Μία (1) Φωτογραφία.
                      3. Φωτοτυπία αστυνομικής ταυτότητας συζύγου ή φωτοτυπία επικυρωμένης άδειας
                      παραμονής και διαβατηρίου σε περίπτωση ασφάλισης συζύγων αλλοδαπών.
                      4. Πρόσφατο πιστοποιητικό οικογενειακής κατάστασης.
                      5. Βεβαίωση διαγραφής από τον προηγούμενο ασφαλιστικό φορέα (στην οποία να
                      αναγράφεται ότι ο/η σύζυγος δεν έχει δικαίωμα περίθαλψης και από πότε). Εάν
                      υπάρχει οφειλή στον ΟΑΕΕ ότι έχει κάνει διακοπή επαγγέλματος.
                      6. 6.Φωτοτυπία του ακυρωμένου βιβλιαρίου του προηγούμενου φορέα.
                      7. Υπεύθυνη δήλωση Ν.1599/86 του άμεσα ασφαλισμένου.
                      8. Φορολογική δήλωση και εκκαθαριστικό εφορίας τρέχοντος έτους.
                      9. Βιβλιάριο άμεσα ασφαλισμένου.
                      10. ΑΜΚΑ.
                      11. ΑΦΜ συζύγου
                      12. Συμπληρωμένο απογραφικό με τα ατομικά στοιχεία θεωρημένο από την
                      υπηρεσία του υπαλλήλου.
                      13. Πρόσφατο αντίγραφο μισθοδοσίας ή τρίμηνο ενημερωτικό όταν είναι
                      συνταξιούχος ή ΦΕΚ παραίτησης ή φωτοτυπία Πράξης παραίτησης.</div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                        Ποια είναι τα δικαιολογητικά για την έκδοση βιβλιαρίου ασθενείας;</a>
                  </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                  <div class="panel-body">Απαραίτητος ο ΑΜΚΑ (Αριθμός Μητρώου Κοινωνικής Ασφάλισης)

                      Απόσπασμα Ατομικού Λογαριασμού Ασφάλισης ή Βεβαίωση Εργοδότη επικυρωμένη από το Υποκ/μα ΙΚΑ-ΕΤΑΜ που ελέγχει την έδρα ή απογεγραμμένο στο ΙΚΑ-ΕΤΑΜ παράρτημα του εργοδότη, όπου θα εμφαίνονται εξήντα (60) τουλάχιστον ημέρες ασφάλισης (ή όπως θα διαμορφώνονται δέκα (10) κατ έτος μέχρι 100 ημέρες το 2013) το προηγούμενο έτος ή 15μηνο. Το έντυπο αυτό, μπορεί να το προμηθευτεί ο ασφ/νος από τον εργοδότη του.
                      Μία φωτογραφία ταυτότητας
                      Αστυνομική ταυτότητα ή άλλο ισοδύναμο έγγραφο (Διαβατήριο κλπ).
                      Εγγραφο που να αποδεικνύει με ασφάλεια την διεύθυνση κατοικίας του ασφ/νου (Λογαριασμος ΔΕΗ, ΟΤΕ, Εκκαθαριστικό Εφορίας κλπ).
                      Βεβαίωση διαγραφής από άλλο φορέα ή Υπεύθυνη Δήλωση του Ν.1599/86 ότι δεν είναι ασφαλισμένος σε άλλο Ταμείο.

                  </div>
                </div>
              </div>
            </div>

            <div class="row">
                  <div class="col-md-4">.col-md-4</div>
                  <div class="col-md-4 offset-md-4">.col-md-4 .offset-md-4</div>
                </div>
                <div class="row">
                  <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
                  <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
                </div>
                <div class="row">
                  <div class="col-md-6 offset-md-3">.col-md-6 .offset-md-3</div>
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
