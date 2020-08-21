<?php
	function console_log( $data ){
  		echo '<script>';
  		echo 'console.log('. json_encode( $data ) .')';
  		echo '</script>';
	}
?>
<script>
    //var to_do_id = sessionStorage.getItem("to_do_id");
    var socialmedia_id = sessionStorage.getItem("socialmedia_id");
    document.cookie = "socialmedia_id=" + socialmedia_id;
    document.write("In updateSocialMediaJournal " + socialmedia_id);
</script>
<?php
		 console_log( 'inside updatesSocialMediaJournal: ' );
		 
         $socialmedia_id = $_COOKIE['socialmedia_id'];
     	 console_log( 'In updateSocialMediaJournal socialmedia_id: ' . $socialmedia_id );
     	 
     	 //$to_do_id = ltrim($todo_id, 'del');
     	 //console_log( 'In updateToDO to_do_id: ' . $supportteam_id );
     	 
      	 
      	 //$to_do_id = $_POST['to_do_id'];
      	 $socialmedia_journal_removed = 1;
      	 
      	 console_log( 'After COOKIE: ID is: ' . $socialmedia_id );
      	 console_log( 'socialmedia_journal_removed is: ' . $socialmedia_journal_removed );
      	 	
      	 //$connection = mysqli_connect('mysql', 'cclark1072', 'Xvw4456yah32', 'gigeconomy');		        
         $connection = mysqli_connect('localhost', 'root', 'Tp!dfg43:fbc3', 'gigeconomy');
         $todo_query = "UPDATE `socialmedia_journal` SET `socialmedia_journal_removed` = $socialmedia_journal_removed WHERE `socialmedia_id`=$socialmedia_id;";
         
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
          window.location = "../../pages/socialmedia.php";
    //}, 4000);
</script>