<?php

function admin() {
    $title = '';
    $description = '';
    $contenu = menuLeft();
    $contenu .= '<h1>Administration</h1>
                            <form method="POST" action="index.php?p=login">
                                <span><label>Nom d\'utilisateur</label><input type="text" name="login" /></span><br />
                                <span><label>Mot de passe</label><input type="password" name="password" /></span>
                                <input type="submit" value="Connexion" />
                                </form>';
    display($title,$description,$contenu);
}

function login() {
    include_once 'sql/user.sql.php';
    if(exist($_POST['login'], $_POST['password'])) {
        $_SESSION['user'] = load($_POST['login'], $_POST['password']);
        header('Location: index.php?p=accueil');
    } else {
        forbidden();
    }
}

function menuAdmin() {
        $contenu = '<div id="colonneDroite">
                <nav>
                    <ul id="menu">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Ventes</a></li>
                        <li><a href="#">Location</a></li>
                        <li><a href="#">Partenariat</a></li>
                        <li><a href="#">Infos pratiques</a></li>
                        <li><a href="#">Plan d\'accès</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>';
    return $contenu;
}
/**
 * Accueil de l'espace admin
 */
function accueil() {
    $title = '';
    $description = '';
    
    
}
?>
