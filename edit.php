<?php
include "conew.php";
$result = mysqli_query($con,"SELECT * FROM userform");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Retrive data</title>

 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table class="table">
	   <thead>

        <tr>

        <th>Name</th>

        <th>Age</th>

        <th>Gender</th>

     

    </tr>

    </thead>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	                td><?php echo $row['uname'];  ?></td>

                    <td><?php echo $row['uage']; ?></td>

                    <td><?php echo $row['ugender']; ?></td>
					
		<td><a href="update-process.php?un=<?php echo $row['uname'];?>">Update</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>