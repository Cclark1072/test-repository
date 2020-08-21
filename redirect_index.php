<?php
  console_log( 'Inside Redirect Index' );

  if(isset($_SESSION['todo_submit'])){

  	console_log( 'Inside Redirect Index... if statement' );
	console_log( 'All fields are complete' );
	
	$user_login = $_SESSION['user_login'];
    
    console_log( 'In redirect index: login is: ' . $user_login );
    
    console_log( 'Is it getting to this point' );
    
    if($user_login !=''){
    
		//  To redirect form on a particular page
		console_log( 'All field are complete ' );
		header("Location:index-2.php");
		
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