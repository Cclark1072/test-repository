<?php
	function console_log( $data ){
  		echo '<script>';
  		echo 'console.log('. json_encode( $data ) .')';
  		echo '</script>';
	}
?>
<script>
    //var to_do_id = sessionStorage.getItem("to_do_id");
    var supportteam_id = sessionStorage.getItem("support_team_id");
    document.cookie = "supportteam_id=" + supportteam_id;
    document.write("In updateSupportTeam " + supportteam_id);
</script>
<?php
		 console_log( 'inside updateSupportTeam: ' );
		 
         $support_team_id = $_COOKIE['support_team_id'];
     	 console_log( 'In updateSupportTeam supportteam_id: ' . $support_team_id );
     	 
     	 //$to_do_id = ltrim($todo_id, 'del');
     	 //console_log( 'In updateToDO to_do_id: ' . $supportteam_id );
     	 
      	 
      	 //$to_do_id = $_POST['to_do_id'];
      	 $support_removed = 1;
      	 
      	 console_log( 'After COOKIE: support_team_id is: ' . $support_team_id );
      	 console_log( 'support_removed is: ' . $support_removed );
      	 
      	 //$connection = mysqli_connect('mysql', 'cclark1072', 'Xvw4456yah32', 'gigeconomy');			        
         $connection = mysqli_connect('localhost', 'root', 'Tp!dfg43:fbc3', 'gigeconomy');
         $todo_query = "UPDATE `support_team` SET `support_removed` = $support_removed WHERE `support_team_id`=$support_team_id;";
         
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
          window.location = "../../pages/networking.php";
    //}, 4000);
</script>