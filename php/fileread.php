<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>readfile</title>
</head>

<body>

    <!-- <?php
$file = $_FILES("web");
$path = $file("C:\xampp\htdocs\www\php\contents\files");
$type = $file("type");
//check if file is a simple text file

if($type =="text/plain"){
    // check if file exists
       if(file_exists($path)){
    //check if the file is readable
              if(is_readable($path)){
                    $obj = fopen($path,"r");//r stands for read
                    while (!feof($obj)){
        $line = fgets($obj);
        $line =htmlspecialchars($line);
    }
}else{echo "the file is not in readable format";}
}else{
    echo "file is not exists";
}}
 else {
    echo "Not a text";
}
?> -->
    <?php
$myfile = fopen("web.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("web.txt"));
fclose($myfile);

?>

</body>

</html>