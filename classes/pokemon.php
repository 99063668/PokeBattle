<?php
  class pokemon{
    private $name;
    private $energyType;
    private $hitpoints;
    private $health;
    private $attack;
    private $weakness;
    private $resistance;

    private static $pokemons = [];

    // Constructor
    public function __construct(String $name, $energyType, $hitpoints, $attack, $weakness, $resistance){
      $this->name = $name;
      $this->energyType = $energyType;
      $this->hitpoints = $hitpoints;
      $this->health = $hitpoints;
      $this->attack = $attack;
      $this->weakness = $weakness;
      $this->resistance = $resistance;
      self::addPokemonArray($this);
    }

    // Methods
    public function attackDamage($enemy, $index){
      if ($enemy->getWeakness()->getEnergyType() ==  $this->getEnergyType()->getType()){
        $damage = $this->getAttack()[$index]->getDamage() * $enemy->getWeakness()->getMultiplier();
      } else if ($enemy->getResistance()->getEnergyType() == $this->getEnergyType()->getType()){
        $damage = $this->getAttack()[$index]->getDamage() - $enemy->getResistance()->getValue();
      }else{
        $damage = $this->getAttack()[$index]->getDamage();
      }
      $enemy->changeHealth($damage);
      //array("name"=> $this->getAttackNameIndex($index), "damage"=>$damage, "health"=> $enemy->changeHealth($damage));
      return $this->getAttackNameIndex($index);
    }

    public function changeHealth($damage){
      if($this->getHealth() - $damage > 0){
        $this->setHealth($this->getHealth() - $damage);
      }else{
        $this->setHealth(0);
      }
    }

    public static function getPopulation(){
      $count = 0;
      foreach(self::$pokemons as $pokemon){
        if($pokemon->getHealth() > 0){
          $count++;
        }
      }
      return $count;
    } 

    // Getters & Setters
    public function addPokemonArray($pokemon) {
      array_push($this::$pokemons, $pokemon);
    }

    public function getAttackNameIndex($index){
      return $this->attack[$index]->getName();
    }

    public function getAttackDamage($index){
      return $this->attack[$index]->getDamage();
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
