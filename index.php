<?php
  spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
  });

  $Pikachu = new pokemon("Pikachu", new energyType("Lightning", ""), 60, [new attack("Electric Ring", 50), new attack("Pika Punch", 20)], new weakness("Fire", 1.5), new resistance("Fighting", 20));
  $Charmeleon = new pokemon("Charmeleon", new energyType("Fire", ""), 60, [new attack("Head Butt", 10), new attack("Flare", 30)], new weakness("Water", 2), new resistance("Lightning", 10));
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Index</title>
  <link rel="stylesheet" href="style.css">
</head>
  <body>
    <div class="pokemonContainer1">
      <h3 style="text-align: center;"><?php echo $Pikachu->getName();?></h3>
      <img src="images/pikachu.png" alt="pikachu">
      <h4>Full health: <?php echo $Pikachu->getHealth();?></h4>

      <h4>Attack: </b></h4>
      <p><?php echo $Pikachu->getName();?> attacks <?php echo $Charmeleon->getName();?> with <?php echo $Pikachu->attackDamage($Charmeleon, 0);?></p>
    </div>

    <div class="pokemonContainer2">
      <h3 style="text-align: center;"><?php echo $Charmeleon->getName();?></h3>
      <img src="images/charmeleon.png" alt="charmeleon">
      <h4>Full health: <?php echo $Charmeleon->getHealth();?></h4>

      <h4>Attack: </h4>
      <p><?php echo $Charmeleon->getName();?> attacks <?php echo $Pikachu->getName();?> with <?php echo $Charmeleon->attackDamage($Pikachu, 1);?></p>
    </div>

    <div class="pokemons">
      <h4>Alive pokemons: <?php echo $Pikachu->getPopulation();?></h4>
      <h4>Health after fight: </h4>
      <p><b>Pikachu: </b><?php echo $Pikachu->getHealth();?></p>
      <p><b>Charmeleon: </b><?php echo $Charmeleon->getHealth();?></p>
    </div>

  </body>
</html>
