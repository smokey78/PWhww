<?php
	include("postcreatedacc.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="loginStyle.css">
	<title>Doc</title>
</head>
<body>
	<div class="login signup" id="form">
	
		<h1 class="text-center">Sign up</h1>
		<form class="needs-validation" name="form" action="signup.php" method="POST">
		
			<div class="form-group was-validated">
				<label class="form-laber" for="email">Email adress: </label>
				<input class="form-control" type="email" id="email" name="email" required>
				<div class="invalid-feedback">
					Please enter your email address
				</div>
			</div>
			
			<div class="form-group was-validated">
				<label class="form-laber" for="pwd">Password: </label>
				<input class="form-control" type="password" id="pwd" name="pwd" required>
				<div class="invalid-feedback">
					Please enter your password
				</div>
			</div>
			
			<div class="form-group was-validated">
				<label class="form-laber" for="repeatedpwd">Confirm password: </label>
				<input class="form-control" type="password" id="repeatedpwd" name="repeatedpwd" required>
				<div class="invalid-feedback">
					Please re-enter your password
				</div>
			</div>
			
			<div class="form-group">
				<a href="index.php">Already a member? Log in</a>
			</div>
			
			<input class="btn btn-success w-100" type="submit" value="Sign up" name="signup">
			
		</form>
	</div>
</body>
</html>