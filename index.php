<?php
// Autoloader
  spl_autoload_register(function ($class){
    if(strpos($class,"pokemon") !== false && strpos($class,"\\") !== false){
      $class = substr($class, (strpos($class,"\\") + 1));
      include 'classes/' . $class . '.php';
    }else{
      include 'classes/' . $class . '.php';
    }
  });

  // Get pokemon data
  $Pikachu = new pokemon1\pikachu();
  $Charmeleon = new pokemon2\charmeleon();
  $Gogoat = new pokemon3\gogoat();
  $Blastoise = new pokemon4\blastoise();

  // Choose attack
  if(isset($_POST['pikachuAttack']) && isset($_POST['charmeleonAttack'])){
    if($_POST['pikachuAttack'] !== "null" && $_POST['pikachuAttack'] !== null){
     $pokemon->attackDamage($pokemon2, $_POST['pikachuAttack']);
    }else{
      $_POST['pikachuAttack'] = null;
    }
    if($_POST['charmeleonAttack'] !== "null" && $_POST['charmeleonAttack'] !== null){
      $pokemon2->attackDamage($pokemon, $_POST['charmeleonAttack']);
    }else{
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
    <!--Choose pokemon-->
    <div class="selector">
      <form method="POST" action="" id="chooseForm" style="margin-right: 15px; margin-left: 10px;">
        <h2>Pokemon 1:</h2>
        <select name="choosePokemon1" onchange="document.getElementById('chooseForm').submit();">
          <option <?php if(!isset($_POST['choosePokemon1']) || $_POST['choosePokemon1'] === "null"){ echo 'selected="selected"';}?> value="null" hidden><--Choose pokemon--></option>  
          <option <?php if(isset($_POST['choosePokemon1']) && $_POST['choosePokemon1'] === '0'){ echo 'selected="selected"';}?> value="0">Pikachu</option>
          <option <?php if(isset($_POST['choosePokemon1']) && $_POST['choosePokemon1'] == 1){ echo 'selected="selected"';}?> value="1">Gogoat</option>
        </select>
        <h2>Pokemon 2:</h2>
        <select name="choosePokemon2" onchange="document.getElementById('chooseForm').submit();">
          <option <?php if(!isset($_POST['choosePokemon2']) || $_POST['choosePokemon2'] === "null"){ echo 'selected="selected"';}?> value="null" hidden><--Choose pokemon--></option>  
          <option <?php if(isset($_POST['choosePokemon2']) && $_POST['choosePokemon2'] === '0'){ echo 'selected="selected"';}?> value="0">Blastoise</option>
          <option <?php if(isset($_POST['choosePokemon2']) && $_POST['choosePokemon2'] == 1){ echo 'selected="selected"';}?> value="1">Charmeleon</option>
        </select>
      </form>
    </div>

    
    <?php if ($_POST['choosePokemon1'] !== "null" && $_POST['choosePokemon1'] !== null && $_POST['choosePokemon1'] == '0') { ?>
      <!--Card pikachu-->
      <div class="pokemonContainers pokemonContainer1">
        <p style="position: absolute;"><img src="https://heatherketten.files.wordpress.com/2018/03/nrg_electric.png" width="25" height="25"></p>
        <h3 style="text-align: center;"><?php echo $Pikachu->getName();?>&emsp;<?php echo $Pikachu->getHitpoints();?></h3>
        <img class="avatar" src="images/pikachu.jpg" alt="pikachu">

        <h4 style="padding-left: 5px;  margin-bottom: 0px;""><?php echo $Pikachu->getAttackNameIndex(1);?>&emsp;<?php echo $Pikachu->getAttackDamage(1)?></h4>
        <h2 style="color: black; margin-top: 0px;">__________________________</h2>
        <h4 style="padding-left: 5px; margin-bottom: 0px;"><?php echo $Pikachu->getAttackNameIndex(0);?>&emsp;<?php echo $Pikachu->getAttackDamage(0)?></h4>
      
        <h2 style="color: black; margin-top: 0px;">__________________________</h2>
        <p class="iconInfo" style="display:inline;"><b>Weakness</b></p>
        <p class="iconInfo" style="display:inline;"><b>Resistance</b></p>
        <p style="left: 20px; bottom:15px; position:relative;"><img src="https://heatherketten.files.wordpress.com/2018/03/nrg_fire.png" width="20" height="20"></p>
        <p style="left: 100px; bottom:50px; position:relative;"><img src="https://pm1.narvii.com/6117/18c7dbd126871ac216ce1b045f5c25857bdac298_00.jpg" width="20" height="20"></p>
      </div>
    <?php } ?>

    <?php if ($_POST['choosePokemon1'] !== "null" && $_POST['choosePokemon1'] !== null && $_POST['choosePokemon1'] == '1') { ?>
      <!--Card gogoat-->
      <div class="pokemonContainers pokemonContainer3">
        <p style="position: absolute;"><img src="https://styles.redditmedia.com/t5_35vc0/styles/postUpvoteIconActive_vs5265rzh3t01.png" width="25" height="25"></p>
        <h3 style="text-align: center;"><?php echo $Gogoat->getName();?>&emsp;<?php echo $Gogoat->getHitpoints();?></h3>
        <img class="avatar" src="images/gogoat.png" alt="Gogoat">

        <h4 style="padding-left: 5px; margin-bottom: 0px;"><?php echo $Gogoat->getAttackNameIndex(0);?>&emsp;<?php echo $Gogoat->getAttackDamage(0)?></h4>
        <h2 style="color: black; margin-top: 0px;">__________________________</h2>
        <h4 style="padding-left: 5px; margin-bottom: 0px;"><?php echo $Gogoat->getAttackNameIndex(1);?>&emsp;<?php echo $Gogoat->getAttackDamage(1)?></h4>

        <h2 style="color: black; margin-top: 0px;">__________________________</h2>
        <p class="iconInfo" style="display:inline;"><b>Weakness</b></p>
        <p class="iconInfo" style="display:inline;"><b>Resistance</b></p>
        <p style="left: 20px; bottom:15px; position:relative;"><img src="https://heatherketten.files.wordpress.com/2018/03/nrg_fire.png" width="20" height="20"></p>
        <p style="left: 100px; bottom:50px; position:relative;"><img src="https://heatherketten.files.wordpress.com/2018/03/nrg_water.png" width="20" height="20"></p>
      </div>
    <?php } ?>

    <?php if ($_POST['choosePokemon2'] !== "null" && $_POST['choosePokemon2'] !== null && $_POST['choosePokemon2'] == '0') { ?>
      <!--Card blastoise-->
      <div class="pokemonContainers pokemonContainer4">
        <p style="position: absolute;"><img src="https://heatherketten.files.wordpress.com/2018/03/nrg_water.png" width="25" height="25"></p>
        <h3 style="text-align: center;"><?php echo $Blastoise->getName();?>&emsp;<?php echo $Blastoise->getHitpoints();?></h3>
        <img class="avatar" src="images/blastoise.jpg" alt="Blastoise">

        <h4 style="padding-left: 5px; margin-bottom: 0px;"><?php echo $Blastoise->getAttackNameIndex(0);?>&emsp;<?php echo $Blastoise->getAttackDamage(0)?></h4>
        <h2 style="color: black; margin-top: 0px;">__________________________</h2>
        <h4 style="padding-left: 5px; margin-bottom: 0px;"><?php echo $Blastoise->getAttackNameIndex(1);?>&emsp;<?php echo $Blastoise->getAttackDamage(1)?></h4>

        <h2 style="color: black; margin-top: 0px;">__________________________</h2>
        <p class="iconInfo" style="display:inline;"><b>Weakness</b></p>
        <p class="iconInfo" style="display:inline;"><b>Resistance</b></p>
        <p style="left: 20px; bottom:15px; position:relative;"><img src="https://styles.redditmedia.com/t5_35vc0/styles/postUpvoteIconActive_vs5265rzh3t01.png" width="20" height="20"></p>
        <p style="left: 100px; bottom:50px; position:relative;"><img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/aba1a756-d955-43f6-a2e9-5b7d60406854/d50w3tj-08f8872a-82e0-4261-b39f-6d66030b354f.png/v1/fill/w_720,h_720,strp/metal_energy_by_humac1_d50w3tj-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NzIwIiwicGF0aCI6IlwvZlwvYWJhMWE3NTYtZDk1NS00M2Y2LWEyZTktNWI3ZDYwNDA2ODU0XC9kNTB3M3RqLTA4Zjg4NzJhLTgyZTAtNDI2MS1iMzlmLTZkNjYwMzBiMzU0Zi5wbmciLCJ3aWR0aCI6Ijw9NzIwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.Dpncm4PEyyma0CBCZcpVZ0Lm0YeMMKHnrxCu5RK9Nh0" width="20" height="20"></p>
      </div>
    <?php } ?>

     <?php if ($_POST['choosePokemon2'] !== "null" && $_POST['choosePokemon2'] !== null && $_POST['choosePokemon2'] == '1') { ?>
      <!--Card charmeleon-->
      <div class="pokemonContainers pokemonContainer2">
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
    <?php } ?>

    <!--Card info-->
    <div class="statsContainer">
      <h3 style="text-align: center;">Battle information</h3>
      <img style="display:block;" class="avatar" src="images/battle.png" alt="battle">
      
      <h4 style="padding-left: 5px;">Attacks:</h4>
      <form method="POST" action="" id="attackForm">
        <ul style="margin: 0px;">
          <li><?php if($_POST['choosePokemon1'] == '0'){echo $Pikachu->getName();}elseif($_POST['choosePokemon1'] == '1'){echo $Gogoat->getName();}?> attacks <?php if( $_POST['choosePokemon2'] == '0'){echo $Blastoise->getName();}elseif( $_POST['choosePokemon2'] == '1'){echo $Charmeleon->getName();}?> with 
            <select name="pikachuAttack" onchange="document.getElementById('attackForm').submit();">
              <?php if($_POST['choosePokemon1'] == '0'){$pokemon = $Pikachu?>
                <option <?php if(!isset($_POST['pikachuAttack']) || $_POST['pikachuAttack'] == null){ echo 'selected="selected"';}?> value="null" hidden><--Choose attack--></option>  
                <?php for ($i=0; $i < count($pokemon->getAttack()); $i++){ ?>
                  <option <?php if(isset($_POST['pikachuAttack']) && $_POST['pikachuAttack'] == $i){ echo 'selected="selected"';}?> value=<?=$i?>><?=$pokemon->getAttackNameIndex($i);?></option>
                <?php } ?>

              <?php }else{$pokemon = $Gogoat?>
                <option <?php if(!isset($_POST['pikachuAttack']) || $_POST['pikachuAttack'] == null){ echo 'selected="selected"';}?> value="null" hidden><--Choose attack--></option>  
                <?php for ($i=0; $i < count($pokemon->getAttack()); $i++){ ?>
                  <option <?php if(isset($_POST['pikachuAttack']) && $_POST['pikachuAttack'] == $i){ echo 'selected="selected"';}?> value=<?=$i?>><?=$pokemon->getAttackNameIndex($i);?></option>
                <?php } ?>
              <?php } ?>


            </select>
          </li>
          <li><?php if($_POST['choosePokemon2'] == '0'){echo $Blastoise->getName();}elseif( $_POST['choosePokemon2'] == '1'){echo $Charmeleon->getName();}?> attacks <?php  if($_POST['choosePokemon1'] == '0'){echo $Pikachu->getName();}elseif($_POST['choosePokemon1'] == '1'){echo $Gogoat->getName();}?> with 
            <select name="charmeleonAttack" onchange="document.getElementById('attackForm').submit();">
            <?php if($_POST['choosePokemon2'] == '0'){$pokemon2 = $Blastoise?>
              <option <?php if(!isset($_POST['charmeleonAttack']) || $_POST['charmeleonAttack'] == null){ echo 'selected="selected"';}?> value="null" hidden><--Choose attack--></option>  
              <?php for ($i=0; $i < count($pokemon2->getAttack()); $i++) { ?>
                <option <?php if(isset($_POST['charmeleonAttack']) && $_POST['charmeleonAttack'] == $i){ echo 'selected="selected"';}?> value=<?=$i?>><?=$pokemon2->getAttackNameIndex($i);?></option>
              <?php } ?>

              <?php }else{$pokemon2 = $Charmeleon?>
                <option <?php if(!isset($_POST['charmeleonAttack']) || $_POST['charmeleonAttack'] == null){ echo 'selected="selected"';}?> value="null" hidden><--Choose attack--></option>  
                <?php for ($i=0; $i < count($pokemon2->getAttack()); $i++){ ?>
                  <option <?php if(isset($_POST['charmeleonAttack']) && $_POST['charmeleonAttack'] == $i){ echo 'selected="selected"';}?> value=<?=$i?>><?=$pokemon2->getAttackNameIndex($i);?></option>
                <?php } ?>
              <?php } ?>
            </select>
          </li>
        </ul>
      </form>

      <h2 style="color: black; margin-top: 0px;">__________________________</h2>
      <h4 style="padding-left: 5px; margin: 0px;">Health after fight:</h4>
      <?php if($_POST['choosePokemon1'] == '0'){?>
        <p class="health" style="padding-left: 5px; margin-bottom: 0px; display:inline;"><b>Pikachu:</b> 
      <?php echo $Pikachu->getHealth();?>
      <?php }elseif( $_POST['choosePokemon1'] == '1'){?>
      <p class="health" style="padding-left: 5px; margin-bottom: 0px; display:inline;"><b>Gogoat:</b></p>
      <?php echo $Gogoat->getHealth();}?>

      <br>

      <?php if($_POST['choosePokemon2'] == '0'){?>
        <p class="health" style="padding-left: 5px; margin-bottom: 0px; display:inline;"><b>Blastoise:</b> 
      <?php echo $Blastoise->getHealth();?>
      <?php }elseif( $_POST['choosePokemon2'] == '1'){?>
      <p class="health" style="padding-left: 5px; margin-bottom: 0px; display:inline;"><b>Charmeleon:</b></p>
      <?php echo $Charmeleon->getHealth();}?>

      <h2 style="color: black; margin-top: 0px;">__________________________</h2>
      <p style="padding-left: 5px; margin: 0px;"><b>Pokemons alive after fight:</b> <?php echo $Pikachu->getPopulation();?></p>
    </div>
  </body>
</html>
