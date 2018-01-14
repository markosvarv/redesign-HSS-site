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
                    Collapsible Group 1</a>
                  </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                  minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                  commodo consequat.</div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                    Collapsible Group 2</a>
                  </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                  minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                  commodo consequat.</div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                    Collapsible Group 3</a>
                  </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                  minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                  commodo consequat.</div>
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
