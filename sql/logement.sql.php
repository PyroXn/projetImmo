<?php

function saveLogement(Logement $logement) {
    $sql = 'INSERT INTO logement(description,prix,type,cp,ville,region,nbpiece,nbchambre,surfacehab,surfaceares,dpe)
                VALUES ("'.$logement->getDescription().'","'.$logement->getPrix().'","'.$logement->getType().'","'.$logement->getCodepostal().'","'.$logement->getVille().'","'.$logement->getRegion().'","'.$logement->getNbpiece().'","'.$logement->getNbchambre().'","'.$logement->getSurfacehabitable().'","'.$logement->getSurfaceares().'","'.$logement->getDpe().'")';
    $req = mysql_query($sql);
}

/**
 *
 * @return un tableau avec les logement coup de coeur
 */
function getCoupDeCoueur() {
    $sql = 'SELECT * FROM logement WHERE coupdecoeur = true ORDER BY dateajout LIMIT 0,2';
    $req = mysql_query($sql);
    return $req;
}

?>
