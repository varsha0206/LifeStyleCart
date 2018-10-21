<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">

        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
     
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <div class="container">
                <div class="jumbotron">
                    <h1>Welcome to our LifeStyle Store!</h1>
                    <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img\jew1.jpg" alt="Golden Mughal">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Golden Mughal Jewllery</h3>
                                    <p>Price: Rs. 50000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
									<p><a href="#" class=" btn btn-primary btn-block">More Details</a></p>
					<p><a href="login.php" role="button" class=" btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
												<p><a href="#" class=" btn btn-primary btn-block">More Details</a></p>
                                                <a href="cart_add.php?id=14" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/jew2.jpg" alt="Desinger Jewellery">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Desinger Jewellery</h3>
                                    <p>Price: Rs. 45000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="#" class=" btn btn-primary btn-block">More Details</a></p>
										<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
												<p><a href="#" class=" btn btn-primary btn-block">More Details</a></p>
                                                <a href="cart_add.php?id=15" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
										
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/jew3.jpg" alt="Shri shiv jewllery">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Shri Shiv Jewllery</h3>
                                    <p>Price: Rs. 50000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
									<p><a href="#" class=" btn btn-primary btn-block">More Details</a></p>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
												<p><a href="#" class=" btn btn-primary btn-block">More Details</a></p>
                                                <a href="cart_add.php?id=16" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/jew4.jpg" alt="Antique">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Classy Antique</h3>
                                    <p>Price: Rs. 80000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
										<p><a href="#" class=" btn btn-primary btn-block">More Details</a></p>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
												<p><a href="#" class=" btn btn-primary btn-block">More Details</a></p>
                                                <a href="cart_add.php?id=17" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
				
            </div>
            <br><br><br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
              <center>
                   <p>Copyright &copy Lifestyle Store. All Rights Reserved. | Contact: TejaSree</p>
                   <p>This website is developed by IIIrd Year IT-B</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>