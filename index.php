<?php
session_start();
if (!isset($_GET['p'])) {
    $_GET['p'] = "home";
}
if ($_GET['p'] == 'home') {
    home();
} elseif($_GET['p'] == 'admin') {
    include_once './pages/admin.php'; admin();
}

function menuLeft() {
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
                <div id="rechercherapide">
                    <span class="rapide">Recherche rapide</span>
                    <label>Type de bien</label>
                    <select><option>Maison</option></select>
                    <label>Budget</label>
                    <select><option>0-1500€</option></select>
                    <label>Code Postal</label>
                    <input type="text" size="5" />
                    <input type="button" value="Chercher" />
                </div>
            </div>';
    return $contenu;
}

function home() {
    $title = 'projetimmo';
    $description = 'projetimmo';
    $contenu = menuLeft();
    $contenu .= ' <h2>Un titre</h2>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mollis orci sit amet mi egestas a tincidunt libero dignissim. Cras tincidunt rutrum sem, sit amet pharetra ante varius a. Praesent feugiat accumsan felis at dignissim. Cras nec elit vitae sapien ultrices volutpat. Nunc velit risus, volutpat ut tempus ut, tristique quis lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam eros diam, tincidunt ac hendrerit at, tempus at dolor. Fusce felis metus, imperdiet eu pellentesque sed, lacinia quis leo. Suspendisse ut ligula et magna lacinia pulvinar. Nunc lacinia enim sed elit venenatis vehicula. Praesent at massa dui. Nullam condimentum vulputate metus non euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In hac habitasse platea dictumst. Vestibulum a quam ante, sit amet fermentum orci.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mollis orci sit amet mi egestas a tincidunt libero dignissim. Cras tincidunt rutrum sem, sit amet pharetra ante varius a. 
                </p>';
    display($title,$description,$contenu);
}

function recherche() {
    $contenu = '';
}

function display($title,$description,$contenu) {
    include('./templates/haut.php');
    echo $contenu;
    include('./templates/bas.php');
}

function forbidden() {
    $title = 'Accès interdit';
    $description = 'Accès interdit';
    $contenu = '<h1>Accès interdit</h1>
                            <p>Merci de bien vouloir retourner à <a href="index.php?p=home">l\'accueil</a></p>';
    display($title,$description,$contenu);
}
?>
