<?php

session_start();
//include the controller
require('../controllers/personcontroller.php');


//$_SESSION['update'] = $_GET['updateId'];
$id = (isset($_GET['updateId']) ? $_GET['updateId'] : '');
//$id = $_GET['updateId'];

$user = getUser($id);
if($user){


foreach ($user as $value) {

  $pname=$value['pname'];
  $pcontact=$value['pcontact'];
  $email=$value['email'];
  $pdob=$value['pdob'];
  $pid = $value['pid'];
  $_SESSION['id'] = $pid;

  //return $pid;

}
}



?>






<!DOCTYPE html>
<html>
<head>
    <title>Update Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <h1><a href="../index.php">Back to Home</a></h1>
<?php if($user): ?>


        <form action="">
          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="validationDefault01">Name</label>
              <input type="text" name="uname" class="form-control" id="validationDefault01" placeholder="First name" value="<?php echo $pname; ?>" required>
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationDefault02">Email</label>
              <input type="Email" class="form-control" id="validationDefault02" placeholder="new Email" name="uemail" value="<?php echo $email; ?>" required>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationDefault03">Phone</label>
              <input type="tel" name="uphone" class="form-control" id="validationDefault03" placeholder=" new Phone Number" maxlength="10" value="<?php echo $pcontact; ?>" required>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationDefault04">Date of Birth</label>
              <input type="Date" name="udob" class="form-control" id="validationDefault04" placeholder="Date of Birth" value="<?php echo $pdob ?>" required>
            </div>
          </div>
          <button class="btn btn-outline-success " name="uadd" type="submit">Update Contact</button>
        </form>
      <?php endif ?>

    <?php




//check if submit button was click
if (isset($_GET['uadd'])){
    //grab form data and store in variable
    $pname = $_GET['uname'];

    $pemail = $_GET['uemail'];
    $pphone = $_GET['uphone'];
    $pdob = $_GET['udob'];
   //$id = (isset($_GET['updateId']) ? $_GET['updateId'] : '');





    //call function to add
    $updatecontact =  update_contact_ctrl($_SESSION['id'],$pname, $pemail, $pphone, $pdob);
    //echo result
    if ($updatecontact) {
        $_SESSION['response']= "contact updated successfully";
        $_SESSION['res_type'] = 'success';
    }else{
        $_SESSION['response']= "Failed to update contact";
        $_SESSION['res_type'] = 'danger';
    }
}




     ?>

         <?php if (isset($_SESSION['response'])): ?>

      <div class="alert alert-<?php echo $_SESSION['res_type'];?>">
        <?php
        echo $_SESSION['response'];
        unset($_SESSION['response']);
         ?>

      </div>

    <?php endif ?>

</body>
</html>


