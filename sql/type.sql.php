<?php
/**
 *
 * @return Type Retourne un tableau avec tout les types
 */
function loadType($categorie) {
    include_once './class/type.class.php';
    $sql = 'SELECT * FROM type WHERE categorie="'.$categorie.'" ORDER BY id';
    $req = mysql_query($sql);
    $tabType = array();
    while($data = mysql_fetch_assoc($req)) {
        $objet = new Type($data['id'],$data['libelle'],$data['categorie']);
        $tabType[] = $objet;
    }
    return $tabType;
}

/**
 * Permet d'ajouter un type depuis un objet type
 * @param type $libelle
 * @param type $categorie 
 */
function saveType(Type $type) {
    include_once './class/type.class.php';
    $sql = 'INSERT INTO type(libelle,categorie) VALUES("'.$type->getLibelle().'","'.$type->getCategorie().'")';
    $req = mysql_query($sql);
}
?>
