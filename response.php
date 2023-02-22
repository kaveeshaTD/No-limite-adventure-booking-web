<?php
//include connection file 
include_once("connection.php");
$db = new dbObj();
$connString =  $db->getConnstring();

$params = $_REQUEST;
$action = $params['action'] !='' ? $params['action'] : '';
$responseCls = new Response($connString);

switch($action) {
	case 'signUp':
		$responseCls->signUp();
	break;
	case 'login':
		$responseCls->login();
	break;
	case 'logout':
		$responseCls->logout();
	break;
	case 'booking':
		$responseCls->booking();
	break;
	case 'contact':
		$responseCls->contact();
	break;
	case 'confirm':
		$responseCls->confirm();
	break;
	case 'reset':
		$responseCls->reset();
	break;
	default:
 return;
}


class Response {
	protected $conn;
	protected $data = array();
	function __construct($connString) {
		$this->conn = $connString;
	}

	function signUp() {
		if(isset($_POST['sign-up'])) {
			$f_name = $_POST['f_name'];
			$l_name = $_POST['l_name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$sql1 = "SELECT * FROM users WHERE email='$email'";
			$resultset1 = mysqli_query($this->conn, $sql1) or die("database error:". mysqli_error($this->conn));
			if(mysqli_num_rows($resultset1)!=0){
				echo "Ohhh ! Email already exists...";
			}else{
			$sql2 = "INSERT INTO users (`first_name`, `last_name`, `email`, `password`) VALUES ('$f_name', '$l_name', '$email', '$password')";
			$resultset2 = mysqli_query($this->conn, $sql2) or die("database error:". mysqli_error($this->conn));
			
			if($resultset2){
				echo "1";
			} else {
				echo "Ohhh ! Something Went Wrong..."; // wrong details
			}}
		}
	}

	function reset() {
		if(isset($_POST['reset-submit'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];
			$sql1 = "SELECT * FROM users WHERE email='$email'";
			$resultset1 = mysqli_query($this->conn, $sql1) or die("database error:". mysqli_error($this->conn));
			if(mysqli_num_rows($resultset1)==0){
				echo "Ohhh ! Account not found with Email...";
			}else{
			$sql2 = "UPDATE users SET password = '$password' where email = '$email'";
			$resultset2 = mysqli_query($this->conn, $sql2) or die("database error:". mysqli_error($this->conn));
			
			if($resultset2){
				echo "1";
			} else {
				echo "Ohhh ! Something Went Wrong..."; // wrong details
			}}
		}
	}
	
	function login() {
		if(isset($_POST['login-submit'])) {
			$user_email = $_POST['username'];
			$user_password = $_POST['password'];
			$sql = "SELECT id, password, email,role,first_name FROM users WHERE email='$user_email'";
			$resultset = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
			$row = mysqli_fetch_assoc($resultset);
			if($user_password == $row['password']){
				$_SESSION['user_session'] = $row['first_name'];
				$_SESSION['user_id'] = $row['id'];
				if($row['role']=="USER"){
					echo "1";
				}else{
					echo "2";
				}
			} else {
				echo "Ohhh ! Wrong Credential."; // wrong details
			}
		}
	}
	function logout() {
		unset($_SESSION['user_session']);
		if(session_destroy()) {
			header("Location: index.php");
		}
	}

	

	function booking() {
		if(isset($_POST['booking-submit'])) {
			$f_name = $_POST['f_name'];
			$l_name = $_POST['l_name'];
			$address = $_POST['address'];
			$date = $_POST['date'];
			$contact = $_POST['contact'];
			$id = $_POST['id'];
			$userId = $_SESSION['user_id'];
			$package = $_POST['package'];

			$sql = "SELECT id FROM pakages WHERE name='$package'";
			$resultset = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
			$packageId = mysqli_fetch_array($resultset)['id'];

			$sql1 = "SELECT * FROM book WHERE BookDate='$date'";
			$resultset1 = mysqli_query($this->conn, $sql1) or die("database error:". mysqli_error($this->conn));

			if(mysqli_num_rows($resultset1)<30){
				$sql2 = "INSERT INTO book (`pakage`,`contactNum`, `BookDate`, `nicOrPassport`, `UserID`, `address`) VALUES ( '$packageId', '$contact', '$date', '$id', '$userId', '$address')";
				$resultset2 = mysqli_query($this->conn, $sql2) or die("database error:". mysqli_error($this->conn));			
			
			if($resultset2){
				echo "1";
			} else {
				echo "Ohhh ! Something Went Wrong"; // wrong details
			}
		}else{
			echo "Ohhh ! limit for the booking is exceeded for selected date..."; 
		}
		}
	}

	function contact() {
		if(isset($_POST['contact-submit'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			$sql = "INSERT INTO contact_us (`name`, `email`, `message`) VALUES ( '$name', '$email', '$message')";
			$resultset = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
			
			if($resultset){
				echo "1";
			} else {
				echo "Ohhh ! Something Went Wrong"; // wrong details
			}
		}
	}

	function confirm() {
			$driver = $_GET['driver'];
			$guide = $_GET['guide'];
			$vehicle = $_GET['vehicle'];
			$id = $_GET['id'];
			$sql = "UPDATE book SET Driver_name = '$driver', Guid_name = '$guide', Vehicle_id= '$vehicle', `status`= 'CONFIRMED' where book_id = '$id'";
			$resultset = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
			
			if($resultset){
				echo "1";
			} else {
				echo "Ohhh ! Something Went Wrong"; // wrong details
			}
	}
}
?>
	