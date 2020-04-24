<?php
//this code is checking if any of the field on add page is empty
if(isset($_POST['edit'])){
  include_once '../../Controller/editUser.php';
  $id = $_POST['edit'];
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $personId = $_POST['personId'];
  $phoneNumber = $_POST['phoneNumber'];
  $eMail = $_POST['eMail'];
  if(empty($firstName)||empty($lastName)||empty($personId)||empty($phoneNumber)||empty($eMail)){
    header("Location: ../../public/pages/userEdit.php?Edit=empty");
  }
  else{
    //if it isn't access to databese through edit controller and update info
    editUser::edit($firstName,$lastName,$personId,$phoneNumber,$eMail,$id);
    header("Location: ../../public/pages/userEdit.php?edit=success");
  }
}
else{
    header("Location: ../../public/pages/userEdit.php?Edit=error");
}
