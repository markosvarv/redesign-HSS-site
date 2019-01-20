<?php 
	include ('../auth/db_connection.php');
	include ('../auth/_session.php');
	only_loggedin($conn);

	$action = $_GET['a'];


	if( !in_array($action, ['add_monthly_insurance'])){
		echo 'Invalid Action!';
		return;
	}

	function add_monthly_insurance($conn, $employer, $employee_amka, $salary, $year, $month){
		if($employer==''||$employee_amka==''||$salary==''||$year==''||$month==''){
			$_SESSION['flush']['error'] = 'Παρακαλώ συμπληρώστε όλα τα πεδία!';
			return false;
		}
		$res = $conn->prepare("SELECT id FROM users WHERE amka = :amka LIMIT 1");
		$res->execute(array(':amka' => $employee_amka ));
		if ($res->rowCount() == 1){
			$employee =  $res->fetchAll(PDO::FETCH_ASSOC);
			$employee = $employee[0];
		}else{
			$_SESSION['flush']['error'] = 'Το ΑΜΚΑ είναι λάθος!';
			return false;
		}
		$res = $conn->prepare("INSERT INTO insurance_month (employee, employer, salary, year, month) VALUES (:employee, :employer, :salary, :year, :month)");
		$res->execute(array(':employee' => $employee['id'], ':employer' => $employer, ':salary' => $salary, ':year' => $year, ':month' => $month));
		if ($res->rowCount() == 1){
			return true;
		}else{
			return false;
		}
	}

	// function register($conn, $firstName, $lastName, $email, $password, $passwordConfirmation, $birthday){
	// 	if($firstName==''||$lastName==''||$email==''||$password==''||$birthday==''||$passwordConfirmation==''){
	// 		$_SESSION['flush']['error'] = 'Παρακαλώ συμπληρώστε όλα τα πεδία!';
	// 		return false;
	// 	}
	// 	if($password!=$passwordConfirmation){
	// 		$_SESSION['flush']['error'] = 'Οι κωδικοί δεν ταιριάζουν!';
	// 		return false;
	// 	}
	// 	$res = $conn->prepare("INSERT INTO users (firstName, lastName, email, password) VALUES (:fName, :lName, :email, :password)");
	// 	$res->execute(array(':email' => $email, ':password' => hash('sha256', $password), ':fName' => $firstName, ':lName' => $lastName));
	// 	if ($res->rowCount() == 1){
	// 		return true;
	// 	}else{
	// 		return false;
	// 	}
	// }
	foreach($_POST as $p_key => $p_value){
		$_SESSION["insurance_".$p_key] = $p_value;
	}

	if($action == "add_monthly_insurance" && $_SERVER['REQUEST_METHOD'] == 'POST'){
	 	if (add_monthly_insurance($conn, $user['id'], $_POST['employee_amka'], $_POST['salary'], $_POST['year'], $_POST['month'])){
			$_SESSION['flush']['success'] = 'Η ασφάλιση προστέθηκε!';
			header("Location: /eservices/request.php");
			die();
		}else{
			header("Location: /eservices/request.php");
			die();
		}

	}
?>