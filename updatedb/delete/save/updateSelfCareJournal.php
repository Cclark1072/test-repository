<?php
	function console_log( $data ){
  		echo '<script>';
  		echo 'console.log('. json_encode( $data ) .')';
  		echo '</script>';
	}
?>
<script>
    //var to_do_id = sessionStorage.getItem("to_do_id");
    var selfcare_journal_id = sessionStorage.getItem("selfcare_journal_id");
    document.cookie = "selfcare_journal_id=" + selfcare_journal_id;
    document.write("In updateSelfCareJournal " + selfcare_journal_id);
</script>
<?php
		 console_log( 'inside updateSelfCareJournal: ' );
		 
         $selfcare_journal_id = $_COOKIE['selfcare_journal_id'];
     	 console_log( 'In updateSelfCareJournal selfcare_journal_id: ' . $selfcare_journal_id );
     	 
     	 //$to_do_id = ltrim($todo_id, 'del');
     	 //console_log( 'In updateToDO to_do_id: ' . $supportteam_id );
     	 
      	 
      	 //$to_do_id = $_POST['to_do_id'];
      	 $selfcare_journal_removed = 1;
      	 
      	 console_log( 'After COOKIE: selfcare_journal_id is: ' . $selfcare_journal_id );
      	 console_log( 'selfcare_journal_removed is: ' . $selfcare_journal_removed );
      	 
      	 //$connection = mysqli_connect('mysql', 'cclark1072', 'Xvw4456yah32', 'gigeconomy');			        
         $connection = mysqli_connect('localhost', 'root', 'Tp!dfg43:fbc3', 'gigeconomy');
         $todo_query = "UPDATE `selfcare_journal` SET `selfcare_journal_removed` = $selfcare_journal_removed WHERE `selfcare_journal_id`=$selfcare_journal_id;";
         
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