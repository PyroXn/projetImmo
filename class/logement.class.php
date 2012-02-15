<?php

class Logement {

    private $id;
    private $denomination;
    private $description;
    private $surfacehabitable;
    private $surfaceterrain;
    private $nbpiece;
    private $nbchambre;
    private $typelogement;
    private $typechauffage;
    private $adresse;
    private $cp;
    private $ville;
    private $region;
    private $ges;
    private $dpe;
    private $dateajout;
    private $disponible;
    private $id_proprietaire;

    function __construct($id=null, $denomination=null, $description=null, $surfacehabitable=null, $surfaceterrain=null, $nbpiece=null, $nbchambre=null, $typelogement=null, $typechauffage=null, $adresse=null, $cp=null, $ville=null, $region=null, $ges=null, $dpe=null, $dateajout=null, $disponible=null, $id_proprietaire=null) {
        $this->id = $id;
        $this->denomination = $denomination;
        $this->description = $description;
        $this->surfacehabitable = $surfacehabitable;
        $this->surfaceterrain = $surfaceterrain;
        $this->nbpiece = $nbpiece;
        $this->nbchambre = $nbchambre;
        $this->typelogement = $typelogement;
        $this->typechauffage = $typechauffage;
        $this->adresse = $adresse;
        $this->cp = $cp;
        $this->ville = $ville;
        $this->region = $region;
        $this->ges = $ges;
        $this->dpe = $dpe;
        $this->dateajout = $dateajout;
        $this->disponible = $disponible;
        $this->id_proprietaire = $id_proprietaire;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getDenomination() {
        return $this->denomination;
    }

    public function setDenomination($denomination) {
        $this->denomination = $denomination;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getSurfacehabitable() {
        return $this->surfacehabitable;
    }

    public function setSurfacehabitable($surfacehabitable) {
        $this->surfacehabitable = $surfacehabitable;
    }

    public function getSurfaceterrain() {
        return $this->surfaceterrain;
    }

    public function setSurfaceterrain($surfaceterrain) {
        $this->surfaceterrain = $surfaceterrain;
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

    public function getTypelogement() {
        return $this->typelogement;
    }

    public function setTypelogement($typelogement) {
        $this->typelogement = $typelogement;
    }

    public function getTypechauffage() {
        return $this->typechauffage;
    }

    public function setTypechauffage($typechauffage) {
        $this->typechauffage = $typechauffage;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function getCp() {
        return $this->cp;
    }

    public function setCp($cp) {
        $this->cp = $cp;
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

    public function getGes() {
        return $this->ges;
    }

    public function setGes($ges) {
        $this->ges = $ges;
    }

    public function getDpe() {
        return $this->dpe;
    }

    public function setDpe($dpe) {
        $this->dpe = $dpe;
    }

    public function getDateajout() {
        return $this->dateajout;
    }

    public function setDateajout($dateajout) {
        $this->dateajout = $dateajout;
    }

    public function getDisponible() {
        return $this->disponible;
    }

    public function setDisponible($disponible) {
        $this->disponible = $disponible;
    }

    public function getId_proprietaire() {
        return $this->id_proprietaire;
    }

    public function setId_proprietaire($id_proprietaire) {
        $this->id_proprietaire = $id_proprietaire;
    }

}

?>
