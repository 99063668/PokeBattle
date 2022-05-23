<?php
  //Alle gegevens van de gekozen pokemon in een class waar gebruik word gemaakt van de parent class
  namespace pokemon3{
    use Pokemon;
    use EnergyType;
    use Attack;
    use Weakness;
    use Resistance;

    class Gogoat extends pokemon{
      // Constructor
      public function __construct(){
        parent::__construct("GoGoat",  new EnergyType("Grass", ""), 60, [new Attack("Earthquake", 30), new Attack("Hyper Beam", 15)], new Weakness("Fire", 1.5), new Resistance("Water", 10));
      }
    }
  }
  