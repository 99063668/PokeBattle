<?php
  class pokemon{
    private $name;
    private $energyType;
    private $hitpoints;
    private $health;
    private $attack;
    private $weakness;
    private $resistance;

    public function __construct(String $name, $energyType, $hitpoints, $attack, $weakness, $resistance) {
      $this->name = $name;
      $this->energyType = $energyType;
      $this->hitpoints = $hitpoints;
      $this->health = $hitpoints;
      $this->attack = $attack;
      $this->weakness = $weakness;
      $this->resistance = $resistance;
    }

    //Methods
    public function attackDamage(){
      // de schade van een Attack wordt vermenigvuldigd met de multiplier van de Weakness 
      // indien de EnergyType van de Weakness gelijk is aan de EnergyType van de aanvallende Pokemon

      // de schade van een Attack wordt verminderd met de waarde van de Resistance 
      // indien de EnergyType van de Resistance gelijk is aan de EnergyType van de aanvallende Pokemon
    }

    public function getPopulation(){
      // Elke constructie van een nieuw Pokemon object verhoogt het aantal levende pokemons

      // Elke keer dat de health van een Pokemon object onder nul komt 
      // dan sterft de Pokemon en verlaagt dat het aantal levende pokemons

      // Gebruik static voor class methods en properties die object-onafhankelijk zijn.
    } 

    //Getters & Setters
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

    public function getAttack(){
      return $this->attack;
    }
  
    public function setAttack($attack){
      $this->attack = $attack;
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
  
  $Pikachu = new pokemon("Pikachu", new energyType("Lightning", ""), 60, [new attack("Electric Ring", 50), new attack("Pika Punch", 20)], new weakness("Fire", 1.5), new resistance("Fighting", 20));
  $Charmeleon = new pokemon("Charmeleon", new energyType("Fire", ""), 60, [new attack("Head Butt", 10), new attack("Flare", 30)], new weakness("Water", 2), new resistance("Lightning", 10));
