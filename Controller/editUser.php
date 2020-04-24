<?php
include_once '../../Model/userInfo.php';

class editUser{
    //this method updates users info based on given data from edit page
    public static function edit($firstName,$lastName,$personId,$phoneNumber,$eMail,$id){
        $user = new userInfo($firstName,$lastName,$personId,$phoneNumber,$eMail);
        $conn = dataconnect::connect();
        $sql = "UPDATE users SET givenName = :givenName,surName = :surName,personalID = :personalID,phoneNumber = :phoneNumber,eMail = :eMail
                WHERE id = :id;";
        $stmt = $conn->prepare($sql);
        $data = array('givenName'=>$user->getName(),'surName'=>$user->getLastName(),
                'personalID'=>$user->getPersonId(),'phoneNumber'=>$user->getPhoneNumber(),
                'eMail'=>$user->geteMail(),'id'=>$id);
        $stmt->execute($data);
    }
}
