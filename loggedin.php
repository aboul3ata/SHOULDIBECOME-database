<?php

session_start();

require 'database.php';

if( isset($_SESSION['user_id']) ){

	$records = $conn->prepare('SELECT id,email,password FROM users WHERE id = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$user = NULL;

	if( count($results) > 0){
		$user = $results;
	}

}

?>

<!DOCTYPE html>
<html>

  <head>
<!-- using bootstrap card (availble in V4) -->       

 
<!--    Add Meta tag for description-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">  
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">

    <title> ShouldIBecome </title>

   <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
 <!--  This fixes the issue with Glyphicons not displaying when using customizable bootstrap   -->
        <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="responsive-menu.min.css">

    
    
    
    
    </head>
  
  
    
    
    
    
    <body>  
    	<?php if( !empty($user) ): ?>


	<?php else: ?>

		<h1>Please Login or Register</h1>
		<a href="login.php">Login</a> or
		<a href="register.php">Register</a>

	<?php endif; ?>        


<div class="row"> 

<div class="logo col-md-3 med-padding  ">
<image src="pics/logo3.png"  class=" img-responsive small-padding" ></image>

</div>  

<div class="move-down-med  menu-logged-in">   
    
   
    <div class="menu col-md-1  col-md-offset-7 move-down-tiny  not-mobile-friendly">  
        <div class="dropdown">
           <img src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" width="70%" class="clickable img-circle dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">         
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">Profile</a></li>
            <li><a href="#">Messages</a></li>
            <li><a href="#">Mentors</a></li>              
            <li role="separator" class="divider"></li>
            <li><a class="color-secondary" width="100%" href="index.php" >Log out</a></li>
          </ul>
        </div>
     </div>      
    
    <div class="col-xs-1  text-left not-mobile-friendly">   
        <h3> <a class="glyphicon glyphicon-envelope" href="index.php"  ></a></h3>
    </div> 

</div><!-- div  menu without logo --> 
</div> <!-- div entire menu -->  
 
<h1 class="text-center margin-bottom small-padding"> Welcome <?= $user['email']; ?> </h1>    
               
<div class="row">
<div class="col-md-3 col-md-offset-1 col-xs-12 margin-bottom">   
<div class="w3-container">

  <div class="w3-card-4" style="width:100%">
    <header class="w3-container w3-light-grey">
      <h3>John Doe</h3>
    </header>
    <div class="w3-container">
      <hr>
      <img src="pics/quotes_pic/dani.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <p>CEO at Mighty Schools. Marketing and Advertising. Seeking a new job and new opportunities.</p><br>
          <p>CEO at Mighty Schools. Marketing and Advertising. Seeking a new job and new opportunities.</p><br>    
    </div>
            
    <button class="w3-btn-block w3-dark-grey">+ Connect</button>
  </div>
</div>            
 </div><!-- end of card-->
    
<div class="col-md-3 col-xs-12 margin-bottom">   
<div class="w3-container">

  <div class="w3-card-4" style="width:100%">
    <header class="w3-container w3-light-grey">
      <h3>John Doe</h3>
    </header>
    <div class="w3-container">
      <hr>
      <img src="pics/quotes_pic/dani.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <p>CEO at Mighty Schools. Marketing and Advertising. Seeking a new job and new opportunities.</p><br>
          <p>CEO at Mighty Schools. Marketing and Advertising. Seeking a new job and new opportunities.</p><br>    
    </div>
            
    <button class="w3-btn-block w3-dark-grey">+ Connect</button>
  </div>
</div>            
 </div><!-- end of card-->  
    
    
    
    
    
<div class="col-md-3 col-xs-12 margin-bottom">   
<div class="w3-container">

  <div class="w3-card-4" style="width:100%">
    <header class="w3-container w3-light-grey">
      <h3>John Doe</h3>
    </header>
    <div class="w3-container">
      <hr>
      <img src="pics/quotes_pic/dani.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <p>CEO at Mighty Schools. Marketing and Advertising. Seeking a new job and new opportunities.</p><br>
          <p>CEO at Mighty Schools. Marketing and Advertising. Seeking a new job and new opportunities.</p><br>    
    </div>
            
    <button class="w3-btn-block w3-dark-grey">+ Connect</button>
  </div>
</div>            
 </div><!-- end of card-->        
 </div>   <!-- end of card row-->

       

<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
        
<script src="responsive-menu.js"></script>        
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
        
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>   
        
<script type='text/javascript' src="vendor/FlowType.JS-master/flowtype.js"> </script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootcards/1.0.0/js/bootcards.min.js"></script>
<script src="js/script.js"> </script>

  </body>
    
     
</html>


