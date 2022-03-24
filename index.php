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
      <img class="avatar" src="images/pikachu.jpg" alt="pikachu">

      <h4 style="padding-left: 5px; margin-bottom: 0px;"><?php echo $Pikachu->getAttackNameIndex(0);?>&emsp;<?php echo $Pikachu->getAttackDamage(0)?></h4>
      <h2 style="color: black; margin-top: 0px;">__________________________</h2>
      <h4 style="padding-left: 5px;  margin-bottom: 0px;""><?php echo $Pikachu->getAttackNameIndex(1);?>&emsp;<?php echo $Pikachu->getAttackDamage(1)?></h4>
     
      <h2 style="color: black; margin-top: 0px;">__________________________</h2>
      <p style="padding-left: 5px;  margin-bottom: 0px; display:inline;"><b>Weakness</b></p>
      <p style="padding-left: 5px;  margin-bottom: 0px; display:inline;"><b>Resistance</b></p>
      <p style="left: 20px; bottom:15px; position:relative;"><img src="https://heatherketten.files.wordpress.com/2018/03/nrg_fire.png" width="20" height="20"></p>
      <p style="left: 100px; bottom:55px; position:relative;"><img src="https://pm1.narvii.com/6117/18c7dbd126871ac216ce1b045f5c25857bdac298_00.jpg" width="20" height="20"></p>
    </div>

    <div class="pokemonContainer2">
      <h3 style="text-align: center;"><?php echo $Charmeleon->getName();?></h3>
      <img class="avatar" src="images/charmeleon.jpg" alt="charmeleon">

      <h4 style="padding-left: 5px;  margin-bottom: 0px;""><?php echo $Charmeleon->getAttackNameIndex(0);?>&emsp;<?php echo $Charmeleon->getAttackDamage(0)?></h4>
      <h2 style="color: black; margin-top: 0px;">__________________________</h2>
      <h4 style="padding-left: 5px;  margin-bottom: 0px;""><?php echo $Charmeleon->getAttackNameIndex(1);?>&emsp;<?php echo $Charmeleon->getAttackDamage(1)?></h4>

      <h2 style="color: black; margin-top: 0px;">__________________________</h2>
      <p style="padding-left: 5px;  margin-bottom: 0px; display:inline;"><b>Weakness</b></p>
      <p style="padding-left: 5px;  margin-bottom: 0px; display:inline;"><b>Resistance</b></p>
      <p style="left: 20px; bottom:15px; position:relative;"><img src="https://heatherketten.files.wordpress.com/2018/03/nrg_water.png" width="20" height="20"></p>
      <p style="left: 100px; bottom:58px; position:relative;"><img src="https://heatherketten.files.wordpress.com/2018/03/nrg_electric.png" width="25" height="25"></p>
    </div>

    <div class="stats">
      <h3 style="text-align: center;">Battle information</h3>
      <h4>Full health:</h4>
      <p style="display: inline;"><b>Pikachu:</b> <?php echo $Pikachu->getHealth();?></p>
      <p style="display: inline;"><b>Charmeleon:</b> <?php echo $Charmeleon->getHealth();?></p>

      <br>
      <br>

      <h4>Attacks: </b></h4>
      <ul>
        <li><?php echo $Pikachu->getName();?> attacks <?php echo $Charmeleon->getName();?> with <?php echo $Pikachu->attackDamage($Charmeleon, 0);?></li>
        <li><?php echo $Charmeleon->getName();?> attacks <?php echo $Pikachu->getName();?> with <?php echo $Charmeleon->attackDamage($Pikachu, 1);?></li>
      </ul>
      
      <br>

      <h4>Health after fight:</h4>
      <p style="display: inline;"><b>Pikachu:</b> <?php echo $Pikachu->getHealth();?></p>
      <p style="display: inline;"><b>Charmeleon:</b> <?php echo $Charmeleon->getHealth();?></p>

      <br>
      <br>

      <p><b>Alive pokemons:</b> <?php echo $Pikachu->getPopulation();?></p>
    </div>
  </body>
</html>
