<?php
/**
 *
 * @return Type Retourne un tableau avec les lien des images
 */
function loadImage(Logement $log) {
    include_once './class/logement.class.php';
    
    $sql = 'SELECT * FROM image WHERE idlogment = '. $log->getId() .' ORDER BY id';
    
    $req = mysql_query($sql);
    $tabImage = array();
    
    while($data = mysql_fetch_assoc($req)) {
        $objet = new Image($data['id'],$data['idimage'],$data['lien']);
        $tabImage[] = $objet;
    }
    return $tabImage;
    
}


/**
 *
 * @return le lien de l'image principale du logement
 */
function loadFirstImage($idlog) {
    include_once './class/logement.class.php';
    
    $sql = 'SELECT * FROM image WHERE idlogement = '. $idlog .' ORDER BY id ASC LIMIT 1';
    
    $req = mysql_query($sql);
    $tabImage = array();
    
    while($data = mysql_fetch_assoc($req)) {
        $lienFirstImage = $data['lien'];
    }
    
    return $lienFirstImage;
    
}

?>
