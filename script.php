<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Résultats</title>
  <link rel="stylesheet" type="text/css" href="css/stylereponse.css">
</head>
<body>

</body>
</html>
<h1 class="title">Résultats</h1>
<div class="content">
  <div class="reponse">
    <?php
    $points = 0;
    if ($_GET["reponseUne"] == "rep11"){
      echo "Reponse 1 correct !";
      $points += 1;
    }
    else {
      echo "Reponse 1 fause ! Hershel était Vétérinarie";
    };
    ?>
  </div>

  <div class="reponse">
    <?php
    if ($_GET["q2"] == "rep21"){
      echo "Réponse 2 correct !";
      $points += 1;
    }else{
      echo "Réponse 2 fausse ! La saison 1 se déroule autour de atalanta !";
    };
    ?>
  </div>

  <div class="reponse">
    <?php
    if ($_GET["q3"] == "rep31"){
      echo "Réponse 3 correct !";
      $points += 1;
    } else{
      echo "Réponse 3 fausse ! Glenn était livreur de pizzas";
    };
    ?>
  </div>

  <div class="reponse">
    <?php
    if ($_GET["q4"] == "rep43"){
      echo "Réponse 4 correct !";
      $points += 1;
    }else{
      echo "Réponse 4 fausse ! Il faut transpercer le cerveau pour tuer un rodeur";
    };
    ?>
  </div>

  <div class="reponse">
    <?php
    if ($_GET["q5"] == "rep52"){
      echo "Réponse 5 correct !";
      $points += 1;
    }else{
      echo "Réponse 5 fausse ! L'arme de Daryl est une arbalète";
    };
    ?>
  </div>

  <div class="reponse">
    <?php
    if ($_GET["q6"] == "rep63"){
      echo "Réponse 6 correct !";
      $points += 2;
    }else{
      echo "Réponse 6 fausse ! Jimmy creuse des tombes car il a fait un rêve prémonitoire";
    };
    ?>
  </div>

  <div class="reponse">
    <?php
    if ($_GET["rep7"] == "2011"){
      echo "Réponse 7 correct !";
      $points += 3;
    }else{
      echo "Réponse 7 fausse ! La première saison est sorti en 2011";
    };
    ?>
  </div>

  <div class="reponse">
    <?php
    if ($_GET["q8"] == "rep82"){
      echo "Réponse 8 correct !";
      $points += 2;
    }else{
      echo "Réponse 8 fausse ! Andréa tue le rodeur dans le van avec un tournevis";
    };
    ?>
  </div>

  <div class="reponse">
    <?php
    if ($_GET["q9"] == "rep91"){
      echo "Réponse 9 correct !";
      $points += 1;
    }else{
      echo "Réponse 9 fausse ! C'est Hershell qui coupe la jmabe de rick ";
    };
    ?>
  </div>

  <div class="reponse">
    <?php
    if ($_GET["rep10"] == "5"){
      echo "Réponse 10 correct !";
      $points += 3 ;
    }else{
      echo "Réponse 10 fausse ! 5 prisonniers ont été retrouvés à la prison";
    };
    ?>
  </div>

  <div class="points">
    <?php
    if ($points < 5){
      echo "Tu es une belle grosse merde ! ";
    }else{
      if ($points > 12){
        echo "Féliciations !";
      }else{
        echo "Pas dégueu ! ";
      }
    };

    echo "Tu as obtenu : ".$points."/16";
    ?>
  </div>
</div>

<?php
