<?php
class Type {
    private $id;
    private $libelle;
    private $categorie;
    
    function __construct($id=null, $libelle=null, $categorie=null) {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->categorie = $categorie;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getLibelle() {
        return $this->libelle;
    }

    public function setLibelle($libelle) {
        $this->libelle = $libelle;
    }

    public function getCategorie() {
        return $this->categorie;
    }

    public function setCategorie($categorie) {
        $this->categorie = $categorie;
    }


}
?>
