<?php
	function console_log( $data ){
  		echo '<script>';
  		echo 'console.log('. json_encode( $data ) .')';
  		echo '</script>';
	}
?>
<script>
    //var to_do_id = sessionStorage.getItem("to_do_id");
    var businessideas_id = sessionStorage.getItem("businessideas_id");
    document.cookie = "businessideas_id=" + businessideas_id;
    document.write("In updateBusinessJournal " + businessideas_id);
</script>
<?php
		 console_log( 'inside updateBusinessJournal: ' );
		 
         $businessideas_id = $_COOKIE['businessideas_id'];
     	 console_log( 'In updateBusinessJournal businessideas_id: ' . $businessideas_id );
     	 
     	 //$to_do_id = ltrim($todo_id, 'del');
     	 //console_log( 'In updateToDO to_do_id: ' . $supportteam_id );
     	 
      	 
      	 //$to_do_id = $_POST['to_do_id'];
      	 $business_journal_removed = 1;
      	 
      	 console_log( 'After COOKIE: ID is: ' . $businessideas_id );
      	 console_log( 'gig_journal_removed is: ' . $business_journal_removed );
      	 
      	 //$connection = mysqli_connect('mysql', 'cclark1072', 'Xvw4456yah32', 'gigeconomy');			        
         $connection = mysqli_connect('localhost', 'root', 'Tp!dfg43:fbc3', 'gigeconomy');
         $todo_query = "UPDATE `businessideas_journal` SET `business_journal_removed` = $business_journal_removed WHERE `businessideas_id`=$businessideas_id;";
         
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
          window.location = "../../pages/businessideas.php";
    //}, 4000);
</script>