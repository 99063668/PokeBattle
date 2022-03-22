<?php
  class weakness{
    private $energyType;
    private $multiplier;

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
  