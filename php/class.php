<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class in php</title>
</head>

<body>
    <?php

     class Fruit{
        //properties
        public $name;
        public $color;
        //methods
        function set_name($name){
            $this->name =$name;
        }
        function get_name(){
            return $this->name;
        }
        function set_color($color){
            $this->color= $color;
        }
        function get_color(){
            return $this->color;
        }
        

     }

    $a = new Fruit();
    $a->set_name('Apple');
    $a ->set_color('Red');

    echo "Name: ".$a->get_name();
    echo "<br>";
    echo "color: ".$a->get_color();



  
  
?>
</body>

</html>