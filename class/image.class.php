<?php
class Image {
    private $id;
    private $idlogment;
    private $lien;
    
    function __construct($id=null, $idlogment=null, $lien=null) {
        $this->id = $id;
        $this->idlogment = $idlogment;
        $this->lien = $lien;
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getIdlogment() {
        return $this->idlogment;
    }

    public function setIdlogment($idlogment) {
        $this->idlogment = $idlogment;
    }

    public function getLien() {
        return $this->lien;
    }

    public function setLien($lien) {
        $this->lien = $lien;
    }
}
?>
