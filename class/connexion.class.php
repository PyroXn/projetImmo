<?php

class Connexion {

    function __construct() {
        mysql_connect("localhost", "root", "root");
        mysql_select_db("projetimmo");
    }

}

?>
