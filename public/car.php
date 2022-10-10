<?php

class Car 
{
    private int $nbrWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbrSeats;
    private string $typeEnergy;
    private int $levelEnergy;


    public function __construct(string $color, int $nbrSeats, string $typeEnergy)
    {
        $this->color = $color;
        $this->nbrSeats = $nbrSeats;
        $this->typeEnergy = $typeEnergy;
    }

    public function start()
    {

    }

    public function forward(): string
    {
        $this->currentSpeed = 30;
        return "On avance";
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

    public function getNbWheels()
    {
        return $this->nbrWheels;
    }

    // Speed Attributes
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

    // Color Attributes
    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    // Seats Attributes
    public function getNbSeats()
    {
        return $this->nbrSeats;
    }

    // Energy attributes
    public function getTypeEnergy()
    {
        return $this->typeEnergy;
    }

    public function getLevelEnergy()
    {
        return $this->levelEnergy;
    }

}
