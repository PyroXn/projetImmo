<?php

/**
 *
 * @param type $login
 * @param type $password
 * @return type Retourne vrai si user exist
 */
function exist($login, $password) {
    $password = md5($password);
    $sql = 'SELECT * FROM user WHERE login = "'.$login.'" AND password = "'.$password.'"';
    $req = mysql_query($sql);
    return mysql_num_rows($req) == 1;  
}

/**
 *
 * @param type $login
 * @param type $password
 * @return type Retourne un tableau avec les l'user
 */
function load($login,$password) {
    $password = md5($password);
    $sql = 'SELECT * FROM user WHERE login = "'.$login.'" AND password = "'.$password.'"';
    $req = mysql_query($sql);
    return mysql_fetch_assoc($req);
}

function loadId($id) {
    $sql = 'SELECT * FROM user WHERE id="'.$id.'"';
    $req = mysql_query($sql);
    return mysql_fetch_assoc($sql);
}
?>
