<?php
  class attack{
    private $name;
    private $damage;

    public function getName(){
      return $this->name;
    }

    public function setName($name){
      $this->name = $name;
      return $this;
    }
 
    public function getDamage(){
      return $this->damage;
    }

    public function setDamage($damage){
      $this->damage = $damage;
      return $this;
    }
  }
  