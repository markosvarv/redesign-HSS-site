<?php 
  include ('_session.php');
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

    <title>IKA | Υπολογισμός Σύνταξης</title>

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
  <style type="text/css">
  	@media print {
	  body * {
	    visibility: hidden;
	  }
	  #data_entry, #data_entry * {
	    visibility: visible;
	  }
	  #data_entry {
	    position: absolute;
	    left: 0;
	    top: 0;
	  }
	}
  </style>

  <body>

    <div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <?php include('./_menu.php'); ?>
      <?php include('./flush.php'); ?>
      <div id="body">
		<ul class="breadcrumb">
			<li><a href="#">Αρχική Σελίδα</a></li>
			<li>Υπολογισμός Σύνταξης</li>
		</ul>

		<h1>Υπολογισμός Βασικού Ποσού Σύνταξης</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac ipsum lacus. Integer rutrum mauris velit, non accumsan dolor congue ac. Aenean gravida diam neque, at cursus nisl placerat a. Integer sit amet risus congue, fringilla odio vel, feugiat leo. Donec rhoncus mauris ac velit pulvinar, non efficitur ipsum consequat</p>
		<?php if (!isset($user)) : ?>
			<div class="jumbotron" style="padding: 20px;">
				<p class="lead" style=""><span class="glyphicon glyphicon-info-sign"></span> <a href="/login.php?ref=ypologismos_syntaksis.php">	Συνδέσου και υπολόγισε την συνταξή σου αυτόματα.</a></p>
			</div>
      	<?php endif; ?>


      	<?php if (!isset($user)) : ?>
			<select style="font-size: 18px;width: 100%" id="organismos" >
				<option value="">Επιλέξτε οργανισμό ασφάλισης</option>
				<option value="1">ΙΚΑ</option>
				<option value="2">ΕΤΑΜ</option>
			</select>
			<select style="font-size: 18px;width: 100%;margin-top: 10px;" id="type">
				<option value="">Επιλέξτε τύπο σύνταξης</option>
				<option value="1">Κανονική</option>
				<option value="2">Αναπηρίας</option>
			</select>

			<div id="data_entry" style="padding: 10px;display: none;">
				<hr>
				<h3>Εισαγωγή στοιχείων</h3>
				<form id="ypologismos">
				<div class="row">
					<div class="col-md-3">
						<h5>Σύνολο ημερών εργασίας <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" title="Hooray!"></span></h5>
					</div>
					<div class="col-md-4">
						<input class="form-control" type="number" id="days_total" required min="0" max="29200">
					</div>
				</div>
			
				<div class="row" style="margin-top:10px;">
					<div class="col-md-3">
						<h5>Αποδοχές και ημέρες εργασίας ανα έτος <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" title="Hooray!"></span></h5>
					</div>
					<div class="col-md-9">
					
					<table class="table table-striped" id="stoixeia_table">
						<thead>
							<tr><th>Έτος</th><th>Αποδοχές σε ευρώ</th><th>Ημέρες εργασίας</th><th></th></tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<select style="width: 100%;" class="form-control" required>
										<?php
											for ($i=2017; $i >= 1980; $i--) { 
												echo "<option>".$i."</option>\n";
											}
										?>
									</select>
								</td>
								<td>
									<input class="form-control" type="number" required>
								</td>
								<td>
									<input class="form-control" type="number" max="365" min="0" required>
								</td>
								<td>
									
								</td>

							</tr>
						</tbody>
					</table>
					</div>
				</div>

				<div class="row" style="margin-top:10px;">
					<div class="col-md-3">
						<h4>Σημειώσεις</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac ipsum lacus. Integer rutrum mauris velit, non accumsan dolor congue ac. Aenean gravida diam neque, at cursus nisl placerat a. Integer sit amet risus congue, fringilla odio vel, feugiat leo. Donec rhoncus mauris ac velit pulvinar, non efficitur ipsum consequat</p>
					</div>
					<div class="col-md-5">
						<a href="#" id="add_year">
							<span class="glyphicon glyphicon-plus-sign"></span> Προσθήκη έτους
						</a>
					</div>
					<div class="col-md-4">
						<input type="submit" value="Υπολογισμός" class="btn btn-primary btn-lg btn-block" >
					</div>
					<div class="col-md-3"></div>
					<div class="col-md-9">
						<br/>
						<div class="panel panel-default" style="display: none;" id="apotelesmata">
						  <div class="panel-heading">Αποτελέσματα</div>
						  <div class="panel-body">
						  	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac ipsum lacus. Integer rutrum mauris velit, non accumsan dolor congue ac. Aenean gravida diam neque, at cursus nisl placerat a.</p>
						  	<h5>Τελικό πορό σύνταξης: 8569 ευρώ</h5>
						  	<a style="float: right; margin-left: 15px;" href="#" onclick="print();" class="btn btn-primary">Εκτύπωση</a>
						  	<a style="float: right;" href="/login.php" class="btn btn-default">Αποθήκευση Στοιχείων στον λογαριασμό μου</a>
						  </div>
						</div>
					</div>
				</div>
				</form>
			</div>
      	<?php endif; ?>

      </div>
      <?php include('./_footer.php'); ?>
      <script type="text/javascript">
        $("#organismos, #type").change(function() {
        	if($("#organismos").val() && $("#type").val() ){
        		$("#data_entry").show();	
        	}
		});

		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip();   
		});

		$("#add_year").click(function() {
        	$("#stoixeia_table > tbody").append('<tr> <td> <select style="width: 100%;" class="form-control" required> <?php for ($i=2017; $i >= 1980; $i--) {echo "<option>".$i."</option>"; } ?> </select> </td> <td> <input class="form-control" type="number" required> </td> <td> <input class="form-control" type="number" max="365" min="0" required> </td> <td> <a class="remove_row" href="#"><span class="glyphicon glyphicon-remove-sign"></span></a> </td> </tr>'); 
        });

		$("#stoixeia_table").on("click", ".remove_row", function() {
			$(this).parent().parent().remove();
		});


		function PrintElem(elem)
		{
		    var mywindow = window.open('', 'PRINT', 'height=1000,width=800');

		    mywindow.document.write('<html><head><title>' + document.title  + '</title>');
		    mywindow.document.write('</head><body >');
		    mywindow.document.write('<h1>' + document.title  + '</h1>');
		    mywindow.document.write(document.getElementById(elem).innerHTML);
		    mywindow.document.write('</body></html>');

		    mywindow.document.close(); // necessary for IE >= 10
		    mywindow.focus(); // necessary for IE >= 10*/

		    mywindow.print();
		    mywindow.close();

		    return true;
		}

		$("#ypologismos").submit(function() {
        	$("#apotelesmata").show(); 
        });
      </script>
  </body>
</html>
