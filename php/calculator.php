<!DOCTYPE html>

<head>
    <title> Using fucntions
    </title>
</head>
<?php  
$Number_no_1 = $_POST['Number_no_1ber'];  
$Number_no_2 = $_POST['Number_no_2ber'];  
$Result = $_POST['Result'];  
function MyCalculator($Number1,$Number2, $Result)   
// set $Result as parameter  
{  
switch($Result)  
{  
case "Addition":   
// here you have to use colons not semi-colons  
$compute = $Number1 + $Number2;   
break;  
case "Subtraction":  
$compute = $Number1 - $Number2;   
break;  
case "Multiplication":  
$compute = $Number1 * $Number2;   
break;  
case "Division":  
$compute = $Number1 / $Number2;   
break;  
}  
return $compute; // returning variable  
}  
echo "$Result <br /> <br /> 1st Number: $Number_no_1 <br /> 2nd Number: $Number_no_2 <br /><br />";  
echo "Answer is:" .MyCalculator($Number_no_1,$Number_no_2, $Result);  
// you need to pass $Result as argument of that function  
?>

<body>
    <div id="page-wrap">
        <h1>Calculator by Nirnay</h1>
        <form action="" method="post" id="quiz-form">
            <p>
                <input type="number" name="Number_no_1" id="Number_no_1" required="required"
                    value="<?php echo $Number_no_1; ?>" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="Number_no_2" id="Number_no_2" required="required"
                    value="<?php echo $Number_no_2; ?>" /> <b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" name="CalculatorResult" value="<?php echo $CalculatorResult; ?>">
                <b>CalculatorResult</b>
            </p>
            <input type="submit" name="operator_specified" value="Sum" />
            <input type="submit" name="operator_specified" value="Subtraction" />
            <input type="submit" name="operator_specified" value="Multiplication" />
            <input type="submit" name="operator_specified" value="Division" />
        </form>
    </div>



    <?php
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}
?>
    <?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
    <?php
    echo " <h1>Global variable</h1>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
// echo $_SERVER['HTTP_REFERER'];
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo $_SERVER['SERVER_SOFTWARE'];
echo"<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br";
echo $_SERVER['REMOTE_PORT'];
?>

</body>

</html>