<?php
  require_once("./createform.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>The Walking Dead</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
  </head>
    <body>
      <?php
        echo createDiv("backgroundHead");
        echo title("titlePrincipal","Quizz the Walking Dead");
        echo closeTag("div");
        echo barre("separation");
        echo openForm("./monScript.php",'container-flex');
        echo createDiv("centerPhp");
        echo createSelect("reponse1","classeTitre1","métier", "Quelle est la profession de Hershel, le vieil homme qui a sauvé la vie de Carl ?", [
          [
            "value" => "Veterinaire",
            "content" => "Veterinaire",
          ],
          [
            "value" => "Docteur",
            "content" => "Docteur",
          ],
          [
            "value" => "Agriculteur",
            "content" => "Agriculteur",
          ],
        ]);
        echo closeTag("div");
        echo barre("separation");
        echo createDiv("centerPhp");
        echo phrasep("Question2","Autour de quelle ville des USA se termine la saison 1 ?");
        echo createInput("radio","q2","rep21","Atlanta");
        echo createInput("radio","q2","rep22","Los Angeles");
        echo createInput("radio","q2","rep23","Philadelphia");
        echo closeTag("div");
        echo barre("separation");
        echo createDiv("centerPhp");
        echo createSelect("reponse3","classeTitre3","métierglenn", "Quelle etait le metier de Glenn avant la catastrophe ?",[
          [
            "value" => "Livreur de pizzas",
            "content" => "Livreur de pizzas",
          ],
          [
            "value" => "Professeur d'arts martiaux",
            "content" => "Professeur d'arts martiaux",
          ],
          [
            "value" => "Policier",
            "content" => "Policier",
          ],
        ]);
        echo closeTag("div");
        echo barre("separation");
        echo createDiv("centerPhp");
        echo createSelect("reponse4","classeTitre4","","Comment tue-t-on correctement un rodeur ? On lui...",[
          [
            "value" => "transperceCoeur",
            "content" => "Transpercer le coeur",
          ],
          [
            "value" => "coupeTête",
            "content" => "Couper la tête",
          ],
          [
            "value" => "transperceCerveau",
            "content" => "Transpercer le cerveau",
          ],
        ]);
        echo closeTag("div");
        echo barre("separation");
        echo createDiv("centerPhp");
        echo phrasep("Question5","Avec quelle arme Daryl abat-il les rodeurs ?");
        echo createInput("radio","q5","rep51","un sabre");
        echo createInput("radio","q5","rep52","Une arbalète");
        echo createInput("radio","q5","rep53","Une mitraillette");
        echo closeTag("div");
        echo barre("separation");

        echo createDiv("centerPhp");
        echo createSelect("reponse5","classeTitre","","Pourquoi Jimmy creuse t-il des tombe sans discontinuer pendant des heures ?",[
          [
              "value" => "rep51",
              "content" => "Car il c'est fait mordre par un rodeur",
          ],
          [
            "value" => "rep52",
            "content" => "Car il perd la tête",
          ],
          [
            "value" => "rep53",
            "content" => "Car il a fait un rêve prémonitoire",
          ],
        ]);
        echo closeTag("div");
        echo barre("separation");

        echo createDiv("centerPhp");
        echo createInput("text","question6","","En quelle année la première saison est sortie en France ? ");
        echo closeTag("div");
        echo barre("separation");
        echo createDiv("centerPhp");
        echo phrasep("Question7","Avec quel outil Andréa tue-t-elle le rôdeur dans le van ?");
        echo createInput("radio","q7","","Une hache");
        echo createInput("radio","q7","","Un tournevis");
        echo createInput("radio","q7","","Un pistolet");
        echo closeTag("div");
        echo barre("separation");
        echo createDiv("centerPhp");
        echo createSelect("reponse8","classeTitre","","Qui c'est fait coupé la jambe par Rick après s'être fait mordre ?",[
          [
            "value" => "rep81",
            "content" => "Carl",
          ],
          [
            "value" => "rep82",
            "content" => "Hershell",
          ],
          [
            "value" => "rep83",
            "content" => "Glenn",
          ],
        ]);
        echo closeTag("div");
        echo barre("separation");
        echo createDiv("centerPhp");
        echo createInput("text","question9","","Combien de prisonniers ont été retrouvés vivants à la prison ?");
        echo closeTag("div");
        echo barre("separation");
        echo createSubmit("Terminé !","bouton");



       ?>

  </body>
</html>
