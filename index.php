<?php
  //fetch prequisite files
  require_once 'animal.php';
  //initiate classes
  $sheep = new Animal("shaun");
  $sungokong = new Ape("kera sakti");
  $kodok = new Frog("buduk");

  echo $sheep->name; // "shaun"
  echo "<br>";
  echo $sheep->legs; // 2
  echo "<br>";
  echo $sheep->cold_blooded;// false
  echo "<br>";
  $sungokong->yell() // "Auooo"
?>
