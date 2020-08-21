<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login - Career Life Management</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Almendra+Display|Crimson+Text|Dosis|Exo|Hammersmith+One|Josefin+Sans|Josefin+Slab|Libre+Baskerville|Montserrat|Oregano|Poiret+One|Raleway&display=swap" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/sb-admin-3.css" rel="stylesheet">
  
  <!-- Custom styles for this template -->
  <link href="css/business-casual.css" rel="stylesheet">
  
  <!-- New Theme CSS-->
  	<link href="css/gig/gigregister.css" rel="stylesheet">

</head>

<body>
  
  <?php
   
   //function console_log( $data ){
  		//echo '<script>';
  		//echo 'console.log('. json_encode( $data ) .')';
  		//echo '</script>';
   //}
	
   //console_log( 'Login page NOW ' );
   
   require('connect.php');
   session_start();
   
   if (isset($_POST['user_login']) && isset($_POST['user_pass'])){
      //console_log( 'Login page: IF POST ' );
      
      $user_login = $_POST['user_login'];
      $user_pass = $_POST['user_pass'];

      //console_log( 'user_login is: ' . $user_login );
      //console_log( 'user_pass is: ' . $user_pass );
      
      //$db = mysqli_connect('localhost', 'root', 'Tp!dfg43:fbc3', 'gigeconomy');
      $db = mysqli_connect('mysql', 'cclark1072', 'Xvw4456yah32', 'gigeconomy');
      $sql = "SELECT id FROM gig_users WHERE user_login = '$user_login' and user_pass = '$user_pass'";
      
      //console_log( 'sql is: ' . $sql );
      
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      if($count == 1) {
        
         $_SESSION['loggedin'] = true;
         
         ?>
               <script>
                       spge = '<?php echo $user_login ;?>';
                       //alert(spge);
                       sessionStorage.setItem("user_login", spge);
                       sessionStorage.setItem("loggedin", "true");
                       window.location = "index-2.php";
               </script>
         <?php
      }else {
         //console_log( 'count is NOT success ' );
         $error = "Your Login Name or Password is invalid";
      }
   }
  ?>

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h2 class="text-gray-900 mb-4">Welcome Back!</h2>
                  </div>
                  
                  <form class="user" method="POST">
                    
                    <span>User Name</span>
                    <div class="form-group">
                      <input type="text" name="user_login" class="form-control form-control-user" id="exampleFirstName" placeholder="UserLogin" required>
                    </div>
                    
                    <span>Password</span>
                    <div class="form-group">
                      <input type="password" name="user_pass" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Login</button>
                    
                  </form>
                  
                  <hr>
                  
                  <div class="text-center">
                    <a class="small" href="forgot-password.php">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.php">Create an Account!</a>
                  </div>
                </div>
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