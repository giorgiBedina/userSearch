<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Customer List</title>
    <link rel="stylesheet" href="../assets/css/userList.css">
  </head>
  <body>
    <a id="add" href="userAdd.php">add Customer</a>
    <br>
    <div class="searchArea">
      <h1>Customer List</h1>
      <form class="search" method="post">
        <input class="searchBar" type="text" name="searchThis" placeholder=":Search Customer">
        <input class="searchButton"type="submit" name="search" value="search">
      </form>
    </div>
    <?php
      include_once '../../View/List/searchUser.php'
    ?>
  </body>
</html>
