
<?php 
  include ('db_connection.php');
  if(isset($_SESSION["user_id"])){
    $res = $conn->prepare("SELECT * FROM users WHERE id = :id LIMIT 1");
    $res->execute(array(':id' => $_SESSION["user_id"]));
    if ($res->rowCount() == 1){
      $user = ($res->fetchAll(PDO::FETCH_ASSOC))[0];
    }
  }
?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="./assets/css/justified-nav.css" rel="stylesheet">
<link href="./assets/css/theme.css" rel="stylesheet">
<link href="./assets/css/yamm.css" rel="stylesheet">
<link href="./assets/css/app.css" rel="stylesheet">

<div class="right-tools pull-right">
  <span id="access">Μέγεθος Γραμμάτων <input  type="range" min="1" max="2" value="1" step="0.5" onchange="$('#body').attr('style', 'font-size: ' + (this.value*100).toString() + '% !important');" ></span>
  <span id="access">Φωνητική Λειτουργία <span style="cursor: pointer;" class="glyphicon glyphicon-headphones"></span></span>
  <br>
  <span class="pull-right" style="border: solid 1px;padding: 5px;border-radius: 2px;"> 

    
    <?php if (isset($user)): ?>
      <span class="glyphicon glyphicon-user"></span> <a href="/home.php"><?= $user['firstName'] ?> <?= $user['lastName'] ?></a> / <a href="/authenticate.php?a=logout">Αποσύνδεση</a> 
    <?php else: ?>
      <a href="/login.php">Σύνδεση</a> / <a href="/register.php">Εγγραφή</a>  
    <?php endif; ?>

    <span id="phone_and_email">| <strong><span class="glyphicon glyphicon-earphone"></span>21045454545 <span class="glyphicon glyphicon-envelope"></span> info@ika.gr </span></strong>| <a href="/">English</a>
  </span>
</div>

<div class="masthead">
  <a href="/"><h3 class="text-muted">IKA</h3></a>
  
  <div class="navbar navbar-default yamm">
    <div class="navbar-header">
      <button type="button" data-toggle="collapse" data-target="#navbar-collapse-2" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><!-- <a href="/" class="navbar-brand">Αρχική</a> -->
    </div>
    <div id="navbar-collapse-2" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <!-- Media Example -->
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Ασφαλισμένοι<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li>
              <div class="yamm-content">
                
                <div class="row">
                  <div class="col-md-6">
                    <ul class="media-list">
                      <li class="media">
                        <div class="media-body">
                            <h4>Ηλεκτρονικές Υπηρεσίες</h4>
                            <ul style="list-style-type: none;">
                                <li>
                                    <h5 class="media-heading"><a href="certificate.php">Έκδοση Πιστοποιητικού</a></h5>
                                </li>
                                <li>
                                    <h5 class="media-heading"><a href="">Εξέλιξη Αιτήματος</a></h5>
                                </li>
                                <li>
                                    <h5 class="media-heading"><a href="/">Υπηρεσίες προς Α.Μ.Ε.Α.</a></h5>
                                </li>
                            </ul>
                        <div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <h4 class="media-heading"><a href="/">Πληροφορίες / Δικαιολογητικά</a></h4>Όπως: Εκδοση ΑΜΚΑ, ..., ....
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <h4>Δημοφιλείς Εργασίες</h4>
                    <ul style="list-style-type: none;">
                      <li>
                        <h5 class="media-heading"><a href="/">Νέος Ασφαλισμένος</a></h5>
                      </li>
                      <li>
                        <h5 class="media-heading"><a href="/">Ασφαλιστική Ικανότητα</a></h5>
                      </li>
                      <li>
                        <h5 class="media-heading"><a href="/">ΑΜΚΑ</a></h5>
                      </li>
                      <li>
                        <h5 class="media-heading"><a href="/">Αναζήτηση Γιατρού ΕΟΠΥΥ</a></h5>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-12">
                    <br/>
                    <!-- searchbar -->
                    <form class="" role="search" action="search.php">
                      <h5>Αναζήτηση</h5>
                      <div class="input-group" style="width: 100%;">
                        <input type="hidden" name="c" value="Ασφαλισμένοι">
                        <input type="text" class="form-control" placeholder="Αναζήτηση στην κατηγορία 'Ασφαλισμένοι'" name="q">
                        <div class="input-group-btn">
                          <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                
              </div>
            </li>
          </ul>
        </li>

        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Εργοδότες<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li>
              <div class="yamm-content">
                
                <div class="row">
                  <div class="col-md-6">
                    <ul class="media-list">
                      <li class="media">
                        <div class="media-body">
<!--                          <h4 class="media-heading"><a href="/">Ηλεκτρονικές Υπηρεσίες</a></h4>Όπως: Καταχώριση Υπαλλήλων, ..., ....-->
                            <h4>Ηλεκτρονικές Υπηρεσίες</h4>
                            <ul style="list-style-type: none;">
                                <li>
                                    <h5 class="media-heading"><a href="request.php">Υποβολή Ενσήμων</a></h5>
                                </li>
                                <li>
                                    <h5 class="media-heading"><a href="/">Καταχώρηση Υπαλλήλων</a></h5>
                                </li>
                                <li>
                                    <h5 class="media-heading"><a href="/">Υποβολή Α.Π.Δ.</a></h5>
                                </li>
                                <li>
                                    <h5 class="media-heading"><a href="/">Έκδοση Ατομικού Λογαριασμού Ασφάλισης</a></h5>
                                </li>
                            </ul>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <h4 class="media-heading"><a href="/">Πληροφορίες / Δικαιολογητικά</a></h4>Όπως: Ασφάλιση Υπαλλήλων, ..., ....
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <h4>Δημοφιλείς Εργασίες</h4>
                    <ul style="list-style-type: none;">
                      <li>
                        <h5 class="media-heading"><a href="/">Καταχώριση Υπαλλήλων</a></h5>
                      </li>
                      <li>
                        <h5 class="media-heading"><a href="/">Εγραφή Εργοδότη</a></h5>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-12">
                    <br/>
                    <!-- searchbar -->
                    <form class="" role="search" action="search.php">
                      <h5>Αναζήτηση</h5>
                      <div class="input-group" style="width: 100%;">
                        <input type="text" class="form-control" placeholder="Αναζήτηση στην κατηγορία 'Εργοδότες'" name="q">
                        <input type="hidden" name="c" value="Εργοδότες">
                        <div class="input-group-btn">
                          <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                
              </div>
            </li>
          </ul>
        </li>

        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Συντάξεις<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li>
              <div class="yamm-content">
                
                <div class="row">
                  <div class="col-md-6">
                    <ul class="media-list">
                      <li class="media">
                        <div class="media-body">
<!--                          <h4 class="media-heading"><a href="/">Ηλεκτρονικές Υπηρεσίες</a></h4>Όπως: Υπολογισμός Σύνταξης, ..., ....-->
                            <h4>Ηλεκτρονικές Υπηρεσίες</h4>
                            <ul style="list-style-type: none;">
                                <li>
                                    <h5 class="media-heading"><a href="ypologismos_syntaksis.php">Υπολογισμός Σύνταξης</a></h5>
                                </li>
                                <li>
                                    <h5 class="media-heading"><a href="/">Βεβαίωση Συντάξεων</a></h5>
                                </li>
                                <li>
                                    <h5 class="media-heading"><a href="/">Ενημερωτικό Σημείωμα Συντάξεων</a></h5>
                                </li>
                                <li>
                                    <h5 class="media-heading"><a href="/">Πορείας Αίτησης Συνταξιοδότησης</a></h5>
                                </li>
                            </ul>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <h4 class="media-heading"><a href="/">Πληροφορίες / Δικαιολογητικά</a></h4>Όπως: Δικαιολογητικά χορήγησης σύνταξης, Οδηγός Θεμελίωσης Συνταξιοδοτικού Δικαιώματος, ....
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <h4>Δημοφιλείς Εργασίες</h4>
                    <ul style="list-style-type: none;">
                      <li>
                        <h5 class="media-heading"><a href="/ypologismos_syntaksis.php">Υπολογισμός Σύνταξης</a></h5>
                      </li>
                      <li>
                        <h5 class="media-heading"><a href="/">Αναζήτηση Γιατρού ΕΟΠΥΥ</a></h5>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-12">
                    <br/>
                    <!-- searchbar -->
                    <form class="" role="search" action="search.php">
                      <h5>Αναζήτηση</h5>
                      <div class="input-group" style="width: 100%;">
                        <input type="text" class="form-control" placeholder="Αναζήτηση στην κατηγορία 'Συντάξεις'" name="q">
                        <input type="hidden" name="c" value="Συντάξεις">
                        <div class="input-group-btn">
                          <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                
              </div>
            </li>
          </ul>
        </li>

        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Συνεργάτες<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li>
              <div class="yamm-content">                
                <div class="row">
                  <div class="col-md-6">
                    <ul class="media-list">
                      <li class="media">
                        <div class="media-body">
                          <h4 class="media-heading"><a href="/">Συνεργαζόμενοι Ιαρτροί</a></h4>Όπως: Ιστορικό Ασφαλισμένου, ..., ....
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <h4 class="media-heading"><a href="/">Προγράμματος Κατ' Οίκον Φροντίδας Συνταξιούχων</a></h4>Όπως: Αναθέσεις Περιστατικών, ..., ....
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="media-list">
                      <li class="media">
                        <div class="media-body">
                          <h4 class="media-heading"><a href="/">Επιτροπές ΚΕ.Π.Α.</a></h4>Όπως: Ιστορικό Επιτροπών, ..., ....
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <h4 class="media-heading"><a href="/">Εσωτερικές Υπηρεσίες ΙΚΑ</a></h4>Όπως: Εφαρμόγη έκδοσης δικαιολογητικών, ..., ....
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-12">
                    <br/>
                    <!-- searchbar -->
                    <form class="" role="search" action="search.php">
                      <h5>Αναζήτηση</h5>
                      <div class="input-group" style="width: 100%;">
                        <input type="text" class="form-control" placeholder="Αναζήτηση στην κατηγορία 'Συνεργάτες'" name="q">
                        <input type="hidden" name="c" value="Συνεργάτες">
                        <div class="input-group-btn">
                          <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                
              </div>
            </li>
          </ul>
        </li>

        <li><a href="/ServicePoints.php" class="dropdown-toggle">Σημεία Εξυπηρέτησης</a></li>

        <li style="width: 210px;" id="menuSearch">
          <form class="navbar-form" role="search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Αναζήτηση" name="q">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
              </div>
            </div>
          </form>
        </li>
      </ul>
    </div>
  </div>
  
</div>