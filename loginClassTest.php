<h3>Dit is de loginClassTest pagina</h3>
<?php
    //voeg het bestand LoginClass.php in
    require_once("class/LoginClass.php");

    $login = new LoginClass();

    $query = "SELECT * FROM `login`";

    $result = $login::find_by_records($query);

    foreach ($result as $value)
    {
        echo $value->getLogin_id()." | ".$value->getEmail()." | ".$value->getPassword()." | ".$value->getUserrole()." | ".$value->getIsactivated()." | ".$value->getRegisterdate()."<br>";
}
?>