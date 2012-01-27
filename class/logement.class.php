<?php

class Logement {
    
    private $id;
    private $description;
    private $prix;
    private $type;
    private $codepostal;
    private $ville;
    private $region;
    private $nbpiece;
    private $nbchambre;
    private $surfacehabitable;
    private $surfaceares;
    private $dpe;
    
    function __construct($id=null, $description=null, $prix=null, $type=null,$codepostal=null, $ville=null, $region=null, $nbpiece=null, $nbchambre=null, $surfacehabitable=null, $surfaceares=null, $dpe=null) {
        $this->id = $id;
        $this->description = $description;
        $this->prix = $prix;
        $this->type = $type;
        $this->codepostal = $codepostal;
        $this->ville = $ville;
        $this->region = $region;
        $this->nbpiece = $nbpiece;
        $this->nbchambre = $nbchambre;
        $this->surfacehabitable = $surfacehabitable;
        $this->surfaceares = $surfaceares;
        $this->dpe = $dpe;
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
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

    public function getCodepostal() {
        return $this->codepostal;
    }

    public function setCodepostal($codepostal) {
        $this->codepostal = $codepostal;
    }

    public function getVille() {
        return $this->ville;
    }

    public function setVille($ville) {
        $this->ville = $ville;
    }

    public function getRegion() {
        return $this->region;
    }

    public function setRegion($region) {
        $this->region = $region;
    }

    public function getNbpiece() {
        return $this->nbpiece;
    }

    public function setNbpiece($nbpiece) {
        $this->nbpiece = $nbpiece;
    }

    public function getNbchambre() {
        return $this->nbchambre;
    }

    public function setNbchambre($nbchambre) {
        $this->nbchambre = $nbchambre;
    }

    public function getSurfacehabitable() {
        return $this->surfacehabitable;
    }

    public function setSurfacehabitable($surfacehabitable) {
        $this->surfacehabitable = $surfacehabitable;
    }

    public function getSurfaceares() {
        return $this->surfaceares;
    }

    public function setSurfaceares($surfaceares) {
        $this->surfaceares = $surfaceares;
    }

    public function getDpe() {
        return $this->dpe;
    }

    public function setDpe($dpe) {
        $this->dpe = $dpe;
    }


}
?>
