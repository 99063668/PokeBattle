<?php 
//Alle gegevens van de gekozen pokemon in een class waar gebruik word gemaakt van de parent class
namespace pokemon4{
    use Pokemon;
    use EnergyType;
    use Attack;
    use Weakness;
    use Resistance;

    class Blastoise extends pokemon{
      // Constructor
      public function __construct(){
        parent::__construct("Blastoise",  new EnergyType("Water", ""), 60, [new Attack("Water Gun", 50), new Attack("Blizzard", 25)], new Weakness("Grass", 1), new Resistance("Steel", 20));
      }
    }
  }
