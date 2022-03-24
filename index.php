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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
  <body>
    <p>Health <?php echo $Pikachu->getName();?>: <?php echo $Pikachu->getHealth();?></p>
    <p>Health <?php echo $Charmeleon->getName();?>: <?php echo $Charmeleon->getHealth();?></p>

    <p><?php echo $Pikachu->getName();?> valt <?php echo $Charmeleon->getName();?> aan met een <?php echo $Pikachu->attackDamage($Charmeleon, 0);?> attack</p>
    <p>Health <?php echo $Charmeleon->getName();?>: <?php echo $Charmeleon->getHealth();?></p>
    
    <p><?php echo $Charmeleon->getName();?> valt <?php echo $Pikachu->getName();?> aan met een <?php echo $Charmeleon->attackDamage($Pikachu, 1);?> attack</p>
    <p>Health <?php echo $Pikachu->getName();?>: <?php echo $Pikachu->getHealth();?></p>

    <p>Aantal levende pokemons: <?php echo $Pikachu->getPopulation();?></p>
  </body>
</html>
