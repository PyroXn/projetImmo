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
    include_once './sql/user.sql.php';
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
                        <li><a href="index.php?p=ajouterbien">Ajouter un bien</a></li>
                        <li><a href="#">Ajouter un type de bien</a></li>
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
    $contenu = menuAdmin();
    display($title,$description,$contenu);
    
    
    
}

function ajouterbien() {
    $title = 'Ajouter un bien';
    $description = '';
    $contenu = menuAdmin();
    $contenu .= '<div><label>Description du bien</label>
                            <textarea name="description"></textarea></div>
                           <div> <label>Prix/Loyer</label>
                            <input type="text" name="prix"></input></div>
                            <div><label>Type</label>
                            <select name="type">
                                <option>Maison</option>
                                <option>Appartement</option>
                            </select></div>
                            <div><label>Code Postal</label>
                            <input type="text" name="cp"></input></div>
                            <div><label>Ville</label>
                            <input type="text" name="ville"></input></div>
                            <div><label>Region</label>
                            <select name="region">
                                <option>Lorraine</option>
                            </select></div>
                            <div><label>Nombre de piece</label>
                            <input type="text" size="3" name="nbpiece"></input></div>
                            <div><label>Nombre de chambre</label>
                            <input type="text" size="3" name="nbchambre"></input></div>
                            <div><label>Surface habitable</label>
                            <input type="text" name="surfacehab"></input></div>
                            <div><label>Surface en ares</label>
                            <input type="text" name="surfaceares"></input></div>
                            <div><label>DPE</label>
                            <input type="text" placeholder="Gaz à effet de serre" size="2"></input>
                            <input type="text" placeholder="Autre" size="2"></input></div>';
    display($title,$description,$contenu);
}
?>
