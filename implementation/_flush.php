<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	if ($_SESSION['flush'] && $_SESSION['flush']['error']){
		echo '<div class="alert alert-danger">
  			'.$_SESSION['flush']['error'].'
		</div>';
	}
	if ($_SESSION['flush'] && $_SESSION['flush']['success']){
		echo '<div class="alert alert-success">
  			'.$_SESSION['flush']['success'].'
		</div>';
	}
	$_SESSION['flush'] = null;
?>