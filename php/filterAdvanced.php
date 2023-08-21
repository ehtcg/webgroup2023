<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filterAdvanced</title>
</head>

<body>
    <?php
     $int =122;
     $min =1;
     $max = 200;

     if(filter_var($int,FILTER_VALIDATE_INT,array("options"=> array("min_range"=>$min,"max_range"=>$max))) === false){
        echo ("Variable value is not within the legal range");
        echo "<br>";
     } else {
        echo "Varaible is with in legal range";
       echo "<br>";
     }


    ?>

    <?php
// Variable to check
$str = "<h1>Hello WorldÆØÅ!</h1>";

// Remove HTML tags and all characters with ASCII value > 127
$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newstr;
?>
    //callback function
    <?php
function my_callback($item) {
  return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $strings);
print_r($lengths);
?>

    // json encode and decode => json encode(),json_decode
    <?php
    echo "<br><br>";
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age);
?>
    <?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$arr = json_decode($jsonobj, true);
echo "<br>";
echo $arr["Peter"];
echo "<br>";
echo $arr["Ben"];
echo "<br>";
echo $arr["Joe"];
?>

</body>

</html>