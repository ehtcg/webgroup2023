<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constants </title>
</head>

<body>
    <?php
 class Goodbye{
    const LEAVE_MESSAGE ="Hello team Iam going to going to another position!";
 }

 echo Goodbye::LEAVE_MESSAGE;
 echo "<br><br>"

 ?>
    <?php
class Goodbyee {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new Goodbyee();
$goodbye->byebye();
?>
</body>

</html>