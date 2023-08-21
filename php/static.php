<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>static method</title>
    <link rel="stylesheet" href="..\css\style.css">
</head>

<body>
    <!-- PHP - Static Methods
Static methods can be called directly - without creating an instance of the class first.

Static methods are declared with the static keyword: -->

    <?php

  class  greeting{
    public static function welcome(){
        echo "Hello , this  example of static method!";
    }
  }
  //call static method

 greeting::Welcome();

?>
    <hr>
    <h2 style="::first-letter">PHP - More on Static Methods
        A class can have both static and non-static methods. A static method can be accessed from a method in the
        same class using the self keyword and double colon (::):
    </h2>
    <?php
class greeting1 {
  public static function welcome() {
    echo "Hello World!";
  }

  public function __construct() {
    self::welcome();
  }
}

new greeting1();
?>
    <h1 style="color:red;">Static method can also be called from another method ad below </h1>
    <?php
class A {
  public static function welcome() {
    echo "Hello World!";
  }
}

class B {
  public function message() {
    A::welcome();
  }
}

$obj = new B();
echo $obj -> message();
?>



</body>

</html>