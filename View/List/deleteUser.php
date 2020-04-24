<?php
//this code deletes user's info from database from userList page with delete button which value is equal to user id
if(isset($_POST['delete'])){
  $id = $_POST['delete'];
  echo $id;
  include_once '../../Controller/deleteUser.php';
  deleteUser::delete($id);

  header("Location: ../../public/pages/userList.php?delete=success");
}
