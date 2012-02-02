<?php
session_start();

include_once './class/connexion.class.php';
$connexion = new Connexion();

if (!isset($_GET['p'])) {
    $_GET['p'] = "home";
}
if ($_GET['p'] == 'home') {
    home();
} elseif($_GET['p'] == 'admin') {
    include_once './pages/admin.php'; admin();
} elseif($_GET['p'] == 'accueil') {
    include_once './pages/admin.php'; accueil();
} elseif($_GET['p'] == 'login') {
    include_once './pages/admin.php'; login();
} elseif($_GET['p'] == 'ajouterbien') {
    include_once './pages/admin.php'; ajouterbien();
} elseif($_GET['p'] == 'ajoutertype') { 
    include_once './pages/admin.php'; ajoutertype();
} elseif($_GET['p'] == 'contact') {
    contact();
} elseif($_GET['p'] == 'contactsend') {
    contactSend();
}

// AJAX
elseif($_GET['p'] == 'loadville') {    loadville(); }
elseif($_GET['p'] == 'loadregion') {    loadregion(); }

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
                        <li><a href="index.php?p=contact">Contact</a></li>
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
    include_once './pages/modCoupDeCoeur.php';
    $title = 'projetimmo';
    $description = 'projetimmo';
    $contenu = menuLeft();
    $contenu .= ' <h2>Un titre</h2>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mollis orci sit amet mi egestas a tincidunt libero dignissim. Cras tincidunt rutrum sem, sit amet pharetra ante varius a. Praesent feugiat accumsan felis at dignissim. Cras nec elit vitae sapien ultrices volutpat. Nunc velit risus, volutpat ut tempus ut, tristique quis lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam eros diam, tincidunt ac hendrerit at, tempus at dolor. Fusce felis metus, imperdiet eu pellentesque sed, lacinia quis leo. Suspendisse ut ligula et magna lacinia pulvinar. Nunc lacinia enim sed elit venenatis vehicula. Praesent at massa dui. Nullam condimentum vulputate metus non euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In hac habitasse platea dictumst. Vestibulum a quam ante, sit amet fermentum orci.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mollis orci sit amet mi egestas a tincidunt libero dignissim. Cras tincidunt rutrum sem, sit amet pharetra ante varius a. 
                </p>';
    $contenu .= coupDeCoeur();
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

// AJAX
function loadville() {
    $sql = 'SELECT * FROM cp WHERE CP="'.$_GET['cp'].'"';
    $req = mysql_query($sql);
    $contenu = '';
    while($data = mysql_fetch_assoc($req)) {
        $contenu .= '<option value="'.$data['VILLE'].'">'.$data['VILLE'].'</option>';
    }
    echo $contenu;
}
function loadregion() {
    $sql = 'SELECT * FROM cp WHERE CP="'.$_GET['cp'].'"';
    $req = mysql_query($sql);
    $contenu = '';
    while($data = mysql_fetch_assoc($req)) {
        $contenu .= '<option value="'.$data['REGION'].'">'.$data['REGION'].'</option>';
    }
    echo $contenu;
}

function contact() {
    $title = 'Contactez nous';
    $description = 'Contactez nous';
    $contenu = '<h1>Contactez nous</h1>
                    <form class="encadrement" method="POST" action="index.php?p=contactsend">
                        <legend>Civilité* :</legend>
                        <input type="radio" name="civilite" value="Mme" checked="checked">Mme</input>            
                        <input type="radio" name="civilite" value="Mr">Mr</input>
                        <input type="radio" name="civilite" value="Mlle">Mlle</input>
                        
                        <div><legend>Nom* :</legend><input type="text" name="nom" id="nom" placeholder="nom"><span class="error"></span></div>
                        <div><legend>Prénom* :</legend><input type="text" name="prenom" id="prenom" placeholder="prenom"><span class="error"></span></div>
                        <div><legend>Adresse* :</legend><input type="text" name="adresse" id="adresse" placeholder="adresse"><span class="error"></span></div>
                        <div><legend>Code postal* :</legend><input type="text" name="cp" id="cp" placeholder="cp"><span class="error"></span></div>
                        <div><legend>Ville* :</legend><input type="text" name="ville" id="ville" placeholder="ville"><span class="error"></span></div>
                        <div><legend>Pays* :</legend><input type="text" name="pays" id="pays" placeholder="pays"><span class="error"></span></div>
                        <div><legend>Téléphone :</legend><input type="text" name="telephone" id="telephone" placeholder="telephone"><span class="error"></span></div>
                        <div><legend>Email* :</legend><input type="text" name="email" id="email" placeholder="email"><span class="error"></span></div>
                        <div>
                            <legend>Votre question* :</legend>
                            <textarea name="question" id="question" placeholder="Question"></textarea><span class="error"></span>
                        </div>
                        <input type="submit" id="submit" value="Envoyer">
                    </form>';
    display($title,$description,$contenu);

}


function contactSend() {
    $destinataire = "contact@mydevhouse.com";
    $civilite = $_POST['civilite'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $cp = $_POST['cp'];
    $ville = $_POST['ville'];
    $pays = $_POST['pays'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $question = $_POST['question'];
    $objet = 'Contact';
    
    $message_html = '<html>
                    <head></head>
                    <body>

                        <h3>Message de :</h3>'.$civilite.' '.$nom.' '.$prenom.' +
                        <h3>Adresse :</h3>'.$adresse.' '.$cp.' '.$cp.' ('.$pays.')<br/>
                        <h3>Téléphone :</h3>'.$telephone.'<br />
                        <h3>Email :</h3>'.$email.'<br />
                        <h3>Question :</h3>'.$question.'<br />
                     </body>
                     </html>';

    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";
    $headers .= "Content-Type: text/html; charset=\"UTF-8\"";

    // envois du mail    
    mail($destinataire, $objet, $message_html, $headers);

    $title = 'Message envoyé';
    $description = 'Contactez nous';
    $contenu = '<h1>Nous contacter</h1>';
    $contenu .= 'Votre message a bien été envoyé. Nous y répondrons dans les plus brefs délais.';
    display($title, $contenu,$description);

}

?>
