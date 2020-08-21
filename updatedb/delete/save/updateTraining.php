<?php
	function console_log( $data ){
  		echo '<script>';
  		echo 'console.log('. json_encode( $data ) .')';
  		echo '</script>';
	}
?>
<script>
    //var to_do_id = sessionStorage.getItem("to_do_id");
    var training_list_id = sessionStorage.getItem("training_list_id");
    document.cookie = "training_list_id=" + training_list_id;
    document.write("In updateTraining " + training_list_id);
</script>
<?php
		 console_log( 'inside updateTraining: ' );
		 
         $training_list_id = $_COOKIE['training_list_id'];
     	 console_log( 'In updateTraining training_list_id: ' . $training_list_id );
     	 
     	 //$to_do_id = ltrim($todo_id, 'del');
     	 //console_log( 'In updateToDO to_do_id: ' . $supportteam_id );
     	 
      	 
      	 //$to_do_id = $_POST['to_do_id'];
      	 $training_removed = 1;
      	 
      	 console_log( 'After COOKIE: training_list_id is: ' . $training_list_id );
      	 console_log( 'training_removed is: ' . $training_removed );
      	 	
      	 //$connection = mysqli_connect('mysql', 'cclark1072', 'Xvw4456yah32', 'gigeconomy');			        
         $connection = mysqli_connect('localhost', 'root', 'Tp!dfg43:fbc3', 'gigeconomy');
         $todo_query = "UPDATE `training_list` SET `training_removed` = $training_removed WHERE `training_list_id`=$training_list_id;";
         
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
          window.location = "../../pages/training.php";
    //}, 4000);
</script>