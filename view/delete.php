<?php
session_start();
require('../controllers/personcontroller.php');
 $id = $_GET['deleteId'];

$delete = delete_contact_ctrl($id);

if ($delete) {
    header('Location: listcontact.php');
    $_SESSION['response'] = 'Record deleted succesfully!';


} else {
     header('Location: listcontact.php');
    $_SESSION['response'] = 'Record cannot be deleted!';


}



?>
