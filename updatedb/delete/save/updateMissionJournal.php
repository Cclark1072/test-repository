<?php
	function console_log( $data ){
  		echo '<script>';
  		echo 'console.log('. json_encode( $data ) .')';
  		echo '</script>';
	}
?>
<script>
    //var to_do_id = sessionStorage.getItem("to_do_id");
    var mission_journal_id = sessionStorage.getItem("mission_journal_id");
    document.cookie = "mission_journal_id=" + mission_journal_id;
    document.write("In updateMissionJournal " + mission_journal_id);
</script>
<?php
		 console_log( 'inside updateMissionJournal: ' );
		 
         $mission_journal_id = $_COOKIE['mission_journal_id'];
     	 console_log( 'In updateMissionJournal mission_journal_id: ' . $mission_journal_id );
     	 
     	 //$to_do_id = ltrim($todo_id, 'del');
     	 //console_log( 'In updateToDO to_do_id: ' . $supportteam_id );
     	 
      	 
      	 //$to_do_id = $_POST['to_do_id'];
      	 $mission_journal_removed = 1;
      	 
      	 console_log( 'After COOKIE: ID is: ' . $mission_journal_id );
      	 console_log( 'goal_removed is: ' . $mission_journal_removed );
      	 
      	 //$connection = mysqli_connect('mysql', 'cclark1072', 'Xvw4456yah32', 'gigeconomy');			        
         $connection = mysqli_connect('localhost', 'root', 'Tp!dfg43:fbc3', 'gigeconomy');
         $todo_query = "UPDATE `mission_journal` SET `mission_journal_removed` = $mission_journal_removed WHERE `mission_journal_id`=$mission_journal_id;";
         
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
          window.location = "../../pages/mission.php";
    //}, 4000);
</script>