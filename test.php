<?php

include('class/connexion.class.php');
$connexion = new Connexion();

$sql = 'SELECT * FROM cp';
$req = mysql_query($sql);

$contenu = "";
while($data = mysql_fetch_assoc($req)) {
        $ville = str_replace("ç", "&ccedil;", $data['VILLE']);
        $sql2 = 'UPDATE cp SET VILLE="'.$ville.'" WHERE ID="'.$data['ID'].'"';
        $req2 = mysql_query($sql2);
        
        $contenu .= "<br/>".$data['VILLE'];
}
echo $contenu;
?>
