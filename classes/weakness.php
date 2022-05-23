<?php
  //class voor de weakness van de pokemon met hierbij de nodige variabelen
  class Weakness{
    private $energyType;
    private $multiplier;

    public function __construct(String $energyType, $multiplier){
      $this->energyType = $energyType;
      $this->multiplier = $multiplier;
    }

    public function getEnergyType(){
      return $this->energyType;
    }

    public function setEnergyType($energyType){
      $this->energyType = $energyType;
      return $this;
    }

    public function getMultiplier(){
      return $this->multiplier;
    }

    public function setMultiplier($multiplier){
      $this->multiplier = $multiplier;
      return $this;
    }
  }
