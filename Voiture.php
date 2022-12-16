<?php

class Voiture
{
    private $marque ='';
    private $passagers = 0;
    private $vitesse = 0;

    /**
     * Get the value of marque
     */ 
    public function getMarque(): string
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @return  self
     */ 
    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get the value of passagers
     */ 
    public function getPassagers(): int
    {
        return $this->passagers;
    }

    /**
     * Set the value of passagers
     *
     * @return  self
     */ 
    public function setPassagers(int $passagers): self
    {
        if ($passagers >= 0) {
        $this->passagers = $passagers;
        }
        return $this;
    }


    /**
     * Get the value of vitesse
     */ 
    public function getVitesse(): float 
    {
        return $this->vitesse;
    }

    /**
     * Set the value of vitesse
     *
     * @return  self
     */ 
    public function setVitesse(float $vitesse): self
    {
        if ($vitesse <= 130) {
        $this->vitesse = $vitesse;
        }
        return $this;
    }
}
