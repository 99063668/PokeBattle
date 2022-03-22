<?php
  class resistance{
    private $energyType;
    private $value;

    public function __construct(String $energyType, $value) {
      $this->energyType = $energyType;
      $this->value = $value;
    }

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
  