<?php

include_once "../../Model/userInfo.php";

class addUser{
  //this method creats user onject and adds info to database 
public static function add($firstName,$lastName,$personId,$phoneNumber,$eMail){
  $conn = dataConnect::connect();
  $user = new userInfo($firstName,$lastName,$personId,$phoneNumber,$eMail);
  $data = array('givenName'=>$user->getName(),'surName'=>$user->getLastName(),
          'personalID'=>$user->getPersonId(),'phoneNumber'=>$user->getPhoneNumber(),
          'eMail'=>$user->geteMail());
  $sql = "INSERT INTO users(givenName,surName,personalID,phoneNumber,eMail)
          VALUES(:givenName,:surName,:personalID,:phoneNumber,:eMail);";
  $stmt = $conn->prepare($sql);
  $stmt->execute($data);
}
}
