<?php
$personne1 = new Personne("SMAIL", "Stéphane");
$personne2 = new Personne("MURMANN", "Mickaël");
// Je crée une nouvelle instance de la classe Personne

var_dump($personne1)."<br>";
var_dump($personne2)."<br>";

echo $personne1->getNom()."<br>";
echo $personne1->getPrenom()."<br>";

$personne1->setNom("GIBELLO");

echo $personne1->getNom();

class Personne{
/*  Le nom de la classe prend toujours une majuscule.
    Une classe est un ensemble d'états et de comportements.
    Une classe comprend des attributs (propriétés)  */
    private $nom;
    private $prenom;

public function __construct($nom, $prenom){
    /* Le constructeur est une méthode magique.
        Elle permet de créer une instance de la classe personne  */
    $this->Nom = $nom;
    //$this est l'instance actuelle de l'objet en gros l'objet sur lequel je suis entrain de travailler.
    $this->Prénom = $prenom;
}
public function getNom(){
    return $this->Nom;
}
public function getPrenom(){
    return $this->Prénom;
}
public function setNom($nom){
    $this->Nom = $nom;
}
public function setPrenom($prenom){
    $this->Prénom = $prenom;
}
public function publicInfos(){
    return '<p>'."Le nom de la personne est : ".$this->getNom()." Et son prénom est".$this->getPrenom().'</p>';
}
}