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

        //properties
        //getter voor login id
        public function getLogin_id(){ return $this->login_id; }
        public function getEmail(){ return $this->email; }
        public function getPassword(){ return $this->password; }
        public function getUserrole(){ return $this->userrole; }
        public function getIsactivated(){ return $this->isactivated; }
        public function getRegisterdate(){ return $this->registerdate; }
        //Constructor van LoginClass
        public function __construct()
        {

        }

        //Method find_by_sql
        public function find_by_sql($query)
        {
            // global zorgt ervoor dat $database ook binnen de find_by_sql haakjes bekent is.
            global $database;

            //roep de fire_query method op met het $database object
            $result = $database->fire_query($query);

            // Dit is een array. Dit array bevat LoginClass-objecten.
            $object_array = array();

            //Met deze while list vullen we het $object-array met LoginClass-objecten
            while ($row = mysql_fetch_array($result))
            {
                // Alle lokale values vullen met de values uit de database
                $object = new LoginClass();
                $object->login_id     = $row['login_id'];
                $object->email        = $row['email'];
                $object->password     = $row['password'];
                $object->userrole     = $row['userrole'];
                $object->isactivated  = $row['isactivated'];
                $object->registerdate = $row['registerdate'];

                //stop het $object gemaakt van LoginClass in het object array genaamd $object_array
                $object_array[] = $object;
            }
            return $object_array;
        }
    }
?>