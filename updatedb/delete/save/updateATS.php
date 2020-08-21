<?php
	function console_log( $data ){
  		echo '<script>';
  		echo 'console.log('. json_encode( $data ) .')';
  		echo '</script>';
	}
?>
<script>
    //var to_do_id = sessionStorage.getItem("to_do_id");
    var ats_id = sessionStorage.getItem("ats_id");
    document.cookie = "ats_id=" + ats_id;
    document.write("In updateATS " + ats_id);
</script>
<?php
		 console_log( 'inside updateATS: ' );
		 
         $ats_id = $_COOKIE['ats_id'];
     	 console_log( 'In updateATS ats_id: ' . $ats_id );
     	 
     	 //$to_do_id = ltrim($todo_id, 'del');
     	 //console_log( 'In updateToDO to_do_id: ' . $supportteam_id );
     	 
      	 
      	 //$to_do_id = $_POST['to_do_id'];
      	 $ats_removed = 1;
      	 
      	 console_log( 'After COOKIE: ID is: ' . $ats_id );
      	 console_log( 'ats_removed is: ' . $ats_removed );
      	 
      	 //$connection = mysqli_connect('mysql', 'cclark1072', 'Xvw4456yah32', 'gigeconomy');			        
         $connection = mysqli_connect('localhost', 'root', 'Tp!dfg43:fbc3', 'gigeconomy');
         $todo_query = "UPDATE `ats` SET `ats_removed` = $ats_removed WHERE `ats_id`=$ats_id;";
         
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
          window.location = "../../pages/fulltime.php";
    //}, 4000);
</script>