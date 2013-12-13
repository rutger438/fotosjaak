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
        session_start();
    }

  //Method Login
    public function login($loginClassObject)
    {
        $this->id           = $_SESSION['id']           = $loginClassObject->getLogin_id();
        $this->email        = $_SESSION['email']        = $loginClassObject->getEmail();
        $this->userrole     = $_SESSION['userrole']     = $loginClassObject->getUserrole();
        $this->logged_in    = $_SESSION['logged_in']    = true;
    }

    public function logout()
    {
        session_destroy();
        $this->logged_in = false;
    }
}
$session = new SessionClass();
?>