<?php
  Class Animal{
    public $name;
    public $legs = 2;
    public $cold_blooded = "false";

    // construct
    public function __construct($name){
      $this->name = $name;
    }
  }
?>
