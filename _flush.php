<?php
	session_start();
	if ($_SESSION['flush'] && $_SESSION['flush']['error']){
		echo '<div class="alert alert-danger">
  			<strong>Error!</strong> '.$_SESSION['flush']['error'].'
		</div>';
	}
	if ($_SESSION['flush'] && $_SESSION['flush']['success']){
		echo '<div class="alert alert-success">
  			<strong>Success!</strong> '.$_SESSION['flush']['success'].'
		</div>';
	}
	$_SESSION['flush'] = null;
?>