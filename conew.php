
<?php 

$user='root';
$pass='';
$db='MyStool';

$con = mysqli_connect('localhost', $user , $pass , $db);


if ($con === false){
	
	 die ("Error:unable to connect. 
	 mysqli_connect_error()");

	 
 }


 ?> 
 
