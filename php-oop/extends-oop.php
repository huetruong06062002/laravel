<?php

class A {
  public $attr_1 = 10;


  public function method_1(){
    echo $this->attr_1;
  }

}

class B extends A {
  private $attr_2 = 10;


  public function method_2(){
    echo $this->attr_1;
  }

}

$b = new B();

$b->method_1();

echo "<br>";

$b->method_2();