<?php

session_start();
//include the controller
require('../controllers/personcontroller.php');

$id = $_SESSION['updateId'];
//check if submit button was click
if (isset($_GET['uadd'])) {
    //grab form data and store in variable
    $pname = $_GET['uname'];
    $pemail = $_GET['uemail'];
    $pphone = $_GET['uphone'];
    $pdob = $_GET['udob'];



    //call function to add
    $updatecontact =  update_contact_ctrl($id,$pname, $pemail, $pphone, $pdob);
    //echo result
    if ($updatecontact) {
        echo "contact updated successfully";
    }else{
        echo "Update failed";
    }
}



?>
