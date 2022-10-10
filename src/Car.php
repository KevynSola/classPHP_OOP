<?php

require_once 'Vehicle.php';
class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    
    protected string $typeEnergy;

    protected int $levelEnergy;

    public function __construct(string $color, int $nbrSeats, string $typeEnergy)
    {
        parent::__construct($color, $nbrSeats, $typeEnergy);
        $this->setEnergy($typeEnergy);
    }

    public function getEnergy(): string
    {
        return $this->typeEnergy;
    }

    public function setEnergy(string $typeEnergy): Car
    {
        if (in_array($typeEnergy, self::ALLOWED_ENERGIES)){
            $this->typeEnergy = $typeEnergy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->levelEnergy;
    }

    public function setEnergyLevel(int $levelEnergy): void
    {
        $this->levelEnergy = $levelEnergy;
    }
}