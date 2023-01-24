<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="favicon.ico" rel="icon" />
<title>Product Details! | AR !</title>
	
	
	<!-- link for using icons - https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet" -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
	
	 	
<link href="detail.css" rel="stylesheet" type="text/css">
	
		<?php
#connect to the database
$user = "root";
$pass = "";
$db = "ar!";

$conn = new mysqli( 'localhost', $user, $pass, $db );
#print "great job. connection opened";

#retrieve data 
	$productid=$_GET["pid"];
$sql = "SELECT * FROM products where pid='" . $productid . "'";
$result = mysqli_query( $conn, $sql );
#print "record retrieved";
$row = mysqli_fetch_array( $result )
	?>
</head>

<body>

<!--------------------------- makeing of navbar ----------------------------->
<section id="header">
      <img src="image/logo.png" alt="" />
      <div>
        <ul id="navbar">
          <li><a href="index.html">Home</a></li>
		  <li><a href="aboutAr.html">About</a></li>
          <li><a class="active" href="shopsAr.php">Shop</a></li>
          <li><a href="contactAr.html">Contact</a></li>
          <li><a href="loginAr.html">Login/Sign-up</a></li>
          <li>
            <a href="cartAr.html"
              ><span class="material-icons">shopping_bag</span></a
            >
          </li>
        </ul>
      </div>
    </section>

<!-------------------------single product design------------------------------>
	<section id="prodetails" class ="section-p1">
	<div class="single-pro-image">
		<img src="<?php print $row['Mimg1'] ?>"  width="100%" id="mainImg" alt="">
		<div class="small-img-grp">
			
		<div class="small-img-col">
		<img src="<?php print $row['Mimg1'] ?>" width="100%" class="small-img" alt="">
		</div>
		<div class="small-img-col">
		<img src="<?php print $row['Img2'] ?>" width="100%" class="small-img" alt="">
		</div>
		<div class="small-img-col">
		<img src="<?php print $row['Img3'] ?>" width="100%" class="small-img" alt="">
		</div>
		<div class="small-img-col">
		<img src="<?php print $row['Img4'] ?>" width="100%" class="small-img" alt="">
		</div>
		
		</div>
		</div>
		
		
		
		<div class="single-pro-details">
		<h4><?php print $row['pbrand'] ?></h4>
		<p><?php print $row['pshort'] ?></p>
		<h4> ₹ <?php print $row['pprice'] ?></h4>
		
	<input type="number" value="1">
	<button class="normal">Add to Cart</button>
	<h4>Product Details</h4>
	<span><?php print $row['pdesc'] ?></span>
	</div>
	</section>
	
	

	
	
<!-- ----------------------------footer section-------------------------->                    
<footer class="section-p1">
      <div class="col">
        <img class="logo" src="image/logo.png" alt="" />
        <div class="follow">
          <h4>Follow us</h4>
          <div class="icon">
            <i class="fa fa-facebook-square"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-youtube-play"></i>
            <i class="fa fa-linkedin"></i>
          </div>
        </div>
      </div>

      <div class="col">
        <h4>About</h4>
        <a href="aboutAR.html">About us </a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy </a>
        <a href="#">Terms and Conditions</a>
      </div>

      <div class="col">
        <h4>Quick Link</h4>
        <a href="index.html">Home </a>
        <a href="aboutAr.html">About us </a>
        <a href="shopsAr.php">Shop </a>
        <a href="contactAr.html">Contact</a>
      </div>

      <div class="col">
        <h4>Contact Us</h4>
        <p><strong>Email: </strong>raj.prajapati@nift.ac.in</p>
        <p><strong>Address: </strong>189,Pura Pandey TSL Naini Allahabad UP</p>
        <p><strong>Phone: </strong> +91-8953976778</p>
        <p><strong>Hours: </strong>Mon-Sat, 10am - 9pm</p>
      </div>

      <div class="copyright">
        <p>Copyright @ 2023. All right Reserved </p>
      </div>
    </footer>
	
<!-----------java script-------->
	
	<script>
		var MainImg = document.getElementById("mainImg");
		var smallimg = document.getElementsByClassName("small-img");
		
		smallimg[0].onclick= function(){
			MainImg.src = smallimg[0].src;
		}
	
		smallimg[1].onclick= function(){
			MainImg.src = smallimg[1].src;
		}
		
		smallimg[2].onclick= function(){
			MainImg.src = smallimg[2].src;
		}
		
		smallimg[3].onclick= function(){
			MainImg.src = smallimg[3].src;
		}
		
	</script>
	
	
	</body>
</html>
