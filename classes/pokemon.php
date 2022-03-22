<?php
  class pokemon{
    private $name;
    private $energyType;
    private $hitpoints;
    private $health;
    private $attacks;
    private $weakness;
    private $resistance;

    public function __construct(String $name, $energyType, $hitpoints, $attacks, $weakness, $resistance) {
      $this->name = $name;
      $this->energyType = $energyType;
      $this->hitpoints = $hitpoints;
      $this->health = $hitpoints;
      $this->attacks = $attacks;
      $this->weakness = $weakness;
      $this->resistance = $resistance;
    }

    public function getResistance(){
      return $this->resistance;
    }
    
    public function setResistance($resistance){
      $this->resistance = $resistance;
      return $this;
    }

    public function getWeakness(){
      return $this->weakness;
    }

    public function setWeakness($weakness){
      $this->weakness = $weakness;
      return $this;
    }

    public function getAttacks(){
      return $this->attacks;
    }
  
    public function setAttacks($attacks){
      $this->attacks = $attacks;
      return $this;
    }
    
    public function getHealth(){
      return $this->health;
    }

    public function setHealth($health){
      $this->health = $health;
      return $this;
    }

    public function getHitpoints(){
      return $this->hitpoints;
    }

    public function setHitpoints($hitpoints){
      $this->hitpoints = $hitpoints;
      return $this;
    }

    public function getEnergyType(){
      return $this->energyType;
    }

    public function setEnergyType($energyType){
      $this->energyType = $energyType;
      return $this;
    }

    public function getName(){
      return $this->name;
    }

    public function setName($name){
      $this->name = $name;
      return $this;
    }
  }

  $Pikachu = new pokemon("Pikachu", "Lightning", "60", "Electric Ring", "Pika Punch", "Fire", "Fighting");
  $Charmeleon = new pokemon("Charmeleon", "Fire", "60", "Head Butt", "Flare", "Water", "Lightning");

  echo $Pikachu->getName();
  echo "<br>";
  echo $Pikachu->getEnergyType();
  echo "<br>";
  echo $Pikachu->getHitpoints();
  echo "<br>";
  echo $Pikachu->getHealth();
  echo "<br>";
  echo $Pikachu->getAttacks();
  echo "<br>";
  echo $Pikachu->getWeakness();
  echo "<br>";
  echo $Pikachu->getResistance();

  // echo "<br>";
  // echo "<br>";

  // echo $Charmeleon->getName();
  // echo "<br>";
  // echo $Charmeleon->getEnergyType();
  // echo "<br>";
  // echo $Charmeleon->getHitpoints();
  // echo "<br>";
  // echo $Charmeleon->getHealth();
  // echo "<br>";
  // echo $Charmeleon->getAttacks();
  // echo "<br>";
  // echo $Charmeleon->getWeakness();
  // echo "<br>";
  // echo $Charmeleon->getResistance();
  