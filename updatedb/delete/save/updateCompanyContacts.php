<?php
	function console_log( $data ){
  		echo '<script>';
  		echo 'console.log('. json_encode( $data ) .')';
  		echo '</script>';
	}
?>
<script>
    //var to_do_id = sessionStorage.getItem("to_do_id");
    var company_contacts_id = sessionStorage.getItem("company_contacts_id");
    document.cookie = "company_contacts_id=" + company_contacts_id;
    document.write("In updateCompanyContacts " + company_contacts_id);
</script>
<?php
		 console_log( 'inside updateCompanyContacts: ' );
		 
         $company_contacts_id = $_COOKIE['company_contacts_id'];
     	 console_log( 'In updateCompanyContacts company_contacts_id: ' . $company_contacts_id );
     	 
     	 //$to_do_id = ltrim($todo_id, 'del');
     	 //console_log( 'In updateToDO to_do_id: ' . $supportteam_id );
     	 
      	 
      	 //$to_do_id = $_POST['to_do_id'];
      	 $company_contacts_removed = 1;
      	 
      	 console_log( 'After COOKIE: ID is: ' . $company_contacts_id );
      	 console_log( 'company_contacts_removed is: ' . $company_contacts_removed );
      	 
      	 //$connection = mysqli_connect('mysql', 'cclark1072', 'Xvw4456yah32', 'gigeconomy');			        
         $connection = mysqli_connect('localhost', 'root', 'Tp!dfg43:fbc3', 'gigeconomy');
         $todo_query = "UPDATE `company_contacts` SET `company_contacts_removed` = $company_contacts_removed WHERE `company_contacts_id`=$company_contacts_id;";
         
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