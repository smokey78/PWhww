<?php
	session_start();
	$email    = "";
	$errors = array(); 
	$db = mysqli_connect('localhost', 'root', 'root', 'logindb');

	if (isset($_POST['signup'])) {
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['pwd']);
		$password_2 = mysqli_real_escape_string($db, $_POST['repeatedpwd']);
		
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		$user_check_query = "SELECT * FROM login WHERE email='$email' LIMIT 1";
		$result = mysqli_query($db, $user_check_query);
		$user = mysqli_fetch_assoc($result);
  
		if ($user) {
			if ($user['email'] === $email) {
				array_push($errors, "email already exists");
			}
		}

		if (count($errors) == 0) {
			$password = $password_1;

			$query = "INSERT INTO login (email, password) 	
					VALUES('$email', '$password')";
			mysqli_query($db, $query);
			$_SESSION['email'] = $email;
			$_SESSION['success'] = "You are now signed up";
			header('location: welcome.php');
		}
	}
?>