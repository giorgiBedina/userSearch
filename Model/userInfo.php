<?php

include_once '../../Database/dataConnect.php';

//Create class for user data
class userInfo extends dataConnect{
  private $firstName;
  private $lastName;
  private $personId;
  private $phoneNumber;
  private $eMail;

  public function __construct($firstName,$lastName,$personId,$phoneNumber,$eMail){
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->personId = $personId;
    $this->phoneNumber = $phoneNumber;
    $this->eMail = $eMail;
  }

  public function getName(){
    return $this->firstName;
  }

  public function setName($firstName){
    $this->firstName = $firstName;
  }

  public function getLastName(){
    return $this->lastName;
  }

  public function setLastName($lastName){
    $this->lastName = $lastName;
  }

  public function getPersonId(){
    return $this->personId;
  }

  public function setPersonId($personId){
    $this->personId = $personId;
  }

  public function getPhoneNumber(){
    return $this->phoneNumber;
  }

  public function setPhoneNumber($phoneNumber){
    $this->phoneNumber = $phoneNumber;
  }

  public function geteMail(){
    return $this->eMail;
  }

  public function seteMail($eMail){
    $this->eMail = $eMail;
  }
}
