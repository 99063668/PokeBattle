<?php
  spl_autoload_register(function ($class){
    if(strpos($class,"level") !== false && strpos($class,"\\") !== false){
      $class = substr($class, (strpos($class,"\\") + 1));
      include 'classes/' . $class . '.php';
    }else{
      include 'classes/' . $class . '.php';
    }
  });

  $Pikachu = new level1\pikachu();
  $Charmeleon = new pokemon("Charmeleon", new energyType("Fire", ""), 60, [new attack("Head Butt", 10), new attack("Flare", 30)], new weakness("Water", 2), new resistance("Lightning", 10));

  if(isset($_POST['pikachuAttack']) && isset($_POST['charmeleonAttack'])){
    if($_POST['pikachuAttack'] !== "null" && $_POST['pikachuAttack'] !== null){
     $Pikachu->attackDamage($Charmeleon, $_POST['pikachuAttack']);
    } else{
      $_POST['pikachuAttack'] = null;
    }
    if($_POST['charmeleonAttack'] !== "null" && $_POST['charmeleonAttack'] !== null){
      $Charmeleon->attackDamage($Pikachu, $_POST['charmeleonAttack']);
    } else {
      $_POST['charmeleonAttack'] = null;
    }
  }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Index</title>
  <link rel="stylesheet" href="style.css">
</head>
  <body>
    <!--Card 1-->
    <div class="pokemonContainer1">
      <p style="position: absolute;"><img src="https://heatherketten.files.wordpress.com/2018/03/nrg_electric.png" width="25" height="25"></p>
      <h3 style="text-align: center;"><?php echo $Pikachu->getName();?>&emsp;<?php echo $Pikachu->getHitpoints();?></h3>
      <img class="avatar" src="images/pikachu.jpg" alt="pikachu">

      <h4 style="padding-left: 5px; margin-bottom: 0px;"><?php echo $Pikachu->getAttackNameIndex(0);?>&emsp;<?php echo $Pikachu->getAttackDamage(0)?></h4>
      <h2 style="color: black; margin-top: 0px;">__________________________</h2>
      <h4 style="padding-left: 5px;  margin-bottom: 0px;""><?php echo $Pikachu->getAttackNameIndex(1);?>&emsp;<?php echo $Pikachu->getAttackDamage(1)?></h4>
     
      <h2 style="color: black; margin-top: 0px;">__________________________</h2>
      <p class="iconInfo" style="display:inline;"><b>Weakness</b></p>
      <p class="iconInfo" style="display:inline;"><b>Resistance</b></p>
      <p style="left: 20px; bottom:15px; position:relative;"><img src="https://heatherketten.files.wordpress.com/2018/03/nrg_fire.png" width="20" height="20"></p>
      <p style="left: 100px; bottom:55px; position:relative;"><img src="https://pm1.narvii.com/6117/18c7dbd126871ac216ce1b045f5c25857bdac298_00.jpg" width="20" height="20"></p>
    </div>

    <!--Card 2-->
    <div class="pokemonContainer2">
      <p style="position: absolute;"><img src="https://heatherketten.files.wordpress.com/2018/03/nrg_fire.png" width="25" height="25"></p>
      <h3 style="text-align: center;"><?php echo $Charmeleon->getName();?>&emsp;<?php echo $Charmeleon->getHitpoints();?></h3>
      <img class="avatar" src="images/charmeleon.jpg" alt="charmeleon">

      <h4 style="padding-left: 5px; margin-bottom: 0px;"><?php echo $Charmeleon->getAttackNameIndex(0);?>&emsp;<?php echo $Charmeleon->getAttackDamage(0)?></h4>
      <h2 style="color: black; margin-top: 0px;">__________________________</h2>
      <h4 style="padding-left: 5px; margin-bottom: 0px;"><?php echo $Charmeleon->getAttackNameIndex(1);?>&emsp;<?php echo $Charmeleon->getAttackDamage(1)?></h4>

      <h2 style="color: black; margin-top: 0px;">__________________________</h2>
      <p class="iconInfo" style="display:inline;"><b>Weakness</b></p>
      <p class="iconInfo" style="display:inline;"><b>Resistance</b></p>
      <p style="left: 20px; bottom:15px; position:relative;"><img src="https://heatherketten.files.wordpress.com/2018/03/nrg_water.png" width="20" height="20"></p>
      <p style="left: 100px; bottom:58px; position:relative;"><img src="https://heatherketten.files.wordpress.com/2018/03/nrg_electric.png" width="25" height="25"></p>
    </div>

    <!--Card 3-->
    <div class="statsContainer">
      <h3 style="text-align: center;">Battle information</h3>
      <img style="display:block;" class="avatar" src="images/battle.png" alt="battle">
      
      <h4 style="padding-left: 5px;">Attacks:</h4>
      <form method="POST" action="" id="attackForm">
        <ul style="margin: 0px;">
          <li><?php echo $Pikachu->getName();?> attacks <?php echo $Charmeleon->getName();?> with 
            <select name="pikachuAttack" onchange="document.getElementById('attackForm').submit();">
              <option <?php if(!isset($_POST['pikachuAttack']) || $_POST['pikachuAttack'] == null){ echo 'selected="selected"'; } ?> value="null" hidden><--Choose attack--></option>  
              <option <?php if(isset($_POST['pikachuAttack']) && $_POST['pikachuAttack'] == 0){ echo 'selected="selected"'; } ?> value="0">Electric Ring</option>
              <option <?php if(isset($_POST['pikachuAttack']) && $_POST['pikachuAttack'] == 1){ echo 'selected="selected"'; } ?> value="1">Pika Punch</option>
            </select>
          </li>

          <li><?php echo $Charmeleon->getName();?> attacks <?php echo $Pikachu->getName();?> with 
            <select name="charmeleonAttack" onchange="document.getElementById('attackForm').submit();">
              <option <?php if(!isset($_POST['charmeleonAttack']) || $_POST['charmeleonAttack'] == null){ echo 'selected="selected"'; } ?> value="null" hidden><--Choose attack--></option>  
              <option <?php if(isset($_POST['charmeleonAttack']) && $_POST['charmeleonAttack'] == 0){ echo 'selected="selected"'; } ?> value="0">Head Butt</option>
              <option <?php if(isset($_POST['charmeleonAttack']) && $_POST['charmeleonAttack'] == 1){ echo 'selected="selected"'; } ?> value="1">Flare</option>
            </select>
          </li>
        </ul>
      </form>

      <h2 style="color: black; margin-top: 0px;">__________________________</h2>
      <h4 style="padding-left: 5px; margin: 0px;">Health after fight:</h4>
      <p class="health" style="padding-left: 5px; margin-bottom: 0px; display:inline;"><b>Pikachu:</b> <?php echo $Pikachu->getHealth();?></p>
      <p class="health" style="padding-left: 5px; margin-bottom: 0px; display:inline;"><b>Charmeleon:</b> <?php echo $Charmeleon->getHealth();?></p>

      <h2 style="color: black; margin-top: 0px;">__________________________</h2>
      <p style="padding-left: 5px; margin: 0px;"><b>Pokemons alive after fight:</b> <?php echo $Pikachu->getPopulation();?></p>
    </div>
  </body>
</html>
