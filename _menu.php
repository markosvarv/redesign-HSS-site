<<<<<<< HEAD
=======
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

>>>>>>> 148a21c34a32b4046fe81386790a493595735229
<div class="right-tools pull-right">
  <span id="access">Μέγεθος Γραμμάτων <input  type="range" min="1" max="2" value="1" step="0.5" onchange="$('#body').attr('style', 'font-size: ' + (this.value*100).toString() + '% !important');" ></span>
  <span id="access">Φωνητική Λειτουργία <span style="cursor: pointer;" class="glyphicon glyphicon-headphones"></span></span>
  <br>
  <span class="pull-right" style="border: solid 1px;padding: 5px;border-radius: 2px;"> 
<<<<<<< HEAD
    <a href="">Σύνδεση</a> | <a href="">Εγγραφή</a>  <span id="phone_and_email">| <span class="glyphicon glyphicon-earphone"></span> 6982140569 <span class="glyphicon glyphicon-envelope"></span> info@ika.gr </span>| <a href="">English</a>
=======
    
    <?php if (isset($user)): ?>
      <span class="glyphicon glyphicon-user"></span> <a href="/update_profile.php"><?= $user['firstName'] ?> <?= $user['lastName'] ?></a> / <a href="/authenticate.php?a=logout">Αποσύνδεση</a> 
    <?php else: ?>
      <a href="/login.php">Σύνδεση</a> / <a href="/register.php">Εγγραφή</a>  
    <?php endif; ?>

    <span id="phone_and_email">| <strong><span class="glyphicon glyphicon-earphone"></span>21045454545 <span class="glyphicon glyphicon-envelope"></span> info@ika.gr </span></strong>| <a href="">English</a>
>>>>>>> 148a21c34a32b4046fe81386790a493595735229
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
<<<<<<< HEAD
                          <h4 class="media-heading"><a href="/">Ηλεκτρονικές Υπηρεσίες</a></h4>Όπως: Εκδοση ΑΜΚΑ, ..., ....
=======
                          <h4 class="media-heading"><a href="/">Ηλεκτρονικές Υπηρεσίες</a></h4>Όπως: Υπολογισμός Ενσήμων, ..., ....
>>>>>>> 148a21c34a32b4046fe81386790a493595735229
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <h4 class="media-heading"><a href="/">Συχνές Ερωτήσεις/Δικαιολογητικά</a></h4>Όπως: Εκδοση ΑΜΚΑ, ..., ....
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <h4>Δημοφιλέις Εργασίες</h4>
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
<<<<<<< HEAD
                    <form class="" role="search">
                      <h5>Αναζήτηση</h5>
                      <div class="input-group" style="width: 100%;">
=======
                    <form class="" role="search" action="search.php">
                      <h5>Αναζήτηση</h5>
                      <div class="input-group" style="width: 100%;">
                        <input type="hidden" name="c" value="Ασφαλισμένοι">
>>>>>>> 148a21c34a32b4046fe81386790a493595735229
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
<<<<<<< HEAD
                <ul class="media-list">
                  <li class="media"><a href="#" class="pull-right"><img src="demo/img/64x64.gif" alt="64x64" class="media-object"></a>
                    <div class="media-body">
                      <h4 class="media-heading">Media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante.
                    </div>
                  </li>
                  <li class="media"><a href="#" class="pull-right"><img src="demo/img/64x64.gif" alt="64x64" class="media-object"></a>
                    <div class="media-body">
                      <h4 class="media-heading">Media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.
                    </div>
                  </li>
                </ul>
=======
                
                <div class="row">
                  <div class="col-md-6">
                    <ul class="media-list">
                      <li class="media">
                        <div class="media-body">
                          <h4 class="media-heading"><a href="/">Ηλεκτρονικές Υπηρεσίες</a></h4>Όπως: Καταχώριση Υπαλλήλων, ..., ....
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <h4 class="media-heading"><a href="/">Συχνές Ερωτήσεις/Δικαιολογητικά</a></h4>Όπως: Ασφάλιση Υπαλλήλων, ..., ....
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <h4>Δημοφιλέις Εργασίες</h4>
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
                
>>>>>>> 148a21c34a32b4046fe81386790a493595735229
              </div>
            </li>
          </ul>
        </li>

        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Συντάξεις<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li>
              <div class="yamm-content">
<<<<<<< HEAD
                <ul class="media-list">
                  <li class="media"><a href="#" class="pull-right"><img src="demo/img/64x64.gif" alt="64x64" class="media-object"></a>
                    <div class="media-body">
                      <h4 class="media-heading">Media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante.
                    </div>
                  </li>
                  <li class="media"><a href="#" class="pull-right"><img src="demo/img/64x64.gif" alt="64x64" class="media-object"></a>
                    <div class="media-body">
                      <h4 class="media-heading">Media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.
                    </div>
                  </li>
                </ul>
=======
                
                <div class="row">
                  <div class="col-md-6">
                    <ul class="media-list">
                      <li class="media">
                        <div class="media-body">
                          <h4 class="media-heading"><a href="/">Ηλεκτρονικές Υπηρεσίες</a></h4>Όπως: Υπολογισμός Σύνταξης, ..., ....
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <h4 class="media-heading"><a href="/">Συχνές Ερωτήσεις/Δικαιολογητικά</a></h4>Όπως: Δικαιολογητικά χορήγησης σύνταξης, ..., ....
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <h4>Δημοφιλέις Εργασίες</h4>
                    <ul style="list-style-type: none;">
                      <li>
                        <h5 class="media-heading"><a href="/">Υπολογισμός Σύνταξης</a></h5>
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
                
>>>>>>> 148a21c34a32b4046fe81386790a493595735229
              </div>
            </li>
          </ul>
        </li>

        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Συνεργάτες<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li>
              <div class="yamm-content">
<<<<<<< HEAD
                <ul class="media-list">
                  <li class="media"><a href="#" class="pull-right"><img src="demo/img/64x64.gif" alt="64x64" class="media-object"></a>
                    <div class="media-body">
                      <h4 class="media-heading">Media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante.
                    </div>
                  </li>
                  <li class="media"><a href="#" class="pull-right"><img src="demo/img/64x64.gif" alt="64x64" class="media-object"></a>
                    <div class="media-body">
                      <h4 class="media-heading">Media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.
                    </div>
                  </li>
                </ul>
=======
                
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
                
>>>>>>> 148a21c34a32b4046fe81386790a493595735229
              </div>
            </li>
          </ul>
        </li>

<<<<<<< HEAD
        <li><a href="/contact_points.html" class="dropdown-toggle">Σημεία Εξυπηρέτησης</a></li>
=======
        <li><a href="/ServicePoints.php" class="dropdown-toggle">Σημεία Εξυπηρέτησης</a></li>
>>>>>>> 148a21c34a32b4046fe81386790a493595735229

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