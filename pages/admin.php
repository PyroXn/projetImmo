<?php

function admin() {
    $title = '';
    $description = '';
    $contenu = menuLeft();
    $contenu .= '<h1>Administration</h1>
                                <span><label>Nom d\'utilisateur</label><input type="text" name="login" /></span>
                                <span><label>Mot de passe</label><input type="password" name="password" /></span>';
    display($title,$description,$contenu);
}
?>
