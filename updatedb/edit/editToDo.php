<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Career Life Management | Add TO DO Event</title>

  <!-- Custom fonts for this template-->
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
  
  <!-- Custom styles for GIG Econ-->
  <link href="../../css/gig/gigecon.css" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link href="../../css/business-casual.css" rel="stylesheet">
  
  <!-- Custom styles for GIG Text-->
  <link href="../../css/gig/gigtext.css" rel="stylesheet">
  
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nanum+Myeongjo&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Nanum+Myeongjo|Raleway|Tangerine&display=swap" rel="stylesheet">
  
</head>

<body id="page-top">

  <?php
	function console_log( $data ){
  		echo '<script>';
  		echo 'console.log('. json_encode( $data ) .')';
  		echo '</script>';
	}

	//require('../../connect.php');
	//session_start();
  ?>
	<script>
    	var user_login = sessionStorage.getItem("user_login");
    	//alert('In Edit: user_login is: ' + user_login);
    	
    	var loggedin = sessionStorage.getItem("loggedin");
    	//alert('In Edit: loggedin is: ' + loggedin);
    	
    	var edit_todo_id = sessionStorage.getItem("edit_todo_id");
    	//alert('In Edit: edit_todo_id is: ' + edit_todo_id);
    	
    	if( ( user_login == null && loggedin == null ) || ( user_login == null ) || ( loggedin == null ) ){
        	//setTimeout(function(){
                window.location = "login.php";
            //}, 0);
		} else {
        	//$user_login = $_SESSION['user_login'];
        	<?php
        	$user_login = $_COOKIE['user_login'];
        	$loggedin = $_COOKIE['loggedin'];
        	?>
		}
	</script>
	<?php
	
	// If the values are posted, insert them into the database.
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        //$user_login = $_SESSION['user_login'];
        $submit_todo = $_POST['submit_todo'];
        
        $to_do_create_date = $_POST['to_do_create_date'];
        $to_do_text = $_POST['to_do_text'];
        $to_do_due_date = $_POST['to_do_due_date'];
        $to_do_checkbox = 0;
        $todo_removed = 0;
        $to_do_id = $_COOKIE['edit_todo_id'];
        
        //console_log( 'user_login is: ' . $user_login );
        //console_log( 'date is: ' . $to_do_create_date );
        //console_log( 'text is: ' . $to_do_text );
        //console_log( 'due date is: ' . $to_do_due_date );
        //console_log( 'checkbox is: ' . $to_do_checkbox );
        //console_log( 'todo_removed is: ' . $todo_removed );
        //console_log( 'submit_todo: ' . $submit_todo );
        
        //print_r($_POST);
        $_SESSION['submit_todo'] = $submit_todo;
        //print_r($_SESSION);
 
        $connection = mysqli_connect('localhost', 'root', 'Tp!dfg43:fbc3', 'gigeconomy');
        
        // ********* INSERT to TO DO content *********
        //$todo_query = "INSERT INTO `to_do` (user_login, to_do_create_date, to_do_text, to_do_due_date, to_do_checkbox, todo_removed) VALUES ('$user_login', '$to_do_create_date', '$to_do_text', '$to_do_due_date', '$to_do_checkbox', '$todo_removed');";
        $todo_query = "UPDATE `to_do` SET `to_do_text`='$to_do_text',`to_do_due_date`='$to_do_due_date' WHERE `to_do_id`=$to_do_id;";
        $result = mysqli_query($connection, $todo_query);
        
        //console_log( 'query is: ' . $todo_query );
        //console_log( 'result is: ' . $result );
        
        if($result){
            
            //console_log( 'SUCCESS' );
            $smsg = "To Do Insert Success.";
            ?>
           <script>
                 //setTimeout(function(){
                      window.location = "../../index-2.php";
                 //}, 4000);
          </script>
       <?php
        }else{
            //console_log( 'FAIL' );
            $fmsg ="To Do Insert Failed";
        }
    }
  ?>

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebarMenu sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../../index-2.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <img src="../../img/beta/index/BetaV1-Index-60.png" alt="User Image">
        </div>
        <div class="sidebar-brand-text mx-3"> <span><b>Career</b>Life</span></div>
        
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="../../index-2.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- ********** MAIN NAVIGATION ********** -->
	  <!-- ********** MAIN NAVIGATION ********** -->
	  <!-- ********** MAIN NAVIGATION ********** -->
	  
	  <!-- Divider -->
      <hr class="sidebar-divider">
      
      <!-- Heading -->
      <div class="sidebar-heading">
        FOCUS
      </div>
      
      <!-- GIG Work -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="mission.php">
          <i class="fas fa-fw fa-award"></i>
          <span>Mission Statement</span>
        </a>
      </li>
	  
	  <!-- Divider -->
      <hr class="sidebar-divider">
      
      <!-- Heading -->
      <div class="sidebar-heading">
        GIG ENVIRONMENT
      </div>
      
      <!-- GIG Work -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="gigwork.php">
          <i class="fas fa-fw fa-laptop"></i>
          <span>GIG Work</span>
        </a>
      </li>
      
      <!-- Business Ideas -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="businessideas.php">
          <i class="fas fa-fw fa-briefcase"></i>
          <span>Business Ideas</span>
        </a>
      </li>
      
      <!-- Side Hustle -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="sidehustle.php">
          <i class="fas fa-fw fa-check"></i>
          <span>Side Hustle</span>
        </a>
      </li>
      
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        CORPORATE ENVIRONMENT
      </div>

      <!-- Full Time Search -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="fulltime.php">
          <i class="fas fa-fw fa-search"></i>
          <span>Full Time Search</span>
        </a>
      </li>
      
      <!-- Employment Agencies -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="employmentagencies.php">
          <i class="fas fa-fw fa-building"></i>
          <span>Employment Agencies</span>
        </a>
      </li>
      
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        NETWORKING
      </div>
      
      <!-- Networking -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="networking.php">
          <i class="fas fa-fw fa-address-book"></i>
          <span>Networking</span>
        </a>
      </li>
      
      <!-- Social Media -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="socialmedia.php">
          <i class="fas fa-fw fa-desktop"></i>
          <span>Social Media</span>
        </a>
      </li>
      
      <!-- Divider -->
      <hr class="sidebar-divider">
      
      <!-- Heading -->
      <div class="sidebar-heading">
        SELF IMPROVEMENT
      </div>
      
      <!-- Self Improvement -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="training.php">
          <i class="fas fa-fw fa-chalkboard-teacher"></i>
          <span>Training</span>
        </a>
      </li>
      
      <!-- Divider -->
      <hr class="sidebar-divider">
      
      <!-- Heading -->
      <div class="sidebar-heading">
        SELF CARE
      </div>
      
      <!-- Self Care -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="selfcare.php">
          <i class="fas fa-fw fa-heart"></i>
          <span>Self Care</span>
        </a>
      </li>
      
      <!-- Accomplishments -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="../../accomplishments.php">
          <i class="fas fa-fw fa-heart"></i>
          <span>Accomplishments</span>
        </a>
      </li>
      
      <!-- Nourishment -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="../../nourishment.php">
          <i class="fas fa-fw fa-heart"></i>
          <span>Nourishment</span>
        </a>
      </li>
      
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        References
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="articles.php">
          <i class="fas fa-fw fa-folder"></i>
          <span>Articles</span>
        </a>
      </li>
      
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">


    </ul>
    <!-- End of Sidebar -->
    
    <!-- ********** DASHBOARD - Menu Bar CONTENT ********** -->
  	<!-- ********** DASHBOARD - Menu Bar CONTENT ********** -->
  	<!-- ********** DASHBOARD - Menu Bar CONTENT ********** -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!--<div class="topbar-divider d-none d-sm-block"></div>-->

            <!-- Nav Item - USER INFORMATION -->
            <li class="nav-item dropdown no-arrow">
              <!--<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
              <a class="nav-link dropdown-toggle" href="#">  
                <script>
    					var user_login = sessionStorage.getItem("user_login");
    					document.write(user_login);
				</script>
                
                <img class="img-profile rounded-circle" src="../../img/beta/index/BetaV1-Index-60.png" class="img-circle" alt="User Image">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- ********** DASHBOARD - Main CONTENT ********** -->
  		<!-- ********** DASHBOARD - Main CONTENT ********** -->
  		<!-- ********** DASHBOARD - Main CONTENT ********** -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add TO DO Event</h1>
          </div>

          <!-- ********** Content TOP Row ********** -->
          <div class="row">

            <!-- Full Time Jobs Applied -->
            <div class="col-xl-12 col-md-6 mb-4">
              <div class="card border-left-index2 shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 businessideas_text">To do list as you go through you job search and just in general.</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">TO DO Events</div>
                    </div>
                    <div class="col-auto">
                      <a href="../../fulltime.php"><i class="fas fa-desktop fa-2x text-gray-300"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <!-- End of Content TOP Row -->
          
          <!-- ****************************************** -->
		  <!-- ********** CALENDAR Content ROW ********** -->
		  <!-- ****************************************** -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
              
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                
                	<h6 class="m-0 font-weight-bold text-primary">Calendar</h6>
                  
                    <div class="dropdown no-arrow">
                    
                    	<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      		<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    	</a>
                    
                  	</div> <!-- /.dropdown .no-arrow -->
                  
                </div> <!-- /.cardheader -->
                
                <div class="card-body">
                  <div class="calendar calendar-first" id="calendar_first">
    				
    				<div class="calendar_header">
        				<button class="switch-month switch-left"> <i class="fa fa-chevron-left"></i></button>
         				<h2></h2>
        				<button class="switch-month switch-right"> <i class="fa fa-chevron-right"></i></button>
    				</div>
    				
    				<div class="calendar_weekdays"></div>
   					<div class="calendar_content"></div>
   					
				  </div>
				  <!-- /.calendar .calendar-first-->
				  
              	</div>
              	<!-- end card body-->
              	
              </div>
              <!-- /.card -->
              	
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
		  <!-- End CALENDAR Content Row -->
		  <!-- ************************ -->
		  
		  
		  <!-- ******************************* -->
		  <!-- ****** TO DO Content ROW ****** -->
		  <!-- ******************************* -->

          <div class="row">

            <!-- ********** TO DO List ********** -->
            
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
              
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                
                	<h6 class="m-0 font-weight-bold text-primary">TO DO Event</h6>
                  
                    <div class="dropdown no-arrow">
                    
                    	<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      		<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    	</a>
                    
                  	</div> <!-- /.dropdown .no-arrow -->
                  
                </div> <!-- /.cardheader -->
                
                <div class="card-body">
                
                  <ul class="todo-list bg-gray-200">
                		<li>
                  			
                  			<div class="rTable">
								<div class="rTableRow">
									<div class="rTableHeadTwentyEight"><h5 class="card-subtitle m-0 text-gray-800 gig_subheading">Activity</h5></div>
									<div class="rTableHeadTwentyEight"><h5 class="card-subtitle m-0 text-gray-800 gig_subheading">Due Date</h5></div>
								</div>
				  			</div>
                  			
                		</li>
                  </ul>
				  
                </div><!-- /.card-body -->
                
                <div class="card-body">
                    <script>
                          var user_login = sessionStorage.getItem("user_login");
                    </script>
              		<?php
              			
              			$to_do_id = $_COOKIE['edit_todo_id'];
              			
              			// ********* Connect to DATABASE *********
              			$connection = mysqli_connect('localhost', 'root', 'Tp!dfg43:fbc3', 'gigeconomy');
        				//$connection = mysqli_connect('mysql', 'cclark1072', 'Xvw4456yah32', 'gigeconomy');
        				$sql = "SELECT * FROM to_do WHERE user_login='$user_login' AND `to_do_id`=$to_do_id";
        
						$result = $connection->query($sql);
              			
              			if ($result->num_rows > 0) {
              				//console_log( 'TRYING TO GET THIS TO WORK: inside IF ' );
              				
    						// output data of each row
    						while(($row = $result->fetch_assoc()) !== null) {
    							//print_r($result);
    							
    							echo '<table id="myTable" class="delTable">
    									<tr>
    									
    										<td class="gig_text"><span class="text">'. $row["to_do_text"] .'</span></td>
    										<td class="gig_text"><span class="text">'. $row["to_do_due_date"] .'</span></td>
    										
    									</tr>
    							
    								   </table> ';
    								   
    							$to_do_text = $row["to_do_text"];
    							$to_do_due_date = $row["to_do_due_date"];
    							  								
    						}
    						
						} else {
    						echo "0 results";
						}
					?>		  
				  
              	</div>
              	<!-- end card body-->
              	
              	<hr/>
              	<hr/>
              	
              	<?php
              		//console_log( 'After hr... text is: ' . $to_do_text );
        			//console_log( 'After hr... due date is: ' . $to_do_due_date );
              	?>
                
                <div class="card-body">
                
                  <form class="user" method="POST">
                
                		<div class="form-group row">
                  			<div class="col-sm-12 mb-3 mb-sm-0">
                    			<span>Text</span>
                    			<input type="text" name="to_do_text" value = "<?php echo $to_do_text ;?>" class="form-control form-control-user" id="exampleToDoText" required>
                  			</div>
                		</div>
                
                		<div class="form-group row">
                  			<div class="col-sm-12 mb-3 mb-sm-0">
                    			<span>Due Date</span>
                    			<input type="date" name="to_do_due_date" value = "<?php echo $to_do_due_date ;?>" class="form-control form-control-user" id="exampleDueDate" equired autofocus>
                  			</div>
                		</div>
                
                		<button type="submit" name="submit_todo">Submit</button>
                		<!--<button type="submit" name="submit">Submit</button>-->
                
                  </form>  
				  
              	</div>
              	<!-- end card body-->
              	
              </div>
              <!-- /.card -->
              	
            </div>
            <!-- /.col -->
            
            
          </div>
          <!-- /.row -->
        
		  <!-- End TO DO List -->
		  <!-- ************** -->
		    
          
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; 2C Management 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../../logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
  
  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>

  <!-- Bootstrap core JavaScript-->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../js/sb-admin-2.min.js"></script>
  
   <!-- Custom scripts for calendar-->
  <script src="../../js/gig/gigecon.js"></script>

</body>

</html>