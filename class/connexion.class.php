<?php

class Connexion {

    function construct__() {
        mysql_connect("localhost","root","root");
        mysql_select_db("projetimmo");
    }

}

?>
