<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
		<style>
	.zoom {
    padding: 50px;
	align:left;
    transition: transform .2s;
    width: 200px;
    height: 200px;
    margin: 20 auto;
	}

	.zoom:hover {
    transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
	}
</style>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
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
            </center>
			</div>
	
	<div class="zoom" style="padding-left:350px;">
<img src="img/cannon_eos.jpg" alt="Cannon" align="center"  width="500" height="300">	</div>


<div>
           
            <div style="padding-top:300px;" class="container">
                <div class="jumbotron">
                    <h2 align="center";>DESCRIPTION ABOUT CANON EOS</h2>
                    <p><i>*The Canon EOS M5 marks a new chapter for Canon's mirrorless series.<br> *After a handful of decent, but unremarkable mirrorless offerings, 
the M5 combines a good 24-megapixel APS-C image sensor, fast DIGIC 7 processor and speedy Dual Pixel CMOS AF system inside a compact SLR-styled body, 
complete with a built-in electronic viewfinder.<br>* The EOS M5 represents numerous "firsts" for a Canon EOS M camera, addressing the needs of more 
advanced photographers. <br>
*Is the Canon EOS M5 also the first Canon EOS M camera we consider a solid option for enthusiast photographers? Read our Canon EOS M5 Review to find 
out</i></p>
                </div>
            </div>
            </center>
			</div>

                 
				    
					 <p><a href="products.php" role="button" class="btn btn-primary btn-block">GO BACK</a></p>
                                
                    
					<br><br><br><br>
          
		  <footer class="footer">
               <div class="container">
              <center>
                   <p>Copyright &copy Lifestyle Store. All Rights Reserved. | Contact: Dr. K.K Baseer</p>
                   <p>This website is developed by IIIrd Year IT-B</p>
               </center>
               </div>
           </footer>
                   
     
        </div>
    </body>
</html>
