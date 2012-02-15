<?php

class Annonce {
    
    private $id;
    private $prix;
    private $type;
    private $datecreation;
    private $id_logement;
    
    function __construct($id=null, $prix=null, $type=null, $datecreation=null, $id_logement=null) {
        $this->id = $id;
        $this->prix = $prix;
        $this->type = $type;
        $this->datecreation = $datecreation;
        $this->id_logement = $id_logement;
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getDatecreation() {
        return $this->datecreation;
    }

    public function setDatecreation($datecreation) {
        $this->datecreation = $datecreation;
    }

    public function getId_logement() {
        return $this->id_logement;
    }

    public function setId_logement($id_logement) {
        $this->id_logement = $id_logement;
    }



}
?>
