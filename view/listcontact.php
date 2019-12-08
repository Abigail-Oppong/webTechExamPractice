<?php
session_start();


//require('../controllers/personcontroller.php');

//echo $value['pname'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Contact</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- bootstrap css cdn -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- bootstrap js cdn -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>





<div class="container">
  <h1><a href="../index.php">Back to Home</a></h1>
  <h1>List of all contact</h1>
  <table class="table table-hover ">
    <thead>
      <tr>

        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>DOB</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>

<?php

require('../controllers/personcontroller.php');

$displaylist = displayallcontacts();

if ($displaylist) {
	foreach ($displaylist as $value) {
		$id = $value['pid'];
		$name = $value['pname'];
		$email = $value['email'];
		$phone =$value['pcontact'];
		$dob = $value['pdob'];
        $_SESSION['id']=$id;
        $uid=$_SESSION['id'];

		echo "<tr>";
		echo "<td>$name</td>";
		echo "<td>$email</td>";
		echo "<td>$phone</td>";
		echo "<td>$dob</td>";
		echo "<td><a href='delete.php?deleteId=$id' class= 'btn btn-outline-danger'>Delete</a>
        | <a href='update.php?updateId=$uid' class= 'btn btn-outline-success'>Update</a>
  </td>";

  echo "</tr>";








	}
}





?>
    </tbody>
  </table>

 <?php if (isset($_SESSION['response'])): ?>
<div class='alert alert-danger'>

	<?php
	echo $_SESSION['response'];
	unset($_SESSION['response']);
	?>

	</div>
<?php endif ?>

</div>



<!--
	<?php
		require('../controllers/personcontroller.php');

		$displaylist = displayallcontacts();

		if ($displaylist) {
			//loop the through the array and display each
			//print_r($displaylist);
			//echo "<br><br>";

			foreach ($displaylist as $key => $value) {
				//print_r($key);
				//print_r($value['email']);
				$id = $value['pid'];
				$_SESSION['id']=$id;
				$sessionId = $_SESSION['id'];

				echo "<br>";
				echo ($value['pname'])."  <a href='delete.php?deleteId=$id'>Delete</a> || <a href='update.php?updateId=$sessionId'>Update</a>";



				}






		}

	?> -->

</body>
</html>
