<?php

class SavingAccount extends Account 
{
    private $interestRate;

    public function __construct($name, $balance, $interestRate)
    {
        parent::__construct($name, $balance);
        $this->interestRate = $interestRate;
    }

    public function __toString()
    {
        return parent::__toString() . " et son taux d'interêt est de " . $this->interestRate . "%";
    }

    // J'ai fait un getBalance dans Account, car $balance est private, et n'est accessible que
    // dans les instances de Account, pas dans les classes qui héritent, comme SavingAccount.
    // C'est pour cela que l'on crée un getter, qui permet d'acceder à balance de façon indirecte.
    // J'aurais pu passer $balance en protected, elle aurait été accessible dans les classes filles.

    public function applyInterest()
    {
        $newBalance = $this->getBalance() + $this->getBalance() * $this->interestRate / 100;
        $this->setBalance($newBalance);
    }

}