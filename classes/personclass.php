<?php
//include the database class
require('../settings/db_class.php');

/**
 * 
 */
class person_class extends db_connection
{
	//properties
	public $user_id = null;
	public $user_name = null;

	//method for insert
	public function addcontact_mthd($a, $b, $c, $d){
		//write the query
		$sql = "INSERT INTO `studentlist`(`pname`, `email`, `pcontact`, `pdob`) VALUES('$a', '$b', '$c', '$d')";

		//run the query
		return $this->db_query($sql);

	}
}

?>