<?php 
	include_once('db_connection.php');
	$user = null ;
	session_start();
	$current_page = basename($_SERVER['PHP_SELF']);
	if( $current_page != "login.php" &&  $current_page != "register.php" && $current_page != "index.php" ){
		$_SESSION['last_page'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	}

	if(isset($_SESSION["user_id"])){
		$res = $conn->prepare("SELECT * FROM users WHERE id = :id LIMIT 1");
		$res->execute(array(':id' => $_SESSION["user_id"]));
		if ($res->rowCount() == 1){
			$user = ($res->fetchAll(PDO::FETCH_ASSOC))[0];
		}
	}

	function only_loggedin($conn)
	{	
		global $user;
		if (!isset($_SESSION["user_id"]) or $user==null) {
			$_SESSION['flush']['error'] = "Παρακαλώ συνδεθείτε πρώτα!";
			header("Location: /auth/login.php");
			die();
		}
	}
?>