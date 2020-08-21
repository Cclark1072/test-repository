<?php
	function console_log( $data ){
  		echo '<script>';
  		echo 'console.log('. json_encode( $data ) .')';
  		echo '</script>';
	}
?>
<script>
    //var to_do_id = sessionStorage.getItem("to_do_id");
    var agency_evaluation_id = sessionStorage.getItem("agency_evaluation_id");
    document.cookie = "agency_evaluation_id=" + agency_evaluation_id;
    document.write("In updateAgencyEvaluation " + agency_evaluation_id);
</script>
<?php
		 console_log( 'inside updateAgencyEvaluation: ' );
		 
         $agency_evaluation_id = $_COOKIE['agency_evaluation_id'];
     	 console_log( 'In updateAgencyEvaluation agency_evaluation_id: ' . $agency_evaluation_id );
     	 
     	 //$to_do_id = ltrim($todo_id, 'del');
     	 //console_log( 'In updateToDO to_do_id: ' . $supportteam_id );
     	 
      	 
      	 //$to_do_id = $_POST['to_do_id'];
      	 $agency_evaluation_removed = 1;
      	 
      	 console_log( 'After COOKIE: agency_evaluation_id is: ' . $agency_evaluation_id );
      	 console_log( 'agency_evaluation_removed is: ' . $agency_evaluation_removed );
      	 
      	 //$connection = mysqli_connect('mysql', 'cclark1072', 'Xvw4456yah32', 'gigeconomy');			        
         $connection = mysqli_connect('localhost', 'root', 'Tp!dfg43:fbc3', 'gigeconomy');
         $todo_query = "UPDATE `agency_evaluations` SET `agency_evaluation_removed` = $agency_evaluation_removed WHERE `agency_evaluation_id`=$agency_evaluation_id;";
         
         console_log( 'todo_query: ' . $todo_query );
         
         $result = mysqli_query($connection, $todo_query);
         if($result){
        		console_log( 'Adding remove was successful ' );
            	$smsg = "To Do Insert Success.";
         }else{
        		console_log( 'Adding remove was failed ' );
            	$fmsg ="To Do Insert Failed";
         }
         
         
?>
<script>
    //setTimeout(function(){
          window.location = "../../pages/employmentagencies.php";
    //}, 4000);
</script>