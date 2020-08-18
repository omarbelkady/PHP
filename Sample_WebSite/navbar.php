<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
   <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="img/bootstrap.png"></a><button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav ml-auto">
            <li class="nav-item">
               /* The Active class makes it so that whenever we are on a page it remains highlighted we do not want that
                I create an if statement to highlight the page we are on*/
                
               <a class="nav-link <?php if($page =='home'){echo 'active';}?>" href="index.php">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link <?php if($page =='about'){echo 'active';}?>" href="about.php">About</a>
            </li>
            <li class="nav-item">
               <a class="nav-link <?php if($page =='services'){echo 'active';}?>"href="services.php">Services</a>
            </li>
            <li class="nav-item">
               <a class="nav-link <?php if($page =='price'){echo 'active';}?>" href="price.php">Price</a>
            </li>
            <li class="nav-item">
               <a class="nav-link <?php if($page =='contact-us'){echo 'active';}?>" href="contact-us.php">Contact Us</a>
            </li>
         </ul>
      </div>
   </div>   
</nav>