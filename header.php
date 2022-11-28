<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
       
    </head>
    <body>
    <nav class=" navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
     <a class="navbar-brand" href="index.php">
      <img src="images/31.png" alt="" width="30" height="24">
      Partrik Farm
     </a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse offset-7 " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="text">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                            <li class="nav-item"><a class="nav-link" href="index.php"><span class="glyphicon glyphicon-user"></span> Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.php"><span class="glyphicon glyphicon-user"></span> About</a></li>
                            <li class="nav-item"><a class="nav-link" href="tool.php"><span class="glyphicon glyphicon-user"></span>Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="gallery.php"><span class="glyphicon glyphicon-user"></span>Gallery</a></li>
                            <li class="nav-item"><a class="nav-link" href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                            <li class="nav-item"><a class="nav-link" href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                            <li class="nav-item"><a class="nav-link" href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                           <?php
                           }else{
                            ?>
                            <li class="nav-item"><a class="nav-link" href="index.php"><span class="glyphicon glyphicon-user"></span> Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.php"><span class="glyphicon glyphicon-user"></span> About</a></li>
                            <li class="nav-item"><a class="nav-link" href="tool.php"><span class="glyphicon glyphicon-user"></span>Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="gallery.php"><span class="glyphicon glyphicon-user"></span>Gallery</a></li>
                            <li class="nav-item"><a class="nav-link" href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                           <li class="nav-item"><a class="nav-link" href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                     
    </div>
 </div>
               
</nav>


        
    </body>
</html>