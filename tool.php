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
        <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <!-- jquery library -->
        <!-- <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script> -->
        <!-- Latest compiled and minified javascript -->
        <!-- <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> -->
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
                    <p style="font-size:34px;">Gardening is incomplete without maintaining plants. For maintaining plants, one needs excellent quality tools and accessories.</p>
                </div>
            </div>
            <div class="container">
                <div class="row ">
                    <div class="col-md-3 col-sm-6 my-3">
                        <div class="thumbnail" style="border:1px solid black; padding-bottom: 5px;">
                        <center>
                            <a href="cart.php">
                                <img src="images/hoe.jpg" alt="hoe">
                            </a>
      
                                <div class="caption">
                                    <h3>Hoe</h3>
                                    <p>Price: Rs. 649.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="images/Golden-Gark.jpg" alt="golden gark">
                            </a>
                           
                                <div class="caption">
                                    <h3>Golden Gark</h3>
                                    <p>Price: Rs. 899.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="images/garden-knife.jpg" alt="garden knife">
                            </a>
                           
                                <div class="caption">
                                    <h3>Garden Knife</h3>
                                    <p>Price: Rs. 99.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="images/garden-secateurs.jpg" alt="garden secateurs">
                            </a>
                            
                                <div class="caption">
                                    <h3>Garden Secateurs</h3>
                                    <p>Price: Rs. 289.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="images/garden-trowel.jpg" alt="garden trowel">
                            </a>
                            
                                <div class="caption">
                                    <h3>Garden Trowel</h3>
                                    <p>Price: Rs. 110.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="imageS/heavy-duty-hoe.jpg" alt="heavy duty hoe">
                            </a>
                          
                                <div class="caption">
                                    <h3>Heavy Duty Hoe</h3>
                                    <p>Price: Rs. 799.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="images/dibber.jpg" alt="dibber">
                            </a>
                           
                                <div class="caption">
                                    <h3>Dibber</h3>
                                    <p>Price: Rs. 399.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img  src="images/digging-spade.jpg" alt="digging spade">
                            </a>
                           
                                <div class="caption">
                                    <h3>Digging Spade</h3>
                                    <p>Price: Rs. 670.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="images/wheelbarrow.jpg" alt="wheelbarrow">
                            </a>
                            
                                <div class="caption">
                                    <h3>Wheelbarrow</h3>
                                    <p>Price: Rs. 3299.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="images/shovel.jpg" alt="shovel">
                            </a>
                           
                                <div class="caption">
                                    <h3>Shovel</h3>
                                    <p>Price: Rs. 199.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=10" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="images/pruning shears.jpg" alt="pruning shears">
                            </a>
                           
                                <div class="caption">
                                    <h3>Pruning Shears</h3>
                                    <p>Price: Rs. 280.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="images/gloves.jpg" alt="gloves">
                            </a>
                          
                                <div class="caption">
                                    <h3>Gloves</h3>
                                    <p>Price: Rs. 199.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
