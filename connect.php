
<?php 
session_start();
include "conew.php";

if(isset($_POST['tname']) && isset($_POST['tpassword'])){
	
	function validate($data){
		$data= trim($data);
		$data= stripslashes($data);
		$data= htmlspecialchars($data);
		return $data;
		
	}
}
	
	$tname = validate($_POST['tname']);
	$tpassword = validate($_POST['tpassword']);
	
	if (empty($tname)){
		   header("location: index.php?error=User name is required");
		exit();
	}else if(empty($tpassword)){
		   header("location: index.php?error=password is required");
		exit();
	}else{
	$sql ="SELECT * FROM login WHERE username='$tname' AND password='$tpassword'";

	$result = mysqli_query($con, $sql);
	
	 if(mysqli_num_rows($result)>0){

               $row=mysqli_fetch_assoc($result);
			   
			 
			    if($row['username']===$tname && $row['password']===$tpassword){
	
     header("location: cont.php");
	
    exit();
}

	 }
else{
	header("location: index.php");
	exit();
	
}

	}
?>