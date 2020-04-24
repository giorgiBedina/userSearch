<?php
//this code checks if search bar is empty
if(isset($_POST['search'])){
  $searchIt = $_POST['searchThis'];
  if(empty($searchIt)){
    header("Location: ../../public/pages/userList.php?search=error");
  }
  else{
    //if not code will try to find word, given from search bar
    include_once '../../Controller/searchUser.php';
    searchUser::search($searchIt);
}
}
