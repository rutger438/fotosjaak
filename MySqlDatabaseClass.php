<?php
    //Het config.php bestand word ingesloten in het bestand MySqlDatabaseClass.php
    //zodat we gebruik kunnen maken van de gedefineerde constanten
    require_once('config/config.php');

    //dit is de class definitie van MySqlDataabaseClass
    class MySqlDatabaseClass
    {
        //Fields
        private $db_connection;

        //Constructor in PHP heeft altijd dezelfde naam _construct
        public function _construct()
        {
            //Maakt contact met de MySQL server
            $this->db_connection = mysql_connect(SERVERNAME, USERNAME, PASSWORD);

            //Selecteer een database
            mysql_select_db(DATABASE, $this->db_connection)
            or die('MySqlDatabaseClass: '.mysql_error());
        }

        // Dit is method(function binnen een class) die SQL query's kan afvuren op de database
        // het resultaat wordt dan teruggegeven door de method
        public function fire_query($query)
        {
            // Stuurt de query die meegegeven is als argument van de functie fire_query naar de database
            $result = mysql_query($query, $this->db_connection)
            or die('MySqlDatabaseClass: '.mysql_error());
            return $result;
        }

    }
    // Maak nu een object (instantie) van de MySqlDatabaseClass
    $database = new MySqlDatabaseClass();
?>