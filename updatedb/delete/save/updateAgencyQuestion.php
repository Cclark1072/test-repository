<?php
	function console_log( $data ){
  		echo '<script>';
  		echo 'console.log('. json_encode( $data ) .')';
  		echo '</script>';
	}
?>
<script>
    //var to_do_id = sessionStorage.getItem("to_do_id");
    var agency_question_id = sessionStorage.getItem("agency_question_id");
    document.cookie = "agency_question_id=" + agency_question_id;
    document.write("In updateAgencyQuesstion " + agency_question_id);
</script>
<?php
		 console_log( 'inside updateAgencyQuestion: ' );
		 
         $agency_question_id = $_COOKIE['agency_question_id'];
     	 console_log( 'In updateAgencyQuestion agency_question_id: ' . $agency_question_id );
     	 
     	 //$to_do_id = ltrim($todo_id, 'del');
     	 //console_log( 'In updateToDO to_do_id: ' . $supportteam_id );
     	 
      	 
      	 //$to_do_id = $_POST['to_do_id'];
      	 $agency_question_removed = 1;
      	 
      	 console_log( 'After COOKIE: networking_id is: ' . $agency_question_id );
      	 console_log( 'network_journal_removed is: ' . $agency_question_removed );
      	 
      	 //$connection = mysqli_connect('mysql', 'cclark1072', 'Xvw4456yah32', 'gigeconomy');			        
         $connection = mysqli_connect('localhost', 'root', 'Tp!dfg43:fbc3', 'gigeconomy');
         $todo_query = "UPDATE `agency_questions` SET `agency_question_removed` = $agency_question_removed WHERE `agency_question_id`=$agency_question_id;";
         
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