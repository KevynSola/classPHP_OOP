<?php

class Vehicle 
{
    protected int $nbrWheels = 4;
    protected int $currentSpeed = 0;
    protected string $color;
    protected int $nbrSeats;
    protected string $typeEnergy;
    protected int $levelEnergy = 0;


    public function __construct(string $color, int $nbrSeats, string $typeEnergy)
    {
        $this->color = $color;
        $this->nbrSeats = $nbrSeats;
        $this->typeEnergy = $typeEnergy;
    }

    public function start(): string
    {
        return "Let's GOOOOO!!";
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "On avance !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0){
            $this->currentSpeed--;
            $sentence .= "Freine ! ";
        }
        $sentence .= "Je suis stoppé !";
        return $sentence;
    }

    // Wheels fonction
    public function setNbrWheels(int $nbrWheels): void
    {
        $this->nbrWheels = $nbrWheels;
    }

    public function getNbrWheels()
    {
        return $this->nbrWheels;
    }

    // Speed fonction
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }

    // Color fonction
    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    // Seats fonction
    public function getNbrSeats()
    {
        return $this->nbrSeats;
    }

    public function setNbrSeats(string $nbrSeats): void
    {
        $this->nbrSeats = $nbrSeats;
    }

    // Energy fonction
    public function getTypeEnergy()
    {
        return $this->typeEnergy;
    }

    public function getLevelEnergy()
    {
        return $this->levelEnergy;
    }

}