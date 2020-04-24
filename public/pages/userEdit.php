<?php
  session_start();

  include_once '../../Controller/readUser.php';

  $id = $_SESSION["id"];
  $user = readUser::read($id);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add Customer</title>
    <link rel="stylesheet" href="../assets/css/userAdd.css">
  </head>
  <body>
    <a id="listLink" href="userList.php">Customer List</a>
    <div class="submitInfo">
      <h1>Add Customer</h1>
      <form class="addInfo" action="../../View/Edit/editUser.php" method="post">
        <p>given name</p>
        <input type="text" name="firstName" placeholder=":Change first name" value=<?php echo $user->getName() //additional info what we are trying to change?>>
        <br>
        <p>last name</p>
        <input type="text" name="lastName" placeholder=":Change last name" value=<?php echo $user->getLastName() //additional info what we are trying to change//additional info what we are trying to change//additional info what we are trying to change//additional info what we are trying to change?>>
        <br>
        <p>id number</p>
        <input type="text" name="personId" placeholder=":Change id number" value=<?php echo $user->getPersonId() //additional info what we are trying to change//additional info what we are trying to change//additional info what we are trying to change?>>
        <br>
        <p>phone number</p>
        <input type="text" name="phoneNumber" placeholder=":Change phone number" value=<?php echo $user->getPhoneNumber() //additional info what we are trying to change//additional info what we are trying to change?>>
        <br>
        <p>eMail address</p>
        <input type="text" name="eMail" placeholder=":Change eMail address" value=<?php echo $user->geteMail() //additional info what we are trying to change?>>
        <br>
        <button id="save" type="submit" name="edit" value=<?php echo $id;//button was given value as id so we could easily access database based on id itself?>>Save Changes</button>
      </form>
    </div>
  </body>
</html>
