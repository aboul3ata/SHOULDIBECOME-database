<?php

session_start();

require 'database.php';

if( isset($_SESSION['user_id']) ){

	$records = $conn->prepare('SELECT id,email,password,name FROM users WHERE id = :id');
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

 
<!--    Meta tag for description-->
<meta name="Should I become" content="Should I Become offers a unique mentoring experience. It connects students and Fresh Graduates to people well-established in their career whome offer them advice and career guidance.">      
      
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">  
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
 <!--  This fixes the issue with Glyphicons not displaying when using customizable bootstrap   -->
    <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="responsive-menu.min.css">

    
   <title> ShouldIBecome </title>    
    
    
    </head>
  
  
    
    
    
    <body>  
        
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Inbox</h4>
      </div>
      <div class="modal-body">
        You have no new messages
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>  
        
        
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Congratulations!!</h4>
      </div>
      <div class="modal-body">
        Your request has been sent!!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>        
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
           <img src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" width="70%" class="clickable img-circle dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">         
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
        <h3> <a class="glyphicon glyphicon-envelope clickable" id="msgs" data-toggle="modal" data-target="#myModal"  ></a></h3>
    </div> 

</div><!-- div  menu without logo --> 
</div> <!-- div entire menu -->  

<!-- Hamburger menu icon not loading so mobile menu not yet implemented  -->        
<!--
<div class="menu col-md-1  col-md-offset-7 move-down-tiny  ">  
        <div class="dropdown">
            <h3 width="70%" class="clickable glyphicon glyphicon-menu-hamburger dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></h3>         
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">Profile</a></li>
            <li><a href="#">Messages</a></li>
            <li><a href="#">Mentors</a></li>              
            <li role="separator" class="divider"></li>
            <li><a class="color-secondary" width="100%" href="index.php" >Log out</a></li>
          </ul>
        </div>
     </div>              
-->
        
<div class=row> 
<div col-xs-4 col-xs-offset-4> 
<h2 class="text-center move-up-tiny small-padding"> <span class="text-secondary"> Welcome</span> <span class="text-secondary" id="username"> <?= $user['name']; ?> </span>  </h2>           
</div>
</div>            
            
            <!-- Select Career Path-->         
<div class="row"> 
<div class="col-md-5 col-md-offset-3 col-xs-9 margin-right"> 
<h4 class="text-primary center-block "> Please select a career path you would like to know more about </h4>
 </div>   
<div class="menu col-md-2 col-xs-1 margin-right  ">  
    <div class="dropdown">
        <div class="clickable color-secondary dropdown-toggle" id="select-job" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><p class="text-center white " ><span id="txt1">  Profession </span>     <span class="caret"></span> </p>  </div>      
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <li id="ast"><a href="#">Astronaut</a></li>
        <li><a href="#">Basketball Player</a></li>
        <li><a href="#">Dancer</a></li>                         
        <li><a href="#">Doctor</a></li>
        <li id="engineer"><a href="#">Engineer <span class="red2"> (Try me)</span></a></li>
        <li><a href="#">Fashion Blogger</a></li>
        <li id="finance"><a href="#">Finance <span class="red2"> (Try me)</span></a></li>          
        <li><a href="#">Graphic Designer</a></li>
        <li><a href="#">HR specialist </a></li> 
        <li><a href="#">Journalist</a></li>           
      </ul>
    </div>
 </div> 
    
      
</div>  
 
        
<!--mentors list-->         
               
<div class="row move-down-med">
<div class="col-md-3  col-xs-12 margin-bottom eng-card" id="card1">   
<div class="w3-container">

  <div class="w3-card-4" style="width:100%">
    <header class="w3-container  bg-warning tpcrd">  
      <h3 class="text-center">John Doe</h3>
        <div class="col-xs-3>">  
      <div class="premium">           
      <p class="text-center move-down-tiny red"><b> Premium</b></p></div>  
     </div>     
    </header>
    <div class="w3-container">
      <hr>
      <img src="pics/mentors/12670463_1681122332152831_6449868596331004583_n.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <p>Work: <span ><b> Tesla </b> </span> </p>
      <p>Experience: <span ><b class="red"> Manager </b> </span> </p>
          <p class="small-padding"> Head of Smart Innovation Unit at Tesla Motors. Passionate about smart green technologies and their impact on the world.</p><br>    
    </div>
            
    <button class="w3-btn-block bg-primary" id="btn1" data-toggle="modal" data-target="#myModal2" >+ Connect</button>
  </div>
</div>            
 </div><!-- end of card-->
    
    
<div class="col-md-3  col-xs-12 margin-bottom eng-card" id="card2">   
<div class="w3-container">

  <div class="w3-card-4" style="width:100%">
    <header class="w3-container  bg-warning tpcrd">  
      <h3 class="text-center">Ahmed Kheir</h3>
        <div class="col-xs-3>">  
      <div class="premium">           
      <p class="text-center move-down-tiny red"><b> </b></p></div>  
     </div>     
    </header>
    <div class="w3-container">
      <hr>
      <img src="pics/mentors/ahmed%20aboukheir.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <p>Work: <span ><b>  Snapchat </b> </span> </p>
      <p>Experience: <span ><b class="yellow"> +5 Years </b> </span> </p>
          <p class="small-padding">I have been recently hired at Snapchat as part of their core development team. There is a lot of qualified people out there that are just too afraid to apply to big companies. I am here for them!
  </p><br>    
    </div>
            
    <button class="w3-btn-block bg-primary" id="btn2" data-toggle="modal" data-target="#myModal2">+ Connect</button>
  </div>
</div>            
 </div><!-- end of card-->    
    
    
<div class="col-md-3  col-xs-12 margin-bottom eng-card" id="card3">   
<div class="w3-container">

  <div class="w3-card-4" style="width:100%">
    <header class="w3-container  bg-warning tpcrd">  
      <h3 class="text-center"> Liam Kirwan</h3>
        <div class="col-xs-3>">  
      <div class="premium">           
      <p class="text-center move-down-tiny red"><b> </b></p></div>  
     </div>     
    </header>
    <div class="w3-container">
      <hr>
      <img src="pics/mentors/liam.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <p>Work: <span ><b>  M.I.T </b> </span> </p>
      <p>Experience: <span ><b class="green"> PHD student</b> </span> </p>
          <p class="small-padding"> I am currently pursuing my PHD degree at M.I.T in Chip manufacturing. Hit me up if you need any help with application process at M.I.T
  </p><br>    
    </div>
            
    <button class="w3-btn-block bg-primary " id="btn3" data-toggle="modal" data-target="#myModal2" >+ Connect</button>
  </div>
</div>            
 </div><!-- end of card-->   
    
    
<div class="col-md-3  col-xs-12 margin-bottom fin-card" id="card4">   
<div class="w3-container crdsp" >

  <div class="w3-card-4" style="width:100% ">
    <header class="w3-container bg-warning tpcrd">  
      <h3 class="text-center"> Adam Habib</h3>
        <div class="col-xs-3>">  
      <div class="premium">           
      <p class="text-center move-down-tiny red"><b> Premium </b></p></div>  
     </div>     
    </header>
    <div class="w3-container">
      <hr>
      <img src="pics/mentors/habib.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <p>Work: <span ><b>  JP Morgan </b> </span> </p>
      <p>Experience: <span ><b class="red"> Manager</b> </span> </p>
          <p class="small-padding"> I manage a Hedge-Fund of 10 Million dollars. It takes a lot to be able to handle the amount of stress associated with my job. I am here to help you figure out if finance is your thing.
  </p><br>    
    </div>
            
    <button class="w3-btn-block bg-primary" id="btn4" data-toggle="modal" data-target="#myModal2">+ Connect</button>
  </div>
</div>            
 </div><!-- end of card-->      
 
    
    
<div class="col-md-3  col-xs-12 margin-bottom fin-card" id="card5">   
<div class="w3-container">

  <div class="w3-card-4" style="width:100%">
    <header class="w3-container bg-warning tpcrd">  
      <h3 class="text-center"> Momchil Dianov</h3>
        <div class="col-xs-3>">  
      <div class="premium">           
      <p class="text-center move-down-tiny red"><b> </b></p></div>  
     </div>     
    </header>
    <div class="w3-container">
      <hr>
      <img src="pics/mentors/Momchil.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <p>Work: <span ><b>  Accenture </b> </span> </p>
      <p>Experience: <span ><b class="green">Graduate</b> </span> </p>
          <p class="small-padding"> I've recently graduated from NYU in May 2015. Finding a job in finance can be really frustrating. If you are currently in that phase, I am more than happy to help.
  </p><br>    
    </div>
            
    <button class="w3-btn-block bg-primary" id="btn5" data-toggle="modal" data-target="#myModal2">+ Connect</button>
  </div>
</div>            
 </div><!-- end of card-->       
    
<div class="col-md-3  col-xs-12 margin-bottom eng-card" id="card6">   
<div class="w3-container">

  <div class="w3-card-4" style="width:100%">
    <header class="w3-container bg-warning tpcrd">  
      <h3 class="text-center"> Violeta Zkova</h3>
        <div class="col-xs-3>">  
      <div class="premium">           
      <p class="text-center move-down-tiny red"><b> </b></p></div>  
     </div>     
    </header>
    <div class="w3-container">
      <hr>
      <img src="pics/mentors/violeta.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <p>Work: <span ><b>  WeStem </b> </span> </p>
      <p>Experience: <span ><b class="green">Student</b> </span> </p>
          <p class="small-padding"> I am currently the Head of WeStem Organization that aims to empower women in stem and engineering majors.  
  </p><br>    
    </div>
            
    <button class="w3-btn-block bg-primary" id="btn6" data-toggle="modal" data-target="#myModal2">+ Connect</button>
  </div>
</div>            
 </div><!-- end of card-->       
        
        
 </div>   <!-- end of card row-->

   

<script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script> 
        
<script src="responsive-menu.js"></script>        
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
        
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>   
        
<script type='text/javascript' src="vendor/FlowType.JS-master/flowtype.js"> </script>
<script src="js/script.js"> </script>

  </body>

</html>


