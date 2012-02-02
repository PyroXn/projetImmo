<?php

function coupDeCoeur(){
    include_once './sql/logement.sql.php';
    include_once './sql/image.sql.php';
        
    $tabc2c = getCoupDeCoueur();
    $contenu = '<div id="ligneCoupDeCoeur">';
    
    while($data = mysql_fetch_assoc($tabc2c)) {
        $lienFirstImage = loadFirstImage($data['id']);
        $contenu .= '<img src="thumb.php?src='.$lienFirstImage.'&x=130&y=130&f=0"></img>
                    '.$data['denomination'].'<br />'.$data['ville'];
    }

    $contenu .= '</div>';
    
    return $contenu;
}


?>