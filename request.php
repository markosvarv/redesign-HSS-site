<?php
include ('_session.php');
only_loggedin($conn);
?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>

    <!-- Bootstrap core CSS -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
    <![endif]-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Request</title>

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

</head>
<body>


<div class="container">

    <!-- The justified navigation menu is meant for single line per list item.
         Multiple lines will require custom code not provided by Bootstrap. -->
    <?php include('./_menu.php'); ?>
    <?php include('./flush.php'); ?>
    <div id="body">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Αρχική Σελίδα</a></li>
            <li class="breadcrumb-item active">Υποβολή ενσήμων</li>
        </ol>


        <div class = "page-header">
            <h3>Υποβολή ενσήμων</h3>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading"> <h4>Στοιχεία Εργαζομένου</h4></div>
            <div class="panel-body">
                <form class="form-horizontal" >
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputAMKA-employee" class="col-sm-4 control-label">ΑΜΚΑ Εργαζομένου:</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" id="inputAMKA-employee">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputSalary" class="col-sm-4 control-label">Μισθός:</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" id="inputSalary">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputMonths" class="col-sm-2 control-label">Μήνας:</label>
                                <div class="col-sm-6">
                                    <select class="form-control" required>
                                        <option disabled selected value style="display:none">Επιλέξτε Μήνα</option>
                                        <?php for ($month = 1; $month <= 12; $month++) { ?>
                                            <option value="<?php echo strlen($month)==1 ? '0'.$month : $month; ?>"><?php echo strlen($month)==1 ? '0'.$month : $month; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputMonths" class="col-sm-2 control-label">Έτος:</label>
                                <div class="col-sm-6">
                                    <select class="form-control" required>
                                        <?php
                                        for ($i=2017; $i >= 1980; $i--) {
                                            echo "<option>".$i."</option>\n";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 pull-right">
                            <button type="submit" class="btn btn-primary btn-lg">Υποβολή</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <?php include('./_footer.php'); ?>
    <script>
        $(document).on('click', '.yamm .dropdown-menu', function(e) {
            e.stopPropagation()
        });

    </script>

</body>
</html>
