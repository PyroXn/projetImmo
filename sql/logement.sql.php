<?php

function saveLogement(Logement $logement) {
    $sql = 'INSERT INTO logement(description,prix,type,cp,ville,region,nbpiece,nbchambre,surfacehab,surfaceares,dpe)
                VALUES ("'.$logement->getDescription().'","'.$logement->getPrix().'","'.$logement->getType().'","'.$logement->getCodepostal().'","'.$logement->getVille().'","'.$logement->getRegion().'","'.$logement->getNbpiece().'","'.$logement->getNbchambre().'","'.$logement->getSurfacehabitable().'","'.$logement->getSurfaceares().'","'.$logement->getDpe().'")';
    $req = mysql_query($sql);
}

function getCoupDeCoueur() {
    $sql = 'SELECT * FROM logement WHERE coupdecoeur = true AND LIMIT 0,100 ORDER BY id';
    $req = mysql_query($sql);
}

?>
