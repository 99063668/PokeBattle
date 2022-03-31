<?php
  namespace pokemon1{
    use pokemon;

    class pikachu extends pokemon{
      // Constructor
      public function __construct(){
        parent::__construct("Pikachu",  new \energyType("Lightning", ""), 60, [new \attack("Electric Ring", 50), new \attack("Pika Punch", 20)], new \weakness("Fire", 1.5), new \resistance("Fighting", 20));
        // self::addPokemonArray($this);
      }
    }
  }

  namespace pokemon2{
    use pokemon;

    class charmeleon extends pokemon{
      // Constructor
      public function __construct(){
        parent::__construct("charmeleon",  new \energyType("Lightning", ""), 80, [new \attack("flare", 55), new \attack("fire", 25)], new \weakness("Fire", 1), new \resistance("Fighting", 35));
        // self::addPokemonArray($this);
      }
    }
  }

  namespace pokemon3{
    use pokemon;

    class gogoat extends pokemon{
      // Constructor
      public function __construct(){
        parent::__construct("gogoat",  new \energyType("Lightning", ""), 60, [new \attack("geit", 50), new \attack("gwitje", 20)], new \weakness("Fire", 1.5), new \resistance("Fighting", 20));
        // self::addPokemonArray($this);
      }
    }
  }

  namespace pokemon4{
    use pokemon;

    class blastoise extends pokemon{
      // Constructor
      public function __construct(){
        parent::__construct("blastoise",  new \energyType("Lightning", ""), 80, [new \attack("water", 55), new \attack("blastoise", 25)], new \weakness("Fire", 1), new \resistance("Fighting", 35));
        // self::addPokemonArray($this);
      }
    }
  }
