<?php

class User {
  
  public $firstName;

  private $lastName;

  private $emailAddress;

  public function __construct ($email, $first, $last = "") {
    $this->firstName = $first;
    $this->lastName = $last;
    $this->emailAddress = $email;
  }

  public function getFullName() {
    return $this->firstName . " " . $this->lastName;
  } 
}
