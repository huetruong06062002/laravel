<?php
    class Rectangle{


      public function __construct (){
        echo "Hàm chạy đầu tiên ";
      }

      public $height = 20;
      public $width = 10;

      

      public function getParameter(){
        return 2 * ($this->height + $this->width);
      }

      public function getArea() {
        return $this->height * $this->width;
      }


    }

    $a = new Rectangle();

    echo "<br>";
    $a->height = 5;
    echo $a->getParameter();


   