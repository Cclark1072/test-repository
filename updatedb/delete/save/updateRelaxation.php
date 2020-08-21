<?php
	function console_log( $data ){
  		echo '<script>';
  		echo 'console.log('. json_encode( $data ) .')';
  		echo '</script>';
	}
?>
<script>
    //var to_do_id = sessionStorage.getItem("to_do_id");
    var relaxation_id = sessionStorage.getItem("relaxation_id");
    document.cookie = "relaxation_id=" + relaxation_id;
    document.write("In updateRelaxation " + relaxation_id);
</script>
<?php
		 console_log( 'inside updateRelaxation: ' );
		 
         $relaxation_id = $_COOKIE['relaxation_id'];
     	 console_log( 'In updateRelaxation relaxation_id: ' . $relaxation_id );
     	 
     	 //$to_do_id = ltrim($todo_id, 'del');
     	 //console_log( 'In updateToDO to_do_id: ' . $supportteam_id );
     	 
      	 
      	 //$to_do_id = $_POST['to_do_id'];
      	 $relaxation_removed = 1;
      	 
      	 console_log( 'After COOKIE: relaxation_id is: ' . $relaxation_id );
      	 console_log( 'relaxation_removed is: ' . $relaxation_removed );
      	 
      	 //$connection = mysqli_connect('mysql', 'cclark1072', 'Xvw4456yah32', 'gigeconomy');			        
         $connection = mysqli_connect('localhost', 'root', 'Tp!dfg43:fbc3', 'gigeconomy');
         $todo_query = "UPDATE `relaxation` SET `relaxation_removed` = $relaxation_removed WHERE `relaxation_id`=$relaxation_id;";
         
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
          window.location = "../../pages/selfcare.php";
    //}, 4000);
</script>