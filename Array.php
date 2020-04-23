<!DOCTYPE html>
<html>
      <head>
            <meta charset= "utf-8">
            <title></title>
      </head>
<body>
      <?php
            $friends= array("Kevin","Karen", "Oscar", "Jim");
            echo $friends[0];
            $friends[1]= "Dwight";
            echo $friends[1];
            $friends[4]= "Angela";//I just added another element into my array
            echo count($friends); //This tells me how many elements are in the array
      ?>


</body>
</html>
