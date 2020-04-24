<?php

include_once '../../Model/userInfo.php';

//class fot search engine
class searchUser{
  //this method searches specific  user by given search word
  public static function search($searchIt){
    $conn = dataConnect::connect();

    //this checks if the word matches any of the users info
    $sql = "SELECT * FROM users WHERE givenName = '$searchIt' or surName = '$searchIt' or personalID  = '$searchIt' or phoneNumber = '$searchIt' or eMail = '$searchIt';";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $count = $stmt->rowCount();

    //this code identifies how many search reasult were found
    if($count > 0){
      if($count == 1){
        echo "<p class='successful'>There is ".$count." result</p>";
      }
      else{
        echo "<p class='successful'>There are ".$count." results</p>";
      }

      //echoing table with users data
      echo "<dir class='userTable'>
              <table>
                <tr>
                  <th>given name</th>
                  <th>surName</th>
                  <th>ID number</th>
                  <th>phone number</th>
                  <th>eMail</th>
                  <th></th>
                  <th></th>
                </tr>";
      while($row = $stmt->fetch()){


        //session started for sending id to edit page
        

        $_SESSION["id"] = $row['id'];

        $user = new userInfo($row['givenName'],$row['surName'],$row['personalID'],$row['phoneNumber'],$row['eMail']);
        echo "<form class='action' action='../../public/pages/userEdit.php' method='POST'>
                  <tr>
                    <td class='information'>".$user->getName()."</td>
                    <td class='information'>".$user->getLastName()."</td>
                    <td class='information'>".$user->getPersonId()."</td>
                    <td class='information'>".$user->getPhoneNumber()."</td>
                    <td class='information'>".$user->geteMail()."</td>
                    <td><button type='submit' value=".$row['id']." name='edit'>edit</button></td></form>
                    <td><form action='../../View/List/deleteUser.php' class='action' method='POST'><button type='submit' name='delete' value=".$row['id'].">delete</button></form>
                  </tr>";
      }
      echo " </table>
          </dir>";
    }
    //if there is no match echos this 
    else{
      echo "<p class='unsuccessful'>There is no result</p>";
    }
  }
}
