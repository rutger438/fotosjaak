<?php
    require_once('MySqlDatabaseClass.php');

    // Dit is de class definitie van de LoginClass
    class LoginClass {
        //Fields
        private $login_id;
        private $email;
        private $password;
        private $userrole;
        private $isactivated;
        private $registerdate;

        //Constructor van LoginClass
        public function __construct()
        {

        }

        //Method find_by_sql
        public function find_by_sql($query)
        {
            global $database;
            //roep de fire_query method op met het $database object
            $result = $database->fire_query($query);
        }
    }
?>