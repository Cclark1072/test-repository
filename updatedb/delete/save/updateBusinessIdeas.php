<?php
	function console_log( $data ){
  		echo '<script>';
  		echo 'console.log('. json_encode( $data ) .')';
  		echo '</script>';
	}
?>
<script>
    //var to_do_id = sessionStorage.getItem("to_do_id");
    var business_ideas_id = sessionStorage.getItem("business_ideas_id");
    document.cookie = "business_ideas_id=" + business_ideas_id;
    document.write("In updateBusinessIdeas " + business_ideas_id);
</script>
<?php
		 console_log( 'inside updateBusinessIdeas: ' );
		 
         $business_ideas_id = $_COOKIE['business_ideas_id'];
     	 console_log( 'In updateBusinessIdeas business_ideas_id: ' . $business_ideas_id );
     	 
     	 //$to_do_id = ltrim($todo_id, 'del');
     	 //console_log( 'In updateToDO to_do_id: ' . $supportteam_id );
     	 
      	 
      	 //$to_do_id = $_POST['to_do_id'];
      	 $business_removed = 1;
      	 
      	 console_log( 'After COOKIE: ID is: ' . $business_ideas_id );
      	 console_log( 'gig_journal_removed is: ' . $business_removed );
      	 
      	 //$connection = mysqli_connect('mysql', 'cclark1072', 'Xvw4456yah32', 'gigeconomy');			        
         $connection = mysqli_connect('localhost', 'root', 'Tp!dfg43:fbc3', 'gigeconomy');
         $todo_query = "UPDATE `business_ideas` SET `business_removed` = $business_removed WHERE `business_ideas_id`=$business_ideas_id;";
         
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