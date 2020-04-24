<?php
//this code is checking if any of the field on add page is empty
if(isset($_POST['save'])){
  include_once '../../Controller/addUser.php';
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $personId = $_POST['personId'];
  $phoneNumber = $_POST['phoneNumber'];
  $eMail = $_POST['eMail'];
  if(empty($firstName)||empty($lastName)||empty($personId)||empty($phoneNumber)||empty($eMail)){
    header("Location: ../../public/pages/userAdd.php?add=empty");
  }
  else{
    //if it isn't access to databese through add controller and submit info
    addUser::add($firstName,$lastName,$personId,$phoneNumber,$eMail);
    header("Location: ../../public/pages/userAdd.php?add=success");
  }
}
else{
    header("Location: ../../public/pages/userAdd.php?add=error");
}
