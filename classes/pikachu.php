<?php
  namespace level1{
    use pokemon;

    class pikachu extends pokemon{
      // Constructor
      public function __construct(){
        parent::__construct("Pikachu",  new \energyType("Lightning", ""), 60, [new \attack("Electric Ring", 50), new \attack("Pika Punch", 20)], new \weakness("Fire", 1.5), new \resistance("Fighting", 20));
        // self::addPokemonArray($this);
      }
    }
  }

  namespace level2{
    use pokemon;

    class pikachu extends pokemon{
      // Constructor
      public function __construct(){
        parent::__construct("Pikachu",  new \energyType("Lightning", ""), 80, [new \attack("Electric Ring", 55), new \attack("Pika Punch", 25)], new \weakness("Fire", 1), new \resistance("Fighting", 35));
        // self::addPokemonArray($this);
      }
    }
  }
