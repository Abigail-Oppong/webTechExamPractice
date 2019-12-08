<?php
//call on the person class
require('../classes/personclass.php');

//controller function to add
function addcontactctrl($a, $b, $c, $d){
	//create a new instance of the class
	$insertp = new person_class;

	//run the insert method
	$checkinsert = $insertp->addcontact_mthd($a, $b, $c, $d);


	if ($checkinsert)
		return $checkinsert;
	else
		return false;


	//return result
}

//controller functio to display al contact
function displayallcontacts(){
	//create an instance of the contact class
	$displayc = new person_class();

	//run the method for select
	$runselect = $displayc->display_all_contact_mthd();

	//check if select worked
	if ($runselect){
		//create an array
		$allcontact = array();
		//loop through the fetch and add each to the array
			while ($record = $displayc->db_fetch()) {
				//assing each record to the array
				$allcontact[] = $record;
			}
		//return the array
		return $allcontact;


}
}

function delete_contact_ctrl($a)
{
	$deletePerson = new person_class;

	$checkdelete = $deletePerson->delete_contact_mthd($a);

	if ($checkdelete)
		return $checkdelete;
	else
		return false;


}

function update_contact_ctrl($id,$a,$b,$c,$d)
{
	$user = new person_class;

	$checkuser = $user->update_contact_mthd($id,$a,$b,$c,$d);

	if ($checkuser)
		return $checkuser;
	else
		return false;
}

function getUser($a){
	$user = new person_class();
	$checkuser = $user->getUserById($a);
	if ($checkuser){
		//create an array
		$contact = array();
		//loop through the fetch and add each to the array
			while ($record = $user->db_fetch()) {
				//assing each record to the array
				$contact[] = $record;
			}
		//return the array
		return $contact;


}

}

function emailExist($a){
	$user = new person_class();
	$checkuser = $user->emailExist($a);
	if ($checkuser){
		//create an array
		$contact = array();
		//loop through the fetch and add each to the array
			while ($record = $user->db_fetch()) {
				//assing each record to the array
				$contact[] = $record;
			}
		//return the array
		return $contact;


}

}



?>
