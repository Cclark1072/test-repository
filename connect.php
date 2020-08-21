<?php
//console_log( 'In Connect.php ' );

$connection = mysqli_connect('mysql', 'cclark1072', 'Xvw4456yah32', 'gigeconomy');

if (!$connection){
    //console_log( 'Connection failed ' );
    die("Database Connection Failed" . mysqli_error($connection));
}

$select_db = mysqli_select_db($connection, 'gigeconomy');

if (!$select_db){
    //console_log( 'Selection failed ' );
    die("Database Selection Failed" . mysqli_error($connection));
}
?>