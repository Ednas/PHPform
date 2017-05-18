<?php

require './User.php';

/* The UserBuilder class handles determining 
 *   whether $_GET or $_POST contains the user's
 *   information, and the trouble of actually 
 *   instantiating the user. */
class UserBuilder {

  /* These are the keys to make the user */
  private $firstName = 'first-name';

  private $lastName = 'last-name';

  private $email = 'email';

  public function buildUser ($get, $post) {
    $source = $this->determineSource($get, $post);

    if (!$source)
      return null;
    else if (array_key_exists('last-name', $source)) 
      return new User($source['email'], $source['first-name'], $source['last-name']);
    else
      return new User($source['email'], $source['first-name'], $source['last-name']);
      return new User($source['email'], $source['first-name']);
  }

  // Determines whether $_GET or $_POST has what we need.
  private function determineSource ($get, $post) {
    if ($this->hasRequiredParameters($get))
      return $get;
    else if ($this->hasRequiredParameters($post))
      return $post;
    else
      return null;
  }

  private function hasRequiredParameters($arr) {

    $has_first_name = array_key_exists($this->firstName, $arr);
    $has_email      = array_key_exists($this->email, $arr);

    return ($has_first_name && $has_email);
  }

}
