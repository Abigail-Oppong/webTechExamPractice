<?php
//include the controller
require('../controllers/personcontroller.php');

//check if submit button was click
if (isset($_GET['uadd'])) {
	//grab form data and store in variable
	$pname = $_GET['uname'];
	$pemail = $_GET['uemail'];
	$pphone = $_GET['uphone'];
	$pdob = $_GET['udob'];

	//call function to add
	$ret =  addcontactctrl($pname, $pemail, $pphone, $pdob);
	//echo result
	if ($ret) {
		echo "New contact Inserted";
	}else{
		echo "Insert failed";
	}
}



?>