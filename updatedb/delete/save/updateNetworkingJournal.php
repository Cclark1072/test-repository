<?php
	function console_log( $data ){
  		echo '<script>';
  		echo 'console.log('. json_encode( $data ) .')';
  		echo '</script>';
	}
?>
<script>
    //var to_do_id = sessionStorage.getItem("to_do_id");
    var networking_id = sessionStorage.getItem("networking_id");
    document.cookie = "networking_id=" + networking_id;
    document.write("In updateNetworkingJournal " + networking_id);
</script>
<?php
		 console_log( 'inside updateNetworkingJournal: ' );
		 
         $networking_id = $_COOKIE['networking_id'];
     	 console_log( 'In updateNetworkingJournal networking_id: ' . $networking_id );
     	 
     	 //$to_do_id = ltrim($todo_id, 'del');
     	 //console_log( 'In updateToDO to_do_id: ' . $supportteam_id );
     	 
      	 
      	 //$to_do_id = $_POST['to_do_id'];
      	 $network_journal_removed = 1;
      	 
      	 console_log( 'After COOKIE: networking_id is: ' . $networking_id );
      	 console_log( 'network_journal_removed is: ' . $network_journal_removed );
      	 
      	 //$connection = mysqli_connect('mysql', 'cclark1072', 'Xvw4456yah32', 'gigeconomy');			        
         $connection = mysqli_connect('localhost', 'root', 'Tp!dfg43:fbc3', 'gigeconomy');
         $todo_query = "UPDATE `networking_journal` SET `network_journal_removed` = $network_journal_removed WHERE `networking_id`=$networking_id;";
         
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