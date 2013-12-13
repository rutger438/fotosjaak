<?php
/**
 * Created by PhpStorm.
 * User: rutger
 * Date: 13-12-13
 * Time: 10:10
 */

class SessionClass {
  //Fields
    private $id;
    private $email;
    private $userrole;
    private $logged_in = false;
  //Porperties


  //Constructor
    public function __construct()
    {


    }

  //Method Login
    public function login($loginClassObject)
    [
        $this->id = $loginClassObject->get_login_id();

    ]
}
?>