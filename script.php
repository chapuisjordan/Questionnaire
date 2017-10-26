<?php

  $points = 0;

  if ($_GET["reponseUne"] == "rep11"){
    echo "Reponse 1 correct !";
    $points += 1;
  }
  else {
    echo "Reponse 1 fause !";
  };

  if ($_GET["q2"] == "rep21"){
    echo "Réponse 2 correct !";
    $points += 1;
  }else{
    echo "Réponse 2 fausse !";
  };

  if ($_GET["q3"] == "rep31"){
    echo "Réponse 3 correct !";
    $points += 1;
  } else{
    echo "Réponse 3 fausse !";
  };

  if ($_GET["q4"] == "rep43"){
    echo "Réponse 4 correct !";
    $points += 1;
  }else{
    echo "Réponse 4 fausse !";
  };

  if ($_GET["q5"] == "rep52"){
    echo "Réponse 5 correct !";
    $points += 1;
  }else{
    echo "Réponse 5 fausse !";
  };

  if ($_GET["q6"] == "rep63"){
    echo "Réponse 6 correct !";
    $points += 2;
  }else{
    echo "Réponse 6 fausse !";
  };

  if ($_GET["rep7"] == "2011"){
    echo "Réponse 7 correct !";
    $points += 3;
  }else{
    echo "Réponse 7 fausse !";
  };

  if ($_GET["q8"] == "rep82"){
    echo "Réponse 8 correct !";
    $points += 2;
  }else{
    echo "Réponse 8 fausse !";
  };

  if ($_GET["q9"] == "rep91"){
    echo "Réponse 9 correct !";
    $points += 1;
  }else{
    echo "Réponse 9 fausse !";
  };

  if ($_GET["rep10"] === "5" || "cinq"){
    echo "Réponse 10 correct !";
    $points += 3 ;
  }else{
    echo "Réponse 10 fausse !";
  };

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
