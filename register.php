<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Career Life Management</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/sb-admin-3.css" rel="stylesheet">
  
  <!-- Custom styles for this template -->
  <link href="css/business-casual.css" rel="stylesheet">
  
  <!-- New Theme CSS-->
  	<link href="css/gig/gigregister.css" rel="stylesheet">

</head>

<!--<body class="bg-gradient-primary">-->
<body>

  <?php
	//function console_log( $data ){
  		//echo '<script>';
  		//echo 'console.log('. json_encode( $data ) .')';
  		//echo '</script>';
	//}

	require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['user_login']) && isset($_POST['user_pass'])){
        
        $user_login = $_POST['user_login'];
	    $user_email = $_POST['user_email'];
        $user_pass = $_POST['user_pass'];
 
        //$connection = mysqli_connect('localhost', 'root', 'Tp!dfg43:fbc3', 'gigeconomy');
        $connection = mysqli_connect('mysql', 'cclark1072', 'Xvw4456yah32', 'gigeconomy');
        $query = "INSERT INTO `gig_users` (user_login, user_pass, user_email) VALUES ('$user_login', '$user_pass', '$user_email');";
        
        $result = mysqli_query($connection, $query);
        
        //console_log( 'login is: ' . $user_login );
        //console_log( 'email is: ' . $user_email );
        //console_log( 'password is: ' . $user_pass );
        
        //console_log( 'connection is: ' . $connection );
        //console_log( 'query is: ' . $query );
        
        //console_log( 'result is: ' . $result );
        
        if($result){
            //console_log( 'SUCCESS' );
            $smsg = "User Created Successfully.";
            //console_log( 'Redirecting' );
            ?>
           <script>
                 window.location = "login.php";
          </script>
        <?php
        }else{
            $fmsg ="User Registration Failed";
        }
    }
  ?>

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>

			  <form class="user" method="POST">
			  
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <span>User Name</span>
                    <input type="text" name="user_login" class="form-control form-control-user" id="exampleFirstName" placeholder="UserLogin" required autofocus>
                  </div>
                </div>
                
                <div class="form-group">
                  <span>Email</span>
                  <input type="email" name="user_email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" required>
                </div>
                
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <span>Password</span>
                    <input type="password" name="user_pass" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                  </div>
                </div>
                
                <button type="submit" name="submit">Register</button>
                
              </form>              
              
              
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.php">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
