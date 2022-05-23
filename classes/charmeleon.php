<?php
  //Alle gegevens van de gekozen pokemon in een class waar gebruik word gemaakt van de parent class
  namespace pokemon2{
    use Pokemon;
    use EnergyType;
    use Attack;
    use Weakness;
    use Resistance;

    class Charmeleon extends pokemon{
      // Constructor
      public function __construct(){
        parent::__construct("Charmeleon",  new EnergyType("Fire", ""), 60, [new Attack("Head Butt", 45), new Attack("Flare", 15)], new Weakness("Water", 1), new Resistance("Lightning", 15));
      }
    }
  }