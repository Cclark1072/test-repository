<?php
	function console_log( $data ){
  		echo '<script>';
  		echo 'console.log('. json_encode( $data ) .')';
  		echo '</script>';
	}
?>
<script>
    //var to_do_id = sessionStorage.getItem("to_do_id");
    var gig_applied_id = sessionStorage.getItem("gig_applied_id");
    document.cookie = "gig_applied_id=" + gig_applied_id;
    document.write("In updateGigWork " + gig_applied_id);
</script>
<?php
		 console_log( 'inside updateGigWork: ' );
		 
         $gig_applied_id = $_COOKIE['gig_applied_id'];
     	 console_log( 'In updateGigWork gig_applied_id: ' . $gig_applied_id );
     	 
     	 //$to_do_id = ltrim($todo_id, 'del');
     	 //console_log( 'In updateToDO to_do_id: ' . $supportteam_id );
     	 
      	 
      	 //$to_do_id = $_POST['to_do_id'];
      	 $gig_removed = 1;
      	 
      	 console_log( 'After COOKIE: ID is: ' . $gig_applied_id );
      	 console_log( 'goal_removed is: ' . $gig_removed );
      	 
      	 //$connection = mysqli_connect('mysql', 'cclark1072', 'Xvw4456yah32', 'gigeconomy');			        
         $connection = mysqli_connect('localhost', 'root', 'Tp!dfg43:fbc3', 'gigeconomy');
         $todo_query = "UPDATE `gig_applied` SET `gig_removed` = $gig_removed WHERE `gig_applied_id`=$gig_applied_id;";
         
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
          window.location = "../../pages/gigwork.php";
    //}, 4000);
</script>