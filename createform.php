<?php
//Une ouvertuer de balise Form
  //Definir une action
  function openForm($action="#", $class)
  {
    return "<form action='" . $action. "'class='" . $class ."'>";

  }
//Une fermeture de balise Form
  function closeTag($tag)
  {
    return "</" . $tag . ">";
  }
  /*
  $type = string
  $name = string
  $value = string
  $label = string
  */

//Creation d'une Div
function createDiv($class)
{
  return "<div class='" . $class . "'>";
}

//Mise en place d'un input
  //Avec un label
function createInput($type,$name,$value ="" ,$label)
{
  return "<label>" . $label . "</label><input type='" . $type .  "' name='" . $name . "' value='" . $value . "'>";

}
function phrasep($class,$label)
{
  return "<p class='" . $class .  "'>" . $label . "</p>";
}
//Creation d'un hr
function barre($class)
{
  return "<hr class='" . $class . "'>";
}
//Mise en place d'un titre
function title($class,$phrase)
{
  $html ="<h1 class='" . $class . "'>" . $phrase . "</h1>";
  return $html;
}
//Mise en place d'un select
function createSelect($class,$classtitre,$name, $label, $options)
{
  $html ="<label class='" . $classtitre . "'>" . $label . "</label>";
  $html .="<select class='" . $class . "'name='" . $name . "'>";
  foreach ($options as $key => $value)
  {
    $html .="<option value='" . $value['value'] ."'>" . $value['content'] . "</option>";

  }
  $html .="</select>"; //Le .= permet la concaténation.
  return $html;
}


//Generer un bouton submit
function createSubmit($value,$class)
{
  return "<input type='submit' value='" . $value ."' class='" . $class . "'>";
}
