<?php
//call on the person class
require('../classes/personclass.php');

//controller function to add
function addcontactctrl($a, $b, $c, $d){
	//create a new instance of the class
	$insertp = new person_class;

	//run the insert method
	$checkinsert = $insertp->addcontact_mthd($a, $b, $c, $d);

	if ($checkinsert) {
		return $checkinsert;
	}else{
		return false;
	}

	//return result
}

?>