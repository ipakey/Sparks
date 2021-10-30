<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Den . Tuition . Header </title>
    <link rel="stylesheet" href="./css/style.css">
    <base href="http://localhost/Sparks/">
    <link rel="shortcut icon" href="assets\icons\favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="page-header">
	    		
        <div class='header__BS'>The Den </br> Kettering	</div>
		
        <div>
            <img  class='header__logo-picture' src='assets/branding/logo_trans.png'>
        </div>    
		
		<div>
			<div class='header__Cz'>SAFE . PERSONALISED . LEARNING </div>
			<div class='header__BS'>Tuition for all sorts of Learners</div>
		</div>
		<div class='empty'><p>'  3 x a spacer  '</p></div>
		
		<div class='right-justify'>
		<?php 
				if(isset($_SESSION['userId'])){
					echo "
                    
                    <form class='form__log-in-form' action='includes/logOut.inc.php' method ='post'>
                        
						<p class='form__log-in-msg'>Welcome ".$_SESSION['userKwas']."  You are logged in!</p>
						<button class='btn' type='submit' name='logout-submit'>Log Out</button></br>
						<p class='form__log-in-txt'></p>
						</form>";
					
				}
				else{
					echo "
					<form class='form__log-in-form' action='includes/logIn.inc.php' method ='post'>
                    <div class='form__btn-grp'>
						<button class='btn-s2' type='submit' name='register-account'>Register</button>
						<button class='btn-s2' type='submit' name='forgotton-password'>Forgotton Password</button>
                    </div>
                    <div class='form__btn-grp'>
                        <p class='form__log-in-msg'>    You are logged out!</p>
						<button class='btn-s2' type='submit' name='login-submit'>Log In</button>
                    </div>
                    <div class='form__btn-grp'>
			
					<button class='btn-s2'><input class='form__log-in-txt' type='text' name='nameKwnas' placeholder='Name'></button>	
						<button class='btn-s2'><input class='form__log-in-txt' type='password' name='password'  placeholder='Password'></button>
                    </div>
					</form>";
				}
			?>	</div>
    </div>


</body>
</html>