<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping through XML DOM</title>
</head>

<body>
    <?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("..\phpxml\contents\books.xml");

$x = $xmlDoc->documentElement;
foreach ($x->childNodes AS $item) {
  print $item->nodeName . " = " . $item->nodeValue . "<br>";
}
?>
</body>

</html>