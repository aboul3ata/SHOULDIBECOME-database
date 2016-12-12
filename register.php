<?php

session_start();

//if( isset($_SESSION['user_id']) ){
//	header("Location: /");
//}

require 'database.php';

$message = '';

if(!empty($_POST['email']) && !empty($_POST['password'])):
	
	// Enter the new user in the database
	$sql = "INSERT INTO users (email,name, password) VALUES (:email,:name,:password)";
	$stmt = $conn->prepare($sql);

	$stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':name', $_POST['name']);
	$stmt->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));

	if( $stmt->execute() ):
		$message = 'Successfully created new user';
        $_SESSION['user_id'] = $results['id'];
		header("Location:login.php");
	else:
		$message = 'Sorry there must have been an issue creating your account';
	endif;

endif;

?>

<!DOCTYPE html>
<html class="html-login">
<head>
	<title>ShouldIBecome-Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="body-login">



	<?php if(!empty($message)): ?>
		<p><?= $message ?></p>
	<?php endif; ?>
<div class="container text-center med-padding sign-in-header">
	<h1>Sign up</h1>
	<span>or <a href="login.php">Login</a></span>    
</div>     

    
  <div class="container ">

        <div class="card card-container col-md-4 col-md-offset-4">
            <div class="col-md-8 col-md-offset-2">
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="register.php" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="name" id="inputName" class="form-control margin-vertical" placeholder="Full Name" required autofocus name="name">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email">                
                <input type="password" id="inputPassword" class="form-control margin-vertical" placeholder="Password" required name="password">
                <input type="password" id="inputconfirmPassword" class="form-control" placeholder="Confirm Password" required name="confirmpassword">
                <div id="remember" class="checkbox">
                    <label class="white">
                        <input type="checkbox" value="remember-me" > Remember me
                    </label>
                </div>
                <button class="btn btn-primary btn-block btn-signin" type="submit">Register</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password white">
                Forgot the password?
            </a>
        </div>
        </div><!-- /card-container -->
    </div><!-- /container -->

</body>
</html>