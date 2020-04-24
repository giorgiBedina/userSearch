<?php

include_once '../../Model/userInfo.php';

class readUser{
  //this method reads user's data from table and creates object for reading
  public static function read($id){
    $conn = dataConnect::connect();
    $sql = "SELECT * FROM users WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array('id'=>$id));
    if($row = $stmt->fetch()){
      $user = new userInfo($row['givenName'],$row['surName'],$row['personalID'],$row['phoneNumber'],$row['eMail']);
      return $user;
    }
  }
}
