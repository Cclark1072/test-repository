<?php
	function console_log( $data ){
  		echo '<script>';
  		echo 'console.log('. json_encode( $data ) .')';
  		echo '</script>';
	}
?>
<script>
    //var to_do_id = sessionStorage.getItem("to_do_id");
    var sidehustle_id = sessionStorage.getItem("sidehustle_id");
    document.cookie = "sidehustle_id=" + sidehustle_id;
    document.write("In updateSideHustleJournal " + sidehustle_id);
</script>
<?php
		 console_log( 'inside updateSideHustleJournal: ' );
		 
         $sidehustle_id = $_COOKIE['sidehustle_id'];
     	 console_log( 'In updateSideHustleJournal sidehustle_id: ' . $sidehustle_id );
     	 
     	 //$to_do_id = ltrim($todo_id, 'del');
     	 //console_log( 'In updateToDO to_do_id: ' . $supportteam_id );
     	 
      	 
      	 //$to_do_id = $_POST['to_do_id'];
      	 $sidehustle_journal_removed = 1;
      	 
      	 console_log( 'After COOKIE: ID is: ' . $sidehustle_id );
      	 console_log( 'side_hustle_removed is: ' . $sidehustle_journal_removed );
      	 
      	 //$connection = mysqli_connect('mysql', 'cclark1072', 'Xvw4456yah32', 'gigeconomy');			        
         $connection = mysqli_connect('localhost', 'root', 'Tp!dfg43:fbc3', 'gigeconomy');
         $todo_query = "UPDATE `sidehustle_journal` SET `sidehustle_journal_removed` = $sidehustle_journal_removed WHERE `sidehustle_id`=$sidehustle_id;";
         
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
          window.location = "../../pages/sidehustle.php";
    //}, 4000);
</script>