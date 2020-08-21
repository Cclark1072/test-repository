<?php
	function console_log( $data ){
  		echo '<script>';
  		echo 'console.log('. json_encode( $data ) .')';
  		echo '</script>';
	}
?>
<script>
    //var to_do_id = sessionStorage.getItem("to_do_id");
    var social_media_id = sessionStorage.getItem("social_media_id");
    document.cookie = "social_media_id=" + social_media_id;
    document.write("In updateSocialMedia " + social_media_id);
</script>
<?php
		 console_log( 'inside updatesSocialMedia: ' );
		 
         $social_media_id = $_COOKIE['social_media_id'];
     	 console_log( 'In updateSocialMedia social_media_id: ' . $social_media_id );
     	 
     	 //$to_do_id = ltrim($todo_id, 'del');
     	 //console_log( 'In updateToDO to_do_id: ' . $supportteam_id );
     	 
      	 
      	 //$to_do_id = $_POST['to_do_id'];
      	 $social_media_removed = 1;
      	 
      	 console_log( 'After COOKIE: ID is: ' . $social_media_id );
      	 console_log( 'social_media_removed is: ' . $social_media_removed );
      	 	
      	 //$connection = mysqli_connect('mysql', 'cclark1072', 'Xvw4456yah32', 'gigeconomy');		        
         $connection = mysqli_connect('localhost', 'root', 'Tp!dfg43:fbc3', 'gigeconomy');
         $todo_query = "UPDATE `social_media` SET `social_media_removed` = $social_media_removed WHERE `social_media_id`=$social_media_id;";
         
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