<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SimpleXML - Get Node Values - Loop</title>
</head>

<body>
    <?php

       $xml=simplexml_load_file("..\phpxml\contents\books.xml") or die("Error: Cannot create objects");
    foreach($xml->children() as $books){
        echo $books->title . ", ";
        echo $books->author . ", ";
        echo $books->year . ", ";
        echo $books->price . "<br>";
    }
       


      ?>
</body>

</html>