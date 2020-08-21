<?php
  if(isset($_POST['submit'])){

  	console_log( 'Inside Redirect if statement' );
	console_log( 'All fields are complete' );
	
	$user_login = $_POST['user_login'];
    $user_email = $_POST['user_email'];
    $user_pass = $_POST['user_pass'];
    
    console_log( 'In redirect: login is: ' . $user_login );
    console_log( 'In redirect: email is: ' . $user_email );
    console_log( 'In redirect: password is: ' . $user_pass );  
    console_log( 'Is it getting to this point' );
    
    if($user_login !='' && $user_email !='' && $user_pass !=''){
		//  To redirect form on a particular page
		console_log( 'All field are complete ' );
		console_log( 'HOPING THIS WORKS!! ' );
		//header("Location:login.html");
		header("Location:login.php");
		//include "login.php";
    }else{
  		console_log( 'All field are NOT complete ' );
  	?>
    	<span>
  	    	<?php echo "Please fill all fields.....!!!!!!!!!!!!";?>
  		</span> 
  	<?php
  	}
  }
?>