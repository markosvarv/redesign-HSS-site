<?php 
	include ('db_connection.php');
	$action = $_GET['a'];

	if( !in_array($action, ['login', 'register', 'update']) || $_SERVER['REQUEST_METHOD'] != 'POST'){
		echo 'Invalid Action!';
		return;
	}

	function login($conn, $email, $password){
		if($email==''||$password==''){
			$_SESSION['flush']['error'] = 'Παρακαλώ συμπληρώστε όλα τα πεδία.';
			return false;
		}
		$res = $conn->prepare("SELECT id FROM users WHERE email = :email AND password = :password LIMIT 1");
		$res->execute(array(':email' => $email, ':password' => hash('sha256', $password) ));
		if ($res->rowCount() == 1){
			$result =  $res->fetchAll(PDO::FETCH_ASSOC);
			$_SESSION["user_id"] = $result[0]['id'];
			return true;
		}else{
			return false;
		}
	}

	function register($conn, $firstName, $lastName, $email, $password, $birthday){
		if($firstName==''||$lastName==''||$email==''||$password==''||$birthday==''){
			$_SESSION['flush']['error'] = 'Παρακαλώ συμπληρώστε όλα τα πεδία.';
			return false;
		}
		$res = $conn->prepare("INSERT INTO users (firstName, lastName, email, password) VALUES (:fName, :lName, :email, :password)");
		$res->execute(array(':email' => $email, ':password' => hash('sha256', $password), ':fName' => $firstName, ':lName' => $firstName));
		if ($res->rowCount() == 1){
			$_SESSION['flush']['success'] = "Επιτυχής Εγγραφή!";
			return true;
		}else{
			return false;
		}
	}

	if($action == "login"){
		if (login($conn, $_POST['email'], $_POST['password'])){
			header("Location: /");
			die();
		}
	}elseif ($action == "register") {
		register($conn, 'spyros', 'avlonitis', $_POST['email'], $_POST['password'], '96-05-01');
	}
?>