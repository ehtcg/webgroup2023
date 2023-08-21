<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constructor</title>
</head>

<body>
    <?php
     class Fruit{
        public $name;
        public $color;
        function __construct($name,$color){
            $this->name =$name;
            $this->color=$color;

        }
        function get_name(){
            return $this->name;
        }
        function get_color(){
            return $this->color;
        }
     }
   $a = new Fruit("Apple","Red");
    echo $a ->get_name(); 
    echo "<br>";
    echo $a ->get_color();
    


    ?>
    <h4> PHP gmp_abs() Function </h4>
    <?php  
$value1 = gmp_abs("854198");  
$value2 = gmp_abs("-854198");  
echo "The absolute value of number : ".$value1;  
echo "<br/>";  
echo "The absolute value of the negative number: ".$value2;  
?>
</body>

</html>