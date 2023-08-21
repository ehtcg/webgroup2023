<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
$myfile = fopen("C:\xampp\htdocs\www\php\contents\files\web.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("web.txt"));
fclose($myfile);

?>
</body>

</html>