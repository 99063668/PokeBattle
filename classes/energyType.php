<?php
  class energyType{
    private $type;
    private $value;

    public function getType(){
      return $this->type;
    }

    public function setType($type){
      $this->type = $type;
      return $this;
    }

    public function getValue(){
      return $this->value;
    }

    public function setValue($value){
      $this->value = $value;
    }
  }
  