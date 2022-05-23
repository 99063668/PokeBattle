<?php
  //Alle gegevens van de gekozen pokemon in een class waar gebruik word gemaakt van de parent class
  namespace pokemon1{
    use Pokemon;
    use EnergyType;
    use Attack;
    use Weakness;
    use Resistance;

    class Pikachu extends pokemon{
      // Constructor
      public function __construct(){
        parent::__construct("Pikachu",  new EnergyType("Lightning", ""), 60, [new Attack("Electric Ring", 50), new Attack("Pika Punch", 20)], new Weakness("Fire", 1.5), new Resistance("Fighting", 20));
      }
    }
  }

  //Alle gegevens van de gekozen pokemon in een class waar gebruik word gemaakt van de parent class
  namespace evolvedPokemon1{
    use Pokemon;
    use EnergyType;
    use Attack;
    use Weakness;
    use Resistance;

    class Pikachu extends pokemon{
      // Constructor
      public function __construct(){
        parent::__construct("Raichu",  new EnergyType("Lightning", ""), 80, [new Attack("Electric Ring", 50), new Attack("Pika Punch", 35)], new Weakness("Fire", 2), new Resistance("Fighting", 25));
      }
    }
  }
