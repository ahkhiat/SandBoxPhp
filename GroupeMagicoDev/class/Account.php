<?php

class Account {

    private $name;

    private $balance;

    private $accountNumber;

    //méthode statique car partagée entre tous les objets instanciés
    private static $accountNumberGenerator = 1;

    function __construct($name, $balance) {
        $this->name = $name;
        $this->balance = $balance;
        $this->accountNumber = self::$accountNumberGenerator++;
    }

    // Méthode par défaut pour "lire" l'objet
    function __toString() {
        return "Le compte n° " . $this->accountNumber . 
               " appartenant à " . $this->name . 
               " affiche un solde de " . $this->balance . "€";
    }

    // Je pourrais également faire :
    // function afficher() {
    // return "gnagnagna";
    // }

    // et l'appeler avec $variable->afficher();

    public function deposit($amount) {
        $this->balance += $amount;
        echo $this;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function setBalance($balance)
    {
        $this->balance = $balance;
    }


}