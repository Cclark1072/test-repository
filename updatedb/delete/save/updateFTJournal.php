<?php
	function console_log( $data ){
  		echo '<script>';
  		echo 'console.log('. json_encode( $data ) .')';
  		echo '</script>';
	}
?>
<script>
    //var to_do_id = sessionStorage.getItem("to_do_id");
    var fulltime_journal_id = sessionStorage.getItem("fulltime_journal_id");
    document.cookie = "fulltime_journal_id=" + fulltime_journal_id;
    document.write("In updateFTJournal " + fulltime_journal_id);
</script>
<?php
		 console_log( 'inside updateFTJournal: ' );
		 
         $fulltime_journal_id = $_COOKIE['fulltime_journal_id'];
     	 console_log( 'In updateFTJournal fulltime_journal_id: ' . $fulltime_journal_id );
     	 
     	 //$to_do_id = ltrim($todo_id, 'del');
     	 //console_log( 'In updateToDO to_do_id: ' . $supportteam_id );
     	 
      	 
      	 //$to_do_id = $_POST['to_do_id'];
      	 $fulltime_journal_removed = 1;
      	 
      	 console_log( 'After COOKIE: ID is: ' . $fulltime_journal_id );
      	 console_log( 'fulltime_journal_removed is: ' . $fulltime_journal_removed );
      	 
      	 //$connection = mysqli_connect('mysql', 'cclark1072', 'Xvw4456yah32', 'gigeconomy');			        
         $connection = mysqli_connect('localhost', 'root', 'Tp!dfg43:fbc3', 'gigeconomy');
         $todo_query = "UPDATE `fulltime_journal` SET `fulltime_journal_removed` = $fulltime_journal_removed WHERE `fulltime_journal_id`=$fulltime_journal_id;";
         
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