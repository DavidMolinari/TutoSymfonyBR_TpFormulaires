<?php
namespace Bdls\AppBundle\Entity;

class Employe{
    private $num;
    private $nom;
    private $prenom;
    private $dateNaissance;

    public function getNum(){return $this->num;}
    public function setNum($num){$this->num = $num;}

    public function getNom(){return nom;}
    public function setNom($nom){$this->nom = $nom;}

    public function getPrenom(){return $this->prenom;}
    public function setPrenom($prenom){$this->prenom = $prenom;}

    public function getDateNaissance(){return $this->dateNaissance;}
    public function setDateNaissance($dateNaissance){$this->dateNaissance = $dateNaissance;}

    // pas de constructeurs à faire pour l'instant
    function __construct($num,$nom,$prenom,$dateNaissance){}
}