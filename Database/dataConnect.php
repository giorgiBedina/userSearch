<?php
abstract class dataConnect{
  //Single database client instance
  private static $connection;

  //Disable creating new connection to database
  private function __construct(){}

  //Create instante of database client
  public static function connect(){
    if(is_null(static::$connection)){
      $host = "localhost";
      $user = "root";
      $password = "";
      $dbname = "userdata";
      $dsn = "mysql:host=$host;dbname=$dbname";

      //create PDO connection and set fetch method
      static::$connection = new PDO($dsn,$user,$password);
      static::$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
      }
      return static::$connection;
  }

  //disabele cloninh
  final public function __clone(){
    throw new Exception('Feature disabled.');
  }

  //disable wakeup of class
  final public function __wakeup(){
    throw new Exception('Feature disabled.');
  }
}
