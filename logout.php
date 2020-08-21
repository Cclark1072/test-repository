<script>
     DeleteCookies();
 	 
 	 //JavaScript Function to Delete Cookie
 	 function DeleteCookies() {
    	console.log( 'this is running' );

    	//Use old date to expire the cookies
    	let expire = 'expires=Thu, 01 Jan 1970 00:00:00 GMT;'

    	//Split each cookie into an array element.
    	let cookiesArray = document.cookie.split(";");

    	//Split the cookie to have name as the first value.
    	//Then use the cookie's name to expire the cookie.
    	for ( let cookie = 0; cookie < cookiesArray.length; cookie++ ) {
        	let name = cookiesArray[cookie].split( "=" )[0];
        	document.cookie = name + "=;" + expire;
    	}

	}
</script>

<?php
     session_unset();
  	 session_destroy();
     unset($_SESSION['username']);
 	 header('Location:login.php');
?>