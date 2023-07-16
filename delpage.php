<?php 

include "conew.php";

    $un =$_GET['un'];
    $sql = "DELETE FROM userform WHERE Uname='$un' " ;

     $result = mysqli_query($con, $sql);

      header("Location: cont.php");
	  exit();
?>

