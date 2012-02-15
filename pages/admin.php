<?php
/**
 *
 * @return type Retourne vrai si user connecté
 */
function isOk() {
    return isset($_SESSION['user']);
}

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
                        <li><a href="index.php?p=ajoutertype">Ajouter un type de bien</a></li>
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
    if(!isOk()) {
        forbidden();
        exit();
    }
    if(!isset($_POST['ajouterbien'])) {
        include_once './sql/type.sql.php';
        $tabType = Array();
        $tabType = loadType();
        $title = 'Ajouter un bien';
        $description = '';
        $contenu = menuAdmin();
        $contenu .= '<form method="POST" action="index.php?p=ajouterbien">
            <div><input type="text" name="denomination" placeholder="Dénomination" /></div>
                                <div><textarea name="description" placeholder="Description"></textarea></div>
                                <div><input type="text" name="surfacehabitable" placeholder="Surface habitable" /></div>
                                <div><input type="text" name="surfaceterrain"  placeholder="Surface du terrain" /></div>
                                <div><input type="text" name="nbpiece" placeholder="Nombre de pièce" /></div>
                                <div><input type="text" name="nbchambre" placeholder="Nombre de chambre" /></div>
                                <div><select name="typechauffage"><option value>Gaz</option></select></div>
                                <div><select name="typelogement"><option>Appartement</option></select></div>
                                <div><textarea name="adresse" placeholder="Adresse"></textarea></div>
                                <div><input type="text" name="cp" id="cp" size="5" placeholder="Code postal"></input></div>
                                <div><select id="ville" name="ville"></select></div>
                                <div><select name="region" id="region"></select></div>
                                <div><input type="text" placeholder="Gaz à effet de serre" size="2" name="ges"></input></div>
                                <div><input type="text" placeholder="DPE" name="dpe"></input></div>
                                <div><select name="disponible"><option>Oui</option></select></div>
                                <div><select name="id_proprietaire"></select></div>
                                <input type="submit" name="ajouterbien" value="Envoyer"></form>';
        display($title,$description,$contenu);
    } else {
        include_once './class/logement.class.php';
        include_once './sql/logement.sql.php';
        $logement = new Logement("", $_POST['denomination'], $_POST['description'], $_POST['surfacehabitable'], $_POST['surfaceterrain'], $_POST['nbpiece'], $_POST['nbchambre'], $_POST['typelogement'], $_POST['typechauffage'], $_POST['adresse'], $_POST['cp'], $_POST['ville'], $_POST['region'], $_POST['ges'], $_POST['dpe'], $_POST['dateajout'], $_POST['disponible'], $_POST['id_proprietaire']);
        saveLogement($logement);
        
        $title = '';
        $description = '';
        $contenu = menuAdmin();
        $contenu .= 'Bien ajouté avec succès.';
        display($title,$description,$contenu);
    }
}

function ajouterType() {
    if(!isOk()) {
        forbidden();
        exit();
    }
    if(!isset($_POST['newtype'])) {
    $title = '';
    $description = '';
    $contenu = menuAdmin();
    $contenu .= '<form method="POST" action="index.php?p=ajoutertype">
                            <label>Libelle</label>
                            <input type="text" name="nomtype"></input>
                            <input type="submit" name="newtype" value="Ajouter">';
    display($title,$description,$contenu);
    } else {
        include_once './class/type.class.php';
        include_once './sql/type.sql.php';
        $newtype = new Type('',$_POST['nomtype'],'1');
        saveType($newtype);
        
        $title = '';
        $description = '';
        $contenu = menuAdmin();
        $contenu .= 'Type ajouté avec succès';
        display($title,$description,$contenu);
    }
}
?>
