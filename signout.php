<?php



	session_destroy();
unset($_SESSION['redirect']);
        unset($_SESSION['redirect2']);

	

if(isset($_COOKIE['email']) && isset($_COOKIE['password'])){

		setcookie("email", '', time() - (3600));

		setcookie("password", '', time() - (3600));
    
       

	

}

	header('location:index.php');



?>

