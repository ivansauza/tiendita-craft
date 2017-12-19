<?php

class holaMundo
{
  protected $var;
  
  public function construct()
  {
    $this->var = "Hola mundo";
  }
  
  public function saludar()
  {
    echo $this->var;
  }
}
