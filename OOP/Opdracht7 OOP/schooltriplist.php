<?php

namespace SchoolTrip;

abstract class Persoon
{
    // Eigenschappen
    protected string $klas;
    protected bool $betaald;

    // Constructor
    public function __construct(string $klas, bool $betaald)
    {
        $this->klas = $klas;
        $this->betaald = $betaald;
    }

    // Setters
    public function setKlas(string $klas): void
    {
        $this->klas = $klas;
    }

    public function setBetaald(bool $betaald): void
    {
        $this->betaald = $betaald;
    }

    // Getters
    public function getKlas(): string
    {
        return $this->klas;
    }

    public function getBetaald(): bool
    {
        return $this->betaald;
    }

    // Abstracte methode
    abstract public function role(): string;
}

class Docent extends Persoon
{

}

class SchoolTripList
{
    // Properties
    private array $personen;

    // Constructor
    public function __construct()
    {
        $this->personen = [];
    }

    // Methode
    public function addPersoon(Persoon $persoon): void
    {
        $this->personen[] = $persoon;
    }

    public function printList(): void
    {
        foreach ($this->personen as $persoon) {
            echo "Klas: " . $persoon->getKlas() . ", Betaald: " . ($persoon->getBetaald() ? "Ja" : "Nee") . "\n";
        }
    }
}

// Voorbeeld
$schoolTripList = new SchoolTripList();

$schoolTripList->addPersoon(new Persoon("sod2a", true));
$schoolTripList->addPersoon(new Pers)

?>