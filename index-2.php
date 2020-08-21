<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Career Life Management | Dashboard</title>


  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  
  <!-- Custom styles for GIG Econ-->
  <link href="css/gig/corpecon.css" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link href="css/business-casual.css" rel="stylesheet">
  
  <!-- Custom styles for GIG Text-->
  <link href="css/gig/gigtext.css" rel="stylesheet">
  
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Almendra+Display|Crimson+Text|Dosis|Exo|Hammersmith+One|Josefin+Sans|Josefin+Slab|Libre+Baskerville|Montserrat|Oregano|Poiret+One|Raleway&display=swap" rel="stylesheet">
  
</head>

<body id="page-top">

<?php
	//function console_log( $data ){
  		//echo '<script>';
  		//echo 'console.log('. json_encode( $data ) .')';
  		//echo '</script>';
	//}
	//console_log( 'Inside inde-2.php ' );
	//require('connect.php');
	//$user_login = $_SESSION['user_login'];
	//console_log( 'user_login is: ' . $user_login );
	//session_start();
?>
<script>
    var user_login = sessionStorage.getItem("user_login");
    document.cookie = "user_login=" + user_login;
    var loggedin = sessionStorage.getItem("loggedin");
    document.cookie = "loggedin=" + loggedin;
    
    if( ( user_login == null && loggedin == null ) || ( user_login == null ) || ( loggedin == null ) ){
    		window.location = "index-2.php";
        	window.location = "login.php";
	} 
	
</script>

<?php
    $user_login = $_COOKIE['user_login'];
    $loggedin = $_COOKIE['loggedin'];
?>

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebarMenu sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index-2.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <img src="img/beta/index/BetaV1-Index-60.png" alt="User Image">
        </div>
        <div class="sidebar-brand-text mx-3"> <span><b>Career</b>Life</span></div>
        
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index-2.php">
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
        <a class="nav-link collapsed" href="pages/mission.php">
          <i class="fas fa-fw fa-fire"></i>
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
        <a class="nav-link collapsed" href="pages/gigwork.php">
          <i class="fas fa-fw fa-laptop"></i>
          <span>GIG Work</span>
        </a>
      </li>
      
      <!-- Business Ideas -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages/businessideas.php">
          <i class="fas fa-fw fa-briefcase"></i>
          <span>Business Ideas</span>
        </a>
      </li>
      
      <!-- Side Hustle -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages/sidehustle.php">
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
        <a class="nav-link collapsed" href="pages/fulltime.php">
          <i class="fas fa-fw fa-search"></i>
          <span>Full Time Search</span>
        </a>
      </li>
      
      <!-- Employment Agencies -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages/employmentagencies.php">
          <i class="fas fa-fw fa-building"></i>
          <span>Employment Agencies</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages/jobsapplied.php">
          <i class="fas fa-fw fa-edit"></i>
          <span>Full Time Jobs Applied</span>
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
        <a class="nav-link collapsed" href="pages/networking.php">
          <i class="fas fa-fw fa-address-book"></i>
          <span>Networking</span>
        </a>
      </li>
      
      <!-- Social Media -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages/socialmedia.php">
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
        <a class="nav-link collapsed" href="pages/training.php">
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
        <a class="nav-link collapsed" href="pages/selfcare.php">
          <i class="fas fa-fw fa-heart"></i>
          <span>Self Care</span>
        </a>
      </li>
      
      <!-- Accomplishments -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages/accomplishments.php">
          <i class="fas fa-fw fa-award"></i>
          <span>Accomplishments</span>
        </a>
      </li>
      
      <!-- Nourishment -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages/nourishment.php">
          <i class="fas fa-fw fa-leaf"></i>
          <span>Nourishment</span>
        </a>
      </li>
      
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        References
      </div>

      <!-- Inspiration -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages/inspiration.php">
          <i class="fas fa-fw fa-lightbulb"></i>
          <span>Inspiration</span>
        </a>
      </li>
      
      <!-- Articles -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages//articles.php">
          <i class="fas fa-fw fa-folder"></i>
          <span>Articles</span>
        </a>
      </li>
      
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">


    </ul>
    <!-- End of Sidebar -->
    
    <!-- ********** DASHBOARD - Menu Bar ********** -->
  	<!-- ********** DASHBOARD - Menu Bar ********** -->
  	<!-- ********** DASHBOARD - Menu Bar ********** -->

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

            <!-- Nav Item - USER INFORMATION -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <script>
                          var lastname = sessionStorage.getItem("user_login");
                          document.write(lastname);
                    </script>

                    <img class="img-profile rounded-circle" src="img/beta/index/BetaV1-Index-190.png" class="img-circle" alt="User Image">
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
            <h1 class="h3 mb-0 text-gray-800">Dashboard  - Overview</h1>
          </div>

          <!-- ********** Content TOP Row ********** -->
          <div class="row">

            <!-- Full Time Jobs Applied -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-index2 shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1 index2_text">Full Time Jobs Applied</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Full Time Jobs</div>
                    </div>
                    <div class="col-auto">
                      <a href="pages/fulltime.php" class="small-box-footer">Go To Page<i class="fa fa-arrow-circle-right"></i></a>
                      <!--<a href="https://www.upwork.com/" class="small-box-footer" target="_blank">Go To Site <i class="fa fa-arrow-circle-right"></i></a>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- GIG Work Applied -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-index2 shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1 index2_text">GIG Work Applied</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">GIG Work</div>
                    </div>
                    <div class="col-auto">
                      <a href="pages/gigwork.php" class="small-box-footer">Go To Page<i class="fa fa-arrow-circle-right"></i></a>
                      <!--<a href="pages/gigwork.php"><i class="fas fa-desktop fa-2x text-gray-300"></i></a>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Business Ideas and Creation -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-index2 shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1 index2_text">Business Ideas and Creation</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Business Ideas</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <a href="pages/businessideas.php" class="small-box-footer">Go To Page<i class="fa fa-arrow-circle-right"></i></a>
                      <!--<a href="pages/businessideas.php"><i class="fas fa-desktop fa-2x text-gray-300"></i></a>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Networking -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-index2 shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                  
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1 index2_text">Support Team and Contacts</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Networking</div>
                    </div>
                    
                    <div class="col-auto">
                      <a href="pages/networking.php" class="small-box-footer">Go To Page<i class="fa fa-arrow-circle-right"></i></a>
                      <!--<a href="pages/networking.php"><i class="fas fa-desktop fa-2x text-gray-300"></i></a>-->
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            
            
          </div>
          <!-- End of Content TOP Row -->
          
          <!-- ************************************** -->
		  <!-- ********** CALENDAR & TO DO ********** -->
		  <!-- ************************************** -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-6 col-lg-7">
              <div class="card shadow mb-4">
              
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-teal-200">
                
                	<h6 class="m-0 font-weight-bold text-gray-900 gig_section">Calendar</h6>
                  
                </div> <!-- /.cardheader -->
                
                <div class="card-body bg-gray-100">
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
            
		  <!-- End CALENDAR Content -->
		  <!-- ************************ -->
		  

            <!-- ********** TO DO List ********** -->
            
            <div class="col-xl-6 col-lg-7">
              <div class="card shadow mb-4">
              
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-gradient-index2">
                
                	<h6 class="m-0 font-weight-bold text-gray-200 gig_section">To Do List</h6>
                	
                	<div class="box-tools pull-right">
                		<div class="popup" onclick="popUpToDo()"><i class="fa fa-teal fa-info-circle"></i>
  							<span class="popuptext-index-bgdark" id="popToDo">List of job search or career building activites to complete.</span>
						</div>
              		</div>
                  
                </div> <!-- /.cardheader -->
                
                <div class="card-body">
                
                  <ul class="todo-list bg-gray-200">
                		<li>
                  			
                  			<div class="rTable">
								<div class="rTableRow">
									<div class="rTableHeadThirtyEight"><h5 class="card-subtitle m-0 text-gray-800 gig_subheading">Activity</h5></div>
									<div class="rTableHeadTwentyEight"><h5 class="card-subtitle m-0 text-gray-800 gig_subheading">Due Date</h5></div>
									<div class="rTableHeadEighteen"><h5 class="card-subtitle m-0 text-gray-800 gig_subheading">Completed</h5></div>
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
              			
              			// ********* Connect to DATABASE *********
              			//$connection = mysqli_connect('localhost', 'root', 'Tp!dfg43:fbc3', 'gigeconomy');
        				$connection = mysqli_connect('mysql', 'cclark1072', 'Xvw4456yah32', 'gigeconomy');
        				$sql = "SELECT * FROM to_do WHERE user_login='$user_login' AND `todo_removed`=0";
        
						$result = $connection->query($sql);
						$rowToDoId = 0;
						
						//console_log( 'B4... rowToDoId is: ' . $rowToDoId );
              			
              			if ($result->num_rows > 0) {
              				//console_log( 'TRYING TO GET THIS TO WORK: inside IF ' );
              				
    						// output data of each row
    						while(($row = $result->fetch_assoc()) !== null) {
    							//print_r($result);
    							//console_log( 'while rowToDoId is: ' . $rowToDoId );
    							
    							echo '<table id="myTable" class="delTable">
    									<tr id=' . $rowToDoId .'>
    										<td class="gig_text_index48"><span class="text">'. $row["to_do_text"] .'</span></td>
    										<td class="gig_text_index38"><span class="text">'. $row["to_do_due_date"] .'</span></td>
    										<td class="gig_text_index2">
    											<input type="radio" id=' . $rowToDoId .' onclick="radioToDoFunction(this)" '. $row["to_do_checkbox"] .'>
                  							</td>
    										<td><font color="white"><span id="valueId" class="text">'. $row["to_do_id"] .'</span></font></td>
    										
    										<td class="gig_text"><button type="submit" id=' . $rowToDoId .' onclick="editToDoFunction(this)"><i class="fa fa-edit"></button></td>
    										<td class="gig_text"><button type="submit" id=' . $rowToDoId .' onclick="deleteToDoFunction(this)"><i class="fa fa-trash"></button></td>
    									</tr>
    							
    								   </table> 
    								   <br/>
    								   <hr/>';
    								
    								?>
    								
    								<script>
    								
										function deleteToDoFunction(r) {
										    var i;
  											var str;
  											var res;
  											
  											//alert('Deleting');
  											//alert('delete: r id is: ' + r.id);
  											
    										i = r.id;
    										x = document.getElementById(i).innerHTML;
    										//alert('Delete: x is: ' + x);
    										
    										str = document.getElementById(i).innerText;
											//alert('Delete: str is: ' + str);
  											str1 = str.substring(str.length - 5, str.length);
  											//alert('Delete: str1 is: ' + str1);
											
											res = str1.split(/\s(.+)/)[1];
											//alert('Delete: res is: ' + res)
											
											//sessionStorage.setItem("to_do_id", res);
											document.cookie = "todo_id=" + res;
											//alert('index-2 Delete: document is: ' + document.cookie);
    										
    										window.location = "updatedb/delete/updateToDo.php";
    										
										}
										
										function editToDoFunction(r) {
										    var i;
  											var str;
  											var res;
  											
  											//alert('Editing');
  											//alert('Edit: r id is: ' + r.id);
  											
    										i = r.id;
    										x = document.getElementById(i).innerHTML;
    										//alert('Edit: x is: ' + x);
    										
    										str = document.getElementById(i).innerText;
											//alert('Edit: str is: ' + str);
  											str1 = str.substring(str.length - 5, str.length);
  											//alert('Edit: str1 is: ' + str1);
											
											res = str1.split(/\s(.+)/)[1];
											//alert('Edit: res is: ' + res)
											
											//sessionStorage.setItem("to_do_id", res);
											document.cookie = "edit_todo_id=" + res;
											//alert('index-2 Edit: document is: ' + document.cookie);
    										
    										window.location = "updatedb/edit/editToDo.php";
    										
										}
										
										function radioToDoFunction(r) {
										    var i;
  											var str;
  											var res;
  											
  											//alert('Radioing');
  											//alert('Radio: r id is: ' + r.id);
  											
    										i = r.id;
    										x = document.getElementById(i).innerHTML;
    										//alert('Radio: x is: ' + x);
    										
    										str = document.getElementById(i).innerText;
											//alert('Radio: str is: ' + str);
  											str1 = str.substring(str.length - 5, str.length);
  											//alert('Radio: str1 is: ' + str1);
											
											res = str1.split(/\s(.+)/)[1];
											//alert('Radio: res is: ' + res)
											
											//sessionStorage.setItem("to_do_id", res);
											document.cookie = "radio_todo_id=" + res;
											//alert('index-2 Edit: document is: ' + document.cookie);
    										
    										window.location = "updatedb/radio/radioToDo.php";
    										
										}
									</script>
									<?php
									
									$rowToDoId = $rowToDoId + 1;
    						}
    						
						} else {
    						echo "0 results";
						}
					?>		  
				  
              	</div>
              	<!-- end card body-->
              	<div class="box-footer clearfix no-border">
              		<button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i><a href="pages/add_data/add_todo_index2.php"> Add item </a></button>
            	</div>
              	
              </div>
              <!-- /.card -->
              	
            </div>
            <!-- /.col -->
            
            
          </div>
          <!-- /.row -->
        
		  <!-- End TO DO List -->
		  <!-- ************** -->
		  
		  
		  
		  <!-- **************************** -->
		  <!-- ****** SUPPORT & CHAT ****** -->
		  <!-- **************************** -->

          <div class="row">

            <!-- ********** Support ********** -->
            
            <div class="col-xl-6 col-lg-7">
              <div class="card shadow mb-4">
              
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-teal-900">
                
                	<h6 class="m-0 font-weight-bold text-gray-200 gig_section">Support Team... (People Who Will Lift You Higher)</h6>
                	
                	<div class="box-tools pull-right">
                		<div class="popup" onclick="popUpSupport()"><i class="fa fa-white fa-info-circle"></i>
  							<span class="popuptext-index-bglight" id="popSupport">Networking is important. This list is created on the "Networking" page.</span>
						</div>
              		</div>
                  
                </div> <!-- /.cardheader -->
                
                <div class="card-body">
              		
              		<?
              			
              			// ********* Connect to DATABASE *********
              			//$connection = mysqli_connect('localhost', 'root', 'Tp!dfg43:fbc3', 'gigeconomy');
        				$connection = mysqli_connect('mysql', 'cclark1072', 'Xvw4456yah32', 'gigeconomy');
        				$sql = "SELECT * FROM support_team WHERE user_login='$user_login' AND `support_removed`=0";
        
						$result = $connection->query($sql);
              			
              			if ($result->num_rows > 0) {
              			
    						// output data of each row
    						while($row = $result->fetch_assoc()) {
                  					  
                  				echo '<table id="myTable" class="delTable">
                  				
    									<tr>
    										<td class="gig_text">
    											<ul>
    												<li>
    													<span class="text">'. $row["support_team_member"] .'</span>
    												</li>
    											</ul>
    										</td>
    									</tr>
    							
    								   </table>';
    								
    						}
    						
						} else {
    						echo "0 results";
						}
					?>		  
				  
              	</div>
              	<!-- end card body-->
              	
              </div>
              <!-- /.card -->
              	
            </div>
            <!-- /.col -->
            
            
            <!-- ********** Direct Chat ********** -->
            
            <div class="col-xl-6 col-lg-7">
              <div class="card shadow mb-4">
              
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-teal-900">
                
                	<h2 class="comingsoon">COMING SOON</h2><h6 class="m-0 font-weight-bold text-gray-200 gig_section">Direct Chat</h6>
                	
                	<div class="box-tools pull-right">
                    	<span data-toggle="tooltip" title="3 New Messages" class="badge bg-yellow">3</span>
                    	<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    	</button>
                    	<button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts"
                            data-widget="chat-pane-toggle">
                      	<i class="fa fa-comments"></i></button>
                    	<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    	</button>
                  	</div>
                  
                </div> <!-- /.cardheader -->
                
                <div class="card-body">
                
                
                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages">
                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">Alexander Pierce</span>
                        <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="img/user1-128x128.jpg" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        Is this template really for free? That's unbelievable!
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right">Sarah Bullock</span>
                        <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="img/user3-128x128.jpg" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        You better believe it!
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                  </div>
                  <!--/.direct-chat-messages-->

                  <!-- Contacts are loaded here -->
                  <div class="direct-chat-contacts">
                    <ul class="contacts-list">
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="img/user1-128x128.jpg" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Count Dracula
                                  <small class="contacts-list-date pull-right">2/28/2015</small>
                                </span>
                            <span class="contacts-list-msg">How have you been? I was...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                    </ul>
                    <!-- /.contatcts-list -->
                  </div>
                  <!-- /.direct-chat-pane -->
                  
				  
              	</div>
              	<div class="box-footer clearfix">
              		<button type="button" class="pull-right btn btn-default" id="sendEmail">Send
                	<i class="fa fa-arrow-circle-right"></i></button>
            	</div>
              	<!-- end card body-->
              	
              </div>
              <!-- /.card -->
              	
            </div>
            <!-- /.col -->
            
            
          </div>
          <!-- /.row -->
        
		  <!-- End SUPPORT & CHAT -->
		  <!-- ****************** -->
		
		
		
		  <!-- ********************************** -->
		  <!-- ****** SELF CARE & TRAINING ****** -->
		  <!-- ********************************** -->

          <div class="row">

            <!-- ********** Self Care ********** -->
            
            <div class="col-xl-6 col-lg-7">
              <div class="card shadow mb-4">
              
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-teal-200">
                
                	<h6 class="m-0 font-weight-bold text-gray-900 gig_section">Self Care - Enjoyment</h6>
                	
                	<div class="box-tools pull-right">
                		<div class="popup" onclick="popUpSelfCare()"><i class="fa fa-teal fa-info-circle"></i>
  							<span class="popuptext-index-bgdark" id="popSelfCare">It's important to remember to take care of yourself while job searching and career building. This list is created on "Self Care" page.</span>
						</div>
              		</div>
                  
                </div> <!-- /.cardheader -->
                
                <div class="card-body">
              		
              		<?
              			
              			// ********* Connect to DATABASE *********
              			//$connection = mysqli_connect('localhost', 'root', 'Tp!dfg43:fbc3', 'gigeconomy');
        				$connection = mysqli_connect('mysql', 'cclark1072', 'Xvw4456yah32', 'gigeconomy');
        				$sql = "SELECT * FROM enjoyment WHERE user_login='$user_login' AND `enjoyment_removed`=0";
        
						$result = $connection->query($sql);
              			
              			if ($result->num_rows > 0) {
              			
    						// output data of each row
    						while($row = $result->fetch_assoc()) {
                  					  
                  				echo '<table id="myTable" class="delTable">
                  				
    									<tr>
    										<td class="gig_text">
    											<ul>
    												<li>
    													<span class="text">'. $row["enjoyment_text"] .'</span>
    												</li>
    											</ul>
    										</td>
    									</tr>
    							
    								   </table>';
    						
    						}
						} else {
    						echo "0 results";
						}
					?>
				  
              	</div>
              	<!-- end card body-->
              	
              </div>
              <!-- /.card -->
              	
            </div>
            <!-- /.col -->
            
            
            <!-- ********** Training ********** -->
            
            <div class="col-xl-6 col-lg-7">
              <div class="card shadow mb-4">
              
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-teal-200">
                
                	<h6 class="m-0 font-weight-bold text-gray-900 gig_section">Training</h6>
                	
                	<div class="box-tools pull-right">
                		<div class="popup" onclick="popUpTraining()"><i class="fa fa-teal fa-info-circle"></i>
  							<span class="popuptext-index-bgdark" id="popTraining">Remember to stay current in your field. This list is created on "Training" page.</span>
						</div>
              		</div>
                  
                </div> <!-- /.cardheader -->
                
                <div class="card-body">
                
                 <!-- <ul class="todo-list bg-gray-200">
                		<li>
                  			
                  			<div class="rTable">
								<div class="rTableRow">
									<div class="rTableHead-sm"><h4 class="card-subtitle m-0 text-gray-800 gig_subheading">School</h4></div>
								</div>
								<div class="rTableRow">
									<div class="rTableHeadThirtyEight"><h4 class="card-subtitle m-0 text-gray-800 gig_subheading">Course</h4></div>
								</div>
								<div class="rTableRow">
									<div class="rTableHead-sm"><h4 class="card-subtitle m-0 text-gray-800 gig_subheading">Completed</h4></div>
								</div>
				  			</div>
                  			
                		</li>
                  </ul>-->
                  
                  <ul class="todo-list bg-gray-200">
                		<li>
                  			
                  			<div class="rTable">
								<div class="rTableRow">
									<div class="rTableHeadFourty"><h5 class="card-subtitle m-0 text-gray-800 gig_subheading">School</h5></div>
									<div class="rTableHeadFourty"><h5 class="card-subtitle m-0 text-gray-800 gig_subheading">Course</h5></div>
									<div class="rTableHeadEighteen"><h5 class="card-subtitle m-0 text-gray-800 gig_subheading">Completed</h5></div>
								</div>
				  			</div>
                  			
                		</li>
                  </ul>
              		
              		<?
              			
              			// ********* Connect to DATABASE *********
              			//$connection = mysqli_connect('localhost', 'root', 'Tp!dfg43:fbc3', 'gigeconomy');
        				$connection = mysqli_connect('mysql', 'cclark1072', 'Xvw4456yah32', 'gigeconomy');
        				$sql = "SELECT * FROM training_list WHERE user_login='$user_login' AND `training_removed`=0";
        
						$result = $connection->query($sql);
              			
              			if ($result->num_rows > 0) {
              			
    						// output data of each row
    						while(($row = $result->fetch_assoc()) !== null) {
                  					  
                  				echo '<table id="myTable" class="delTable">
                  				
    									<tr>
    										<td class="gig_text_index18"><span class="text">'. $row["school_name"] .'</span></td>
    										<td class="gig_text_index26"><span class="text">'. $row["training_course"] .'</span></td>
    										<td class="gig_text_index08"><span class="text">'. $row["complete_date"] .'</span></td>
    									</tr>
    							
    								   </table> 
    								   <br/>
    								   <hr/>';
    						
    						}
						} else {
    						echo "0 results";
						}
					?>
				  
              	</div>
              	<!-- end card body-->
              	
              </div>
              <!-- /.card -->
              	
            </div>
            <!-- /.col -->
            
            
          </div>
          <!-- /.row -->
        
		  <!-- End SELF CARE & SUPPORT Content Row -->
		  <!-- *************************************** -->
		  
		  
		  
		
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
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <!-- Custom scripts for calendar-->
  <script src="js/gig/gigecon.js"></script>
  
  <script>
	function myToDoRemove() {
	    document.getElementById("tbl_todo").innerHTML = "";
	}
 </script>
  
  <script>
	// When the user clicks information on "To Do List"
	function popUpToDo() {
  			var poptodo = document.getElementById("popToDo");
  			poptodo.classList.toggle("show");
	}
	
	// When the user clicks information on "Support"
	function popUpSupport() {
  			var popsupport = document.getElementById("popSupport");
  			popsupport.classList.toggle("show");
	}
	
	// When the user clicks information on "Self Care"
	function popUpSelfCare() {
  			var popselfcare = document.getElementById("popSelfCare");
  			popselfcare.classList.toggle("show");
	}
	
	// When the user clicks information on "Self Care"
	function popUpTraining() {
  			var poptraining = document.getElementById("popTraining");
  			poptraining.classList.toggle("show");
	}
  </script>

</body>

</html>