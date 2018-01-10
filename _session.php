<?php 
	include ('db_connection.php');

	function only_loggedin()
	{
		if(!isset($_SESSION["user_id"])){
		$_SESSION['flush']['error'] = "Παρακαλώ <a style=\"color:#a94442;font-weight:bold;\" href=\"/login.php\">συνδεθείτε</a> πρώτα!";
		header("Location: /");
		die();
		}else{
			$res = $conn->prepare("SELECT * FROM users WHERE id = :id LIMIT 1");
			$res->execute(array(':id' => $_SESSION["user_id"]));
			if ($res->rowCount() == 1){
				$user = ($res->fetchAll(PDO::FETCH_ASSOC))[0];
			}else{
				$_SESSION['flush']['error'] = "Παρακαλώ <a style=\"color:#a94442;font-weight:bold;\" href=\"/login.php\">συνδεθείτε</a> πρώτα!";
				header("Location: /");
				die();
			}
		}
	}
?>