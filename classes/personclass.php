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

	public function display_all_contact_mthd(){
		//write the sql for select
		$sql = "SELECT * FROM studentlist";
		//run the sql execution
		return $this->db_query($sql);
	}

	public function delete_contact_mthd($a){
		//write the sql for select
		$sql = "DELETE
					 FROM studentlist
				WHERE pid='$a'";
		//run the sql execution
		return $this->db_query($sql);
	}

	public function getUserById($id){
		$sql = "SELECT *
					FROM studentlist
				WHERE `pid`='$id'";
		//run the sql execution
		return $this->db_query($sql);

	}

	public function update_contact_mthd($id,$a,$b,$c,$d){
		//write the sql for select
		$sql = "UPDATE studentlist
					SET `pname`='$a',
						`email`='$b',
						`pcontact`='$c',
						`pdob`='$d'
					WHERE pid='$id'";
		//run the sql execution
		return $this->db_query($sql);
	}
}

?>
