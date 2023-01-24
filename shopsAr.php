<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link href="favicon.ico" rel="icon">
	<title>Shop | Ar!</title>
	
	<!-- link for using icons - https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet" -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
	 	
	<link href="sshop.css" rel="stylesheet" type="text/css">

<?php
#connect to the database
$user = "root";
$pass = "";
$db = "ar!";

$conn = new mysqli( 'localhost', $user, $pass, $db );
#print "great job. connection opened";

#retrieve data
$sql = "SELECT * FROM products where pcat='ftb'";
$result = mysqli_query( $conn, $sql );
#print "record retrieved";

?>
</head>

<body>

<!------ makeing of navbar--------- makeing of navbar ------ makeing of navbar---------->
	
<section id="header"><img src="image/logo.png" alt="" />
		<div>
			<ul id="navbar">
				<li><a href="index.html">Home</a></li>
				<li><a href="aboutAr.html">About</a></li>
				<li><a class="active" href="shopsAr.php">Shop</a></li>
				<li><a href="contactAr.html">Contact</a></li>
				<li><a href="loginAr.html">Login/Sign-up</a></li>
				<li><a href="cartAr.html"><span class="material-icons">shopping_bag</span></a></li>
			</ul>
		</div>
	</section>
	

<!-- --------makeing of SHOP cover page---------------makeing of SHOP cover page ----------makeing of SHOP cover page-------------- 
	
	
<section id="page-header">
  <h2>Play up!!</h2>
  <p>Express yourself with confidence</p>
	</section>

	
---------product section------------product section --------------->  
	<!-----------product section------------product section -------------product section 

			  
				</td>
			
			</tr>
			<tr>
			
		</tr>	
	
	</tbody>
</table> -->


	
<!--start of product table -->
	
	<section id="product1" class="section-p1">
		<div class="pro-container">
		<?php
				$count=0;
			while ( $row = mysqli_fetch_array( $result ) ) {
				
			?>
		<div class="pro">
			<a href=oneproar.php?pid=<?php print $row['pid'] ?>><img src="<?php print $row['Mimg1'] ?>" alt=""/></a>
		
		<div class="des">
	    <h5><?php print $row['pbrand'] ?></h5>
		<span><?php print $row['pshort'] ?></span>
		<h4>₹ <?php print $row['pprice'] ?></h4>
	</div>
		<br><br>	
		<a href="#"><span class="material-icons cart">shopping_cart</span></a>
	</div >
			<?php
				$count =$count+1;
					if($count%4==0){
				?>
		<?php
						
					}}
			?>
			
			
				
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
			<a href="aboutAR.html">About us </a>
			<a href="shopsAr.php">Shop </a>
			<a href="contactAR.html">Contact</a>
		</div>

		<div class="col">
			<h4>Contact Us</h4>
			<p><strong>Email: </strong>raj.prajapati@nift.ac.in</p>
			<p><strong>Address: </strong>189,Pura Pandey TSL Naini Allahabad UP</p>
			<p><strong>Phone: </strong> +91-8953976778</p>
			<p><strong>Hours: </strong>Mon-Sat, 10am - 9pm</p>
		</div>

		<div class="copyright">
			<p>Copyright @ 2022. All right Reserved </p>
		</div>
	</footer>
	</body>
</html>
