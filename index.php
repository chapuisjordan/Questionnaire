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


        echo createDiv("centerPhp");
        echo phrasep("Question2","Autour de quelle ville des USA se termine la saison 1 ?");
        echo closeTag("div");

        echo createDiv("centerPhp");
        echo createInput("radio","q2r2","rep1","Atlanta");
        echo createInput("radio","q2r2","rep2","Los Angeles");
        echo createInput("radio","q2r2","rep3","Philadelphia");
        echo closeTag("div");

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



       ?>

  </body>
</html>
