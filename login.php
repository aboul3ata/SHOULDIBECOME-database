<?php

session_start();

//if( isset($_SESSION['user_id']) ){
//	header("Location: /");
//}

require 'database.php';

if(!empty($_POST['email']) && !empty($_POST['password'])):
	
	$records = $conn->prepare('SELECT id,email,password FROM users WHERE email = :email');
	$records->bindParam(':email', $_POST['email']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$message = '';

	if(count($results) > 0 && password_verify($_POST['password'], $results['password']) ){

		$_SESSION['user_id'] = $results['id'];
		header("Location:loggedin.php");

	} else {
		$message = 'Sorry, those credentials do not match';
	}

endif;

?>

<!DOCTYPE html>
<html class="html-login">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
	<title>ShouldIBecome-Login</title>    
</head>

<body class="body-login">
    
        
<!-- Wanted to put this message in a modal however i am not yet very confartable with php--> 
	<?php if(!empty($message)): ?>
		<p><?= $message ?></p>
	<?php endif; ?>    


<div class="container text-center med-padding sign-in-header">
	<h1>Login</h1>
	<span>or <a href="register.php">register here</a></span>    
</div>     

    
  <div class="container ">

        <div class="card card-container col-md-4 col-md-offset-4">
            <div class="col-md-8 col-md-offset-2">
            <img id="profile-img" class="profile-img-card center-block img-responsive" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="login.php" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
                <div id="remember" class="checkbox">
                    <label class="white">
                        <input type="checkbox" value="remember-me" > Remember me
                    </label>
                </div>
                <button class="btn btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password white">
                Forgot the password?
            </a>
        </div>
        </div><!-- /card-container -->
    </div><!-- /container -->

    
</body>
</html>