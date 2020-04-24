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
      <form class="addInfo" action="../../View/Add/addUser.php" method="post">
        <p>given name</p>
        <input type="text" name="firstName" placeholder=":Enter first name">
        <br>
        <p>last name</p>
        <input type="text" name="lastName" placeholder=":Enter last name">
        <br>
        <p>id number</p>
        <input type="text" name="personId" placeholder=":Enter id number">
        <br>
        <p>phone number</p>
        <input type="text" name="phoneNumber" placeholder=":Enter phone number">
        <br>
        <p>eMail address</p>
        <input type="text" name="eMail" placeholder=":Enter eMail address">
        <br>
        <input id="save" type="submit" name="save" value="Add">
      </form>
    </div>
  </body>
</html>
