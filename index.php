<?php
  //fetch prequisite files
  require_once 'Animal.php';
  require_once 'Frog.php';
  require_once 'Ape.php';
  //initiate classes
  $sheep      = new Animal("shaun");
  $sungokong  = new Ape("kera sakti");
  $kodok      = new Frog("buduk");

  // release 0
  echo $sheep->name; // "shaun"
  echo "<br>";
  echo $sheep->legs; // 2
  echo "<br>";
  echo $sheep->cold_blooded;// false
  echo "<br>";
  // release 1
  // Ape
  echo $sungokong->name; // "shaun"
  echo "<br>";
  echo $sungokong->legs; // 2
  echo "<br>";
  echo $sungokong->cold_blooded;// false
  echo "<br>";
  $sungokong->yell(); // "Auooo"
  // Kodok
  echo $kodok->name; // "shaun"
  echo "<br>";
  echo $kodok->legs; // 2
  echo "<br>";
  echo $kodok->cold_blooded;// false
  echo "<br>";
  $kodok->jump() ; // "hop hop"
?>
