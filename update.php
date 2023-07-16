<?php
include "conew.php";
if(count($_POST)>0) {
mysqli_query($con,"UPDATE userform set Uname='" . $_POST['Uname'] . "', Uage='" . $_POST['Uage'] . "' , Ugender='" . $_POST['Ugender'] . "' WHERE Uname='" . $_POST['Uname'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($con,"SELECT * FROM userform WHERE uname='" . $_GET['Uname'] . "'");
$row= mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>

<head></head>
<body>
        
		<h2>User Update Form</h2>

        <form action="update.php" method="POST">
        

          <fieldset>

            <legend>Personal information:</legend>

            First name:<br>
			<input type="hidden" name="Uname" class="txtField" value="<?php echo $row['Uname']; ?>">

            <input type="text" name="Uname" value="<?php echo $row['Uname']; ?>"  >

            
            <br>

            age:<br>

            <input type="text" name="Uage" class="txtField" value="<?php echo $row['Uage']; ?>" >
			<br>
			
			 <input type="radio" name="Ugender"  value="Male">Male

    <input type="radio" name="Ugender" value="Female">Female

    <br><br>

        
            <input type="submit" value="submit" name="submit">

          </fieldset>
			 
			 <div><?php if(isset($message)) { echo $message;  header("location: view.php");
	
			 exit();}?></div>
			 
        </form> 

    </body>

 </html> 
	