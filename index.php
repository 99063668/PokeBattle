<?php
  require 'classes/attack.php';
  require 'classes/energyType.php';
  require 'classes/pokemon.php';
  require 'classes/resistance.php';
  require 'classes/weakness.php';

  // foreach(glob("classes/*.php") as $filename){
  //   var_dump($filename);
  //   include $filename;
  // }
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
    <p><?php echo $Pikachu->getName();?> valt <?php echo $Charmeleon->getName();?> aan met een <?php echo $Pikachu->getAttack(0);?> attack</p>
    <p><?php echo $Charmeleon->getName();?> valt <?php echo $Pikachu->getName();?> aan met een <?php echo $Charmeleon->getAttack(1);?> attack</p>
  </body>
</html>
