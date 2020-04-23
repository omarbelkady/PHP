<!DOCTYPE html>
<html>
        <head>
        </title>
</head>
	      <body>
<form action= “site.php” method=”post”>
        <input type= “text” name= “student”>
        <input type= “submit”>
        </form>

        <?php 
              $grades=array("Jim"=>"A+", "Pam"=> "B+", "Oscar”=>“C+”);
              echo $grades["Jim"];//prints out A+
              //We access Array elements using a key in an associate array
              //e.g. Jim is a key, Oscar is a key and Pam is a key.
              echo $grades[$_POST["student"]];
        ?>
        </body>
</html>
