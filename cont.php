<?php

include "conew.php";

 if (isset($_POST['submit'])) {

    $uname =$_POST["firstname"];

    $uage = $_POST["age"];

    $ugender = $_POST["gender"];

    $sql = "INSERT INTO userform VALUES ('$uname', '$uage','$ugender')";
    if(mysqli_query($con, $sql)){
	       header("location: view.php");
  }
  else{
	  "ERROR";
  }
 }
 
 mysqli_close($con);
?>




<!DOCTYPE html>

<html>

<body>

<h2>Signup Form</h2>

<form action="" method="POST">
 <fieldset>

    <legend>Personal information:</legend>

    First name:<br>

    <input type="text" name="firstname">

    <br>

    Age:<br>

    <input type="text" name="age">

    <br>

    Gender:<br>

    <input type="radio" name="gender" value="Male">Male

    <input type="radio" name="gender" value="Female">Female

    <br><br>

    <input type="submit" name="submit" value="submit">
	
	<a class="btn btn-info" href="Logout.php">LogOut</a>

  </fieldset>

</form>


 </body>

</html>