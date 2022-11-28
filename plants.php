<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Projectworlds Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <div class="container my-2" >
                <div class="row" style="background-color:#eee;height:250px;">
                    <h1 style="font-size:75px;">Welcome to our Farm!</h1>
                    <p style="font-size:34px;">To plant a garden  is to believe in tomorrow.</p>
                </div>
            </div>
            <div class="container">
                <div class="row ">
                    <div class="col-md-3 col-sm-6 my-3">
                        <div class="thumbnail" style="border:1px solid black; padding-bottom: 5px;">
                        <center>
                            <a href="cart.php">
                                <img src="images/peace-lily.jpg" alt="peace lily">
                            </a>
      
                                <div class="caption">
                                    <h3>Peace Lily</h3>
                                    <p>Price: Rs.250.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(13)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=13" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <div class="thumbnail" style="border:1px solid black; padding-bottom: 5px;">
                        <center>
                            <a href="cart.php">
                                <img src="images/haworthia.jpg" alt="haworthia">
                            </a>
                           
                                <div class="caption">
                                    <h3>Haworthia</h3>
                                    <p>Price: Rs. 450.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(14)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=14" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <div class="thumbnail" style="border:1px solid black; padding-bottom: 5px;">
                        <center>
                            <a href="cart.php">
                                <img src="images/Boston-Fern.jpg" alt="boston fern">
                            </a>
                           
                                <div class="caption">
                                    <h3>Boston Fern</h3>
                                    <p>Price: Rs. 299.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(15)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=15" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <div class="thumbnail" style="border:1px solid black; padding-bottom: 5px;">
                        <center>
                            <a href="cart.php">
                                <img src="images/Fox_Tail_Fern.jpg" alt="garden secateurs">
                            </a>
                            
                                <div class="caption">
                                    <h3>Asparagus Meyeri</h3>
                                    <p>Price: Rs. 250.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(16)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=16" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 my-3">
                        <div class="thumbnail" style="border:1px solid black; padding-bottom: 5px;">
                        <center>
                            <a href="cart.php">
                                <img src="images/Calathea.jpg" alt="calathea">
                            </a>
                            
                                <div class="caption">
                                    <h3>Calathea Stromata</h3>
                                    <p>Price: Rs. 390.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(17)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=17" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <div class="thumbnail" style="border:1px solid black; padding-bottom: 5px;">
                        <center>

                            <a href="cart.php">
                                <img src="imageS/sansevieria.jpg" alt="sansevieria">
                            </a>
                          
                                <div class="caption">
                                    <h3>Sansevieria</h3>
                                    <p>Price: Rs. 299.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(18)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=18" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <div class="thumbnail" style="border:1px solid black; padding-bottom: 5px;">
                        <center>
                            <a href="cart.php">
                                <img src="images/Ficus.jpg" alt="ficus">
                            </a>
                           
                                <div class="caption">
                                    <h3>Ficus Elastica</h3>
                                    <p>Price: Rs. 425.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(19)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=19" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <div class="thumbnail" style="border:1px solid black; padding-bottom: 5px;">
                        <center>
                            <a  href="cart.php">
                                <img  src="images/lucky_bamboo.jpg" alt="lucky bamboo">
                            </a>
                           
                                <div class="caption">
                                    <h3>Lucky Bamboo</h3>
                                    <p>Price: Rs. 425.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(20)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=20" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 my-3">
                        <div class="thumbnail" style="border:1px solid black; padding-bottom: 5px;">
                        <center>
                            <a href="cart.php">
                                <img src="images/Haworthia_Coarctata.jpg" alt="Haworthia">
                            </a>
                            
                                <div class="caption">
                                    <h3>Haworthia Coarctata</h3>
                                    <p>Price: Rs. 350.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(21)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=21" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <div class="thumbnail" style="border:1px solid black; padding-bottom: 5px;">
                        <center>
                            <a href="cart.php">
                                <img src="images/Haworthia_Reinwardtii.jpg" alt="Haworthia">
                            </a>
                           
                                <div class="caption">
                                    <h3>Haworthia Reinwardtii</h3>
                                    <p>Price: Rs. 325.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(22)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=22" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <div class="thumbnail" style="border:1px solid black; padding-bottom: 5px;">
                        <center>
                            <a href="cart.php">
                                <img src="images/Zamioculcas.jpg" alt="zamioculcas">
                            </a>
                           
                                <div class="caption">
                                    <h3>Zamioculcas Zamiifolia</h3>
                                    <p>Price: Rs. 475.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(23)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=23" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <div class="thumbnail" style="border:1px solid black; padding-bottom: 5px;">
                        <center>
                            <a href="cart.php">
                                <img src="images/Red_Flame_Ivy.jpg" alt="red frame">
                            </a>
                          
                                <div class="caption">
                                    <h3>Red Lvy</h3>
                                    <p>Price: Rs. 300.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(24)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=24" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                           
                               
                             </div> </center>  
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
         <div>
             <?php
              require'footer.php';
              ?>
         </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    
    </body>
</html>
