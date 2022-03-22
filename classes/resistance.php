<?php
  class resistance{
    private $energyType;
    private $value;

    public function getEnergyType(){
      return $this->energyType;
    }

    public function setEnergyType($energyType){
      $this->energyType = $energyType;
      return $this;
    }

    public function getValue(){
      return $this->value;
    }

    public function setValue($value){
      $this->value = $value;
      return $this;
    }
  }
  