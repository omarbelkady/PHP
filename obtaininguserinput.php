<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <?php ?>
      <form action= “site.php” method= “get”>
         Name:<input type= “text” name= “username”></input>
      <br>
         Age:<input type= “text” name= “age”>
         <input type= “submit”>
      </form>
      <br>
    Your name is<?php echo $_GET[“username”]?>//this returns the username you entered
    <br>
    Your age is<?php echo $_GET[“age”]?>//this returns the age you entered
  </body>
</html>
