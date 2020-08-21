<?php
	function console_log( $data ){
  		echo '<script>';
  		echo 'console.log('. json_encode( $data ) .')';
  		echo '</script>';
	}
?>
<script>
    //var to_do_id = sessionStorage.getItem("to_do_id");
    var employmentagency_id = sessionStorage.getItem("employmentagency_id");
    document.cookie = "employmentagency_id=" + employmentagency_id;
    document.write("In updateEmploymentJournal " + employmentagency_id);
</script>
<?php
		 console_log( 'inside updateEmploymentJournal: ' );
		 
         $employmentagency_id = $_COOKIE['employmentagency_id'];
     	 console_log( 'In updateEmploymentJournal employmentagency_id: ' . $employmentagency_id );
     	 
     	 //$to_do_id = ltrim($todo_id, 'del');
     	 //console_log( 'In updateToDO to_do_id: ' . $supportteam_id );
     	 
      	 
      	 //$to_do_id = $_POST['to_do_id'];
      	 $employmentagency_removed = 1;
      	 
      	 console_log( 'After COOKIE: employmentagency_id is: ' . $employmentagency_id );
      	 console_log( 'employmentagency_removed is: ' . $employmentagency_removed );
      	 
      	 //$connection = mysqli_connect('mysql', 'cclark1072', 'Xvw4456yah32', 'gigeconomy');			        
         $connection = mysqli_connect('localhost', 'root', 'Tp!dfg43:fbc3', 'gigeconomy');
         $todo_query = "UPDATE `employmentagency_journal` SET `employmentagency_removed` = $employmentagency_removed WHERE `employmentagency_id`=$employmentagency_id;";
         
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