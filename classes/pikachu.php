<?php
  namespace pokemon1{
    use pokemon;

    class pikachu extends pokemon{
      // Constructor
      public function __construct(){
        parent::__construct("Pikachu",  new \energyType("Lightning", ""), 60, [new \attack("Electric Ring", 50), new \attack("Pika Punch", 20)], new \weakness("Fire", 1.5), new \resistance("Fighting", 20));
      }
    }
  }

  namespace evolvedPokemon1{
    use pokemon;

    class pikachu extends pokemon{
      // Constructor
      public function __construct(){
        parent::__construct("Raichu",  new \energyType("Lightning", ""), 80, [new \attack("Electric Ring", 50), new \attack("Pika Punch", 35)], new \weakness("Fire", 2), new \resistance("Fighting", 25));
      }
    }
  }

  namespace pokemon2{
    use pokemon;

    class charmeleon extends pokemon{
      // Constructor
      public function __construct(){
        parent::__construct("Charmeleon",  new \energyType("Fire", ""), 60, [new \attack("Head Butt", 45), new \attack("Flare", 15)], new \weakness("Water", 1), new \resistance("Lightning", 15));
      }
    }
  }

  namespace pokemon3{
    use pokemon;

    class gogoat extends pokemon{
      // Constructor
      public function __construct(){
        parent::__construct("GoGoat",  new \energyType("Grass", ""), 60, [new \attack("Earthquake", 30), new \attack("Hyper Beam", 15)], new \weakness("Fire", 1.5), new \resistance("Water", 10));
      }
    }
  }

  namespace pokemon4{
    use pokemon;

    class blastoise extends pokemon{
      // Constructor
      public function __construct(){
        parent::__construct("Blastoise",  new \energyType("Water", ""), 60, [new \attack("Water Gun", 50), new \attack("Blizzard", 25)], new \weakness("Grass", 1), new \resistance("Steel", 20));
      }
    }
  }
