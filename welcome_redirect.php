<?php
  console_log( 'Inside Welcome Redirect' );

  if(isset($_POST['submit'])){

  	console_log( 'Inside Welcome Redirect if statement' );
	console_log( 'All fields are complete' );
	
	$user_login = $_POST['user_login'];
    //$user_email = $_POST['user_email'];
    $user_pass = $_POST['user_pass'];
    
    console_log( 'In welcome redirect: login is: ' . $user_login );
    console_log( 'In welcome redirect: password is: ' . $user_pass );
    
    console_log( 'Is it getting to this point' );
    
    if($user_login !='' && $user_pass !=''){
		//  To redirect form on a particular page
		console_log( 'All field in welcome are complete ' );
		
		header("Location:index-2.php");
    }else{
  		console_log( 'All field in welcome are NOT complete ' );
  	?>
    	<span>
  	    	<?php echo "Please fill all fields.....!!!!!!!!!!!!";?>
  		</span> 
  	<?php
  	}
    
  }
  
?>