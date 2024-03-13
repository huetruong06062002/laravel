<?php 
    class Rectangle{
      public static $height = 20;
      public static $width = 10;

      public static function getParameter(){
        return 2 * (self::$height + self::$width);
      }

      public static function getArea() {
        return self::$height * self::$width;
      }
    }

   class Demo{
    function __construct(){
      echo Rectangle::getParameter();
    }
   } 

   new Demo();
?>