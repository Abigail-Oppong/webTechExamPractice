<?php
session_start();

require('../controllers/personcontroller.php');

//$_SESSION['update'] = $_GET['updateId'];


if (isset($_GET['updateId'])) {

$id = $_GET['updateId'];
$user = getUser($id);
// var_dump($user);
$pname=$user[0]['pname'];
$pcontact=$user[0]['pcontact'];
$email=$user[0]['email'];
$pdob=$user[0]['pdob'];
$pid = $user[0]['pid'];

	
}
//$id = $_GET['updateId'];


?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Contact</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script type="text/javascript" src="../js/jquery.js"></script>

</head>
<body>
	<h1><a href="../index.php">Back to Home</a></h1>

		<form action="addcontactproc.php" id="addcontact">
		  <input type="hidden" name="id" value="<?=isset($pid)?($pid):'' ?>">
		  <div class="form-row">
		    <div class="col-md-4 mb-3">
		      <label for="validationDefault01">Name</label>
		      <input type="text" name="uname" class="form-control" id="name" placeholder="First name" value="<?= isset($pname)?($pname):'' ?>"autofocus required onkeyup="validateName()"><label id="namePrompt"></label>
		    </div>
		    <div class="col-md-4 mb-3">
		      <label for="validationDefault02">Email</label>
		      <input type="Email" class="form-control" id="email" placeholder="Email" name="uemail" value="<?= isset($email)?($email):'' ?>">
		    </div>
		  </div>
		  <div class="form-row">
		    <div class="col-md-6 mb-3">
		      <label for="validationDefault03">Phone</label>
		      <input type="tel" name="uphone" class="form-control" id="contact" placeholder="Phone Number" maxlength="10" onkeyup="validateContact()" value="<?=isset($pcontact)?($pcontact):'' ?>">
		    </div>
		    <div class="col-md-3 mb-3">
		      <label for="validationDefault04">Date of Birth</label>
		      <input type="Date" name="udob" class="form-control" id="dob" placeholder="Date of Birth" required 
		      value="<?=isset($pdob)?($pdob):'' ?>">
		    </div>
		  </div>
		  <input  class="btn btn-primary" name="<?=isset($pname)? 'update':'uadd' ?>" type="submit" value = "<?=isset($pname)?'Update Contact':'Add New Contact' ?>">

		</form>
		
		<?php if (isset($_SESSION['response'])): ?>

			<div class="alert alert-success alert-dismissible fade show" role='alert'>
				<?php
				echo $_SESSION['response'];
				unset($_SESSION['response']);
				 ?>

			</div>

		<?php endif ?>
<script type="text/javascript" src="../js/ajaxCalls.js"></script>
<script type="text/javascript" src="../js/validate.js"></script>
</body>
</html>
