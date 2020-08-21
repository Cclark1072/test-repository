<?php
	function console_log( $data ){
  		echo '<script>';
  		echo 'console.log('. json_encode( $data ) .')';
  		echo '</script>';
	}
?>
<script>
    //var to_do_id = sessionStorage.getItem("to_do_id");
    var goal_id = sessionStorage.getItem("goal_id");
    document.cookie = "goal_id=" + goal_id;
    document.write("In updateGoal " + goal_id);
</script>
<?php
		 console_log( 'inside updateGoal: ' );
		 
         $goal_id = $_COOKIE['goal_id'];
     	 console_log( 'In updateGoal goal_id: ' . $goal_id );
     	 
     	 //$to_do_id = ltrim($todo_id, 'del');
     	 //console_log( 'In updateToDO to_do_id: ' . $supportteam_id );
     	 
      	 
      	 //$to_do_id = $_POST['to_do_id'];
      	 $goal_removed = 1;
      	 
      	 console_log( 'After COOKIE: ID is: ' . $goal_id );
      	 console_log( 'goal_removed is: ' . $goal_removed );
      	 
      	 //$connection = mysqli_connect('mysql', 'cclark1072', 'Xvw4456yah32', 'gigeconomy');			        
         $connection = mysqli_connect('localhost', 'root', 'Tp!dfg43:fbc3', 'gigeconomy');
         $todo_query = "UPDATE `goals` SET `goal_removed` = $goal_removed WHERE `goal_id`=$goal_id;";
         
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