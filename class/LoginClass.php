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
                $this->login_id     = $row['login_id'];
                $this->email        = $row['email'];
                $this->password     = $row['password'];
                $this->userrole     = $row['userrole'];
                $this->isactivated  = $row['isactivated'];
                $this->registerdate = $row['registerdate'];
            }
        }
    }
?>
dit is de login class