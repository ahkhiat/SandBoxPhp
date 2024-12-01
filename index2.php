<?php

// echo "Hello World";

// class Personne 
// {
//     public $nom;
//     public $age;
    
//     function __construct($nom, $age)
//     {
//         $this->nom = $nom;
//         $this->age = $age;
//     }

//     function afficher_details()
//     {
//         echo 'La personne s\'appelle '. $this->nom . 'et a ' . $this->age . ' ans';
//     }

// }

// $personne1 = new Personne("Sabri", "41");
// $personne1->afficher_details();


class CompteBancaire
{
    private $titulaire;
    private $solde;

    private $numeroCompte;
    private static $compteur = 1;

    function __construct($titulaire, $solde)
    {
        $this->titulaire = $titulaire;
        $this->solde = $solde;
        $this->numeroCompte = self::$compteur++;
    }

    function afficheSolde()
    {
        echo 'Le solde du compte n° '. $this->numeroCompte .'de ' . $this->titulaire . ' est de ' . $this->solde . ' €';
    }

    function crediter($montant)
    {
        $this->solde += $montant;
        $this->afficheSolde();
    }

    function debiter($montant)
    {
        $this->solde -= $montant;
        $this->afficheSolde();
    }



}

$compte1 = new CompteBancaire("Sabri", "450");
$compte1->afficheSolde();

$compte1->crediter( 20);

$compte2 = new CompteBancaire("Nadia", "200");
$compte2->afficheSolde();
