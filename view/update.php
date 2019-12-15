<?php

session_start();
//include the controller
require('../controllers/personcontroller.php');

//$_SESSION['update'] = $_GET['updateId'];
$id = (isset($_GET['updateId']) ? $_GET['updateId'] : '');
//$id = $_GET['updateId'];

$user = getUser($id);
// var_dump($user);
$pname=$user[0]['pname'];
$pcontact=$user[0]['pcontact'];
$email=$user[0]['email'];
$pdob=$user[0]['pdob'];
$pid = $user[0]['pid'];
?>


<!DOCTYPE html>
<html>
<head>
    <title>Update Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/ajaxCalls.js"></script>
  <script type="text/javascript" src="../js/jquery.js"></script>
</head>
<body>
    <h1><a href="../index.php">Back to Home</a></h1>



        <form action="">
          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="validationDefault01">Name</label>
              <input type="text" name="uname" class="form-control" id="name" placeholder="First name" value="<?php echo isset($pname)? $pname : ''; ?>" required onkeyup="validateName()">
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationDefault02">Email</label>
              <input type="Email" class="form-control" id="email" placeholder="new Email" name="uemail" value="<?= $email ?>" required onsubmit="validateEmail()">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationDefault03">Phone</label>
              <input type="tel" name="uphone" class="form-control" id="contact" placeholder=" new Phone Number" maxlength="10" value="<?php echo $pcontact; ?>" required onkeyup="validateContact()">
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationDefault04">Date of Birth</label>
              <input type="Date" name="udob" class="form-control" id="dob" placeholder="Date of Birth" value="<?php echo $pdob ?>" required>
              <input type="hidden" name="id" value="<?= $pid ?>">
            </div>
          </div>
          <button class="btn btn-outline-success " name="uadd" type="submit">Update Contact</button>
        </form>
      

    <?php




//check if submit button was click
if (isset($_GET['uadd'])){
    //grab form data and store in variable
    $pname = $_GET['uname'];

    $pemail = $_GET['uemail'];
    $pphone = $_GET['uphone'];
    $pdob = $_GET['udob'];
    $pid = $_GET['id'];

   //$id = (isset($_GET['updateId']) ? $_GET['updateId'] : '');





    //call function to add
    $updatecontact =  update_contact_ctrl($pid,$pname, $pemail, $pphone, $pdob);
    //echo result
    if ($updatecontact) {
      header('Location: listcontact.php');
        $_SESSION['update_response']= "contact updated successfully";

    }else{
      header('Location: listcontact.php');
        $_SESSION['response']= "Failed to update contact";

    }
}




     ?>
<script type="text/javascript" src="../js/validate.js"></script>
</body>
</html>


