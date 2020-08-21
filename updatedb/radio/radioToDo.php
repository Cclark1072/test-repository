<?php
	function console_log( $data ){
  		echo '<script>';
  		echo 'console.log('. json_encode( $data ) .')';
  		echo '</script>';
	}
?>
<script>
    //var to_do_id = sessionStorage.getItem("to_do_id");
    var to_do_id = sessionStorage.getItem("radio_todo_id");
</script>
<?php
		 //console_log( 'inside radioToDo: ' );
		 
         $to_do_id = $_COOKIE['radio_todo_id'];
     	 //console_log( 'In radioToDO to_do_id: ' . $to_do_id );
     	 
     	 $to_do_checkbox = "checked";
      	 //console_log( 'to_do_checkbox is: ' . $to_do_checkbox );
      	 	
      	 $connection = mysqli_connect('mysql', 'cclark1072', 'Xvw4456yah32', 'gigeconomy');		        
         //$connection = mysqli_connect('localhost', 'root', 'Tp!dfg43:fbc3', 'gigeconomy');
         $todo_query = "UPDATE `to_do` SET `to_do_checkbox` = '$to_do_checkbox' WHERE `to_do_id`=$to_do_id;";
         
         //console_log( 'todo_query: ' . $todo_query );
         
         $result = mysqli_query($connection, $todo_query);
         if($result){
        		//console_log( 'Adding checked was successful ' );
            	$smsg = "To Do Insert Success.";
         }else{
        		//console_log( 'Adding checked was failed ' );
            	$fmsg ="To Do Insert Failed";
         }
         
         
?>
<script>
    //setTimeout(function(){
          window.location = "../../index-2.php";
    //}, 4000);
</script>