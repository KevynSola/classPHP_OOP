<?php

class Bicycle 
{
    private int $nbrWheels;
    private int $currentSpeed;
    private string $color;


    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function start()
    {

    }

    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0){
            $this->currentSpeed--;
            $sentence .= "Brake ! ";
        }
        $sentence .= "I'm stopped !";
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

}
