<?php
include_once '../../Database/dataconnect.php';

class deleteUser{
  //this method deletes user info based on id 
    public static function delete($id){
        $conn = dataconnect::connect();
        $sql = "DELETE FROM users WHERE id = :id;";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array('id'=>$id));
    }
}
