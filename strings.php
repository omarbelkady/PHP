<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$phrase="Hello Guys";
echo strtolower($phrase);
echo strtoupper($phrase);
echo strlen($phrase);//print 10
echo $phrase[0];//prints out H
echo "Mike"[0];
$phrase[0]=H;
echo str_replace("Hello", "Goodbye", $phrase); //prints out Goodbye Guys
echo substr($phrase,8); ////Prints Guys
echo substr($phrase,8,3);//Prints Guy
?>
</body>
</html>
