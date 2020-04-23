<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
          <form action=”site.php” method=”get”>
          Name:<input type=”text” name= “name”> <br>
          <input type=”submit”>
          </form>
    <br><br>
    <?php 
          echo $_GET[“name”];?>
    </body>
</html>

localhost:4000/www/site.php?name=John&age=70
