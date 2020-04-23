<!DOCTYPE html>
<html>
      <head>
      </head>
      <body>
            <form action="site.php" method= "POST">
            Password:<input type="password" name= "password"> <br>
            <input type= "submit">
            </form>
            <br></br>

      <?php
	          echo $_POST["password"];
      ?>
      </body>
</html>
