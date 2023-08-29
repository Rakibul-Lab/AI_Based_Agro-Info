<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
		
		}else{
			$message="Product ID is invalid";
		}
	}
		echo "<script>alert('Product has been added to the cart')</script>";
		echo "<script type='text/javascript'> document.location ='my-cart.php'; </script>";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AI Based Agro Info</title>
    <link rel="icon" href="../img/icon.png" type="image/icon type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
   



	<!-- Meta -->
	<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="assets/css/config.css">

		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		

</head>

<div id="google_translate_element"></div>
          
        <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
        }
        </script>
        
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    
                    <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i>****@example.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-body pl-3" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
				
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
					<h1 class="text-capitalize text-primary mb">AI Based Agro Info</h1>
					<a href="../index.php" class="nav-item nav-link active">Main page</a>
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="" class="nav-item nav-link">About</a>
                        <a href="" class="nav-item nav-link">Service</a>
                        <a href="" class="nav-item nav-link">Chatbot</a>
                        <a href="" class="nav-item nav-link">Helpline</a>
						<a href="contact.html" class="nav-item nav-link">Contact</a>
                        </div>
                       
                    </div>
                </div>
            </nav>
        </div>
    </div>

	<body class="cnt-home">
	
		
	
	<!-- ============================================== HEADER ============================================== -->
	
<header class="header-style-1">
<?php include('includes/top-header.php');?>
<?php include('includes/main-header.php');?>

</header>
	

<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-xs" id="top-banner-and-menu">
<div class="container">
	<div class="furniture-container homepage-container">
	<div class="row">
	
		<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
			<!-- ================================== TOP NAVIGATION ================================== -->
<?php include('includes/side-menu.php');?>
<!-- ================================== TOP NAVIGATION : END ================================== -->
		</div><!-- /.sidemenu-holder -->	
		
		<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
			<!-- ========================================== SECTION – HERO ========================================= -->
		
			<div id="hero" class="homepage-slider3">
<div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
	<div class="full-width-slider">	
		<div class="item" style="background-image: url(assets/images/banners/cat-banner-1.jpg);">
			<!-- /.container-fluid -->
		</div><!-- /.item -->
	</div><!-- /.full-width-slider -->
	
	<div class="full-width-slider">
		<div class="item full-width-slider" style="background-image: url(assets/images/banners/cat-banner-2.jpeg);">
		</div><!-- /.item -->
	</div><!-- /.full-width-slider -->

	<div class="full-width-slider">
		<div class="item full-width-slider" style="background-image: url(assets/images/banners/cat-banner-3.jpg);">
		</div><!-- /.item -->
	</div><!-- /.full-width-slider -->

</div><!-- /.owl-carousel -->
</div>
	

	<!-- ============================================== SCROLL TABS ============================================== -->
	<div id="product-tabs-slider" class="scroll-tabs inner-bottom-vs  wow fadeInUp">
		<div class="more-info-tab clearfix">
		   <h3 class="new-product-title pull-left">Featured Products</h3>
			<ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
				<li class="active"><a href="#all" data-toggle="tab">Nursery</a></li>

				<li><a href="#furniture" data-toggle="tab">Pesticides</a></li>
			</ul><!-- /.nav-tabs -->
		</div>

		<div class="tab-content outer-top-xs">
			<div class="tab-pane in active" id="all">			
				<div class="product-slider">
					<div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
<?php
$ret=mysqli_query($con,"select * from products");
while ($row=mysqli_fetch_array($ret)) 
{
# code...


?>

							
	<div class="item item-carousel">
		<div class="products">
			
<div class="product">		
	<div class="product-image">
		<div class="image">
			<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
			<img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="180" height="300" alt=""></a>
		</div><!-- /.image -->			

										   
	</div><!-- /.product-image -->
		
	
	<div class="product-info text-left">
		<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
		<div class="rating rateit-small"></div>
		<div class="description"></div>

		
		
		
	</div><!-- /.product-info -->
	<?php if($row['productAvailability']=='In Stock'){?>
				<div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Add to Cart</a></div>
			<?php } else {?>
					<div class="action" style="color:red">Out of Stock</div>
				<?php } ?>
		</div><!-- /.product -->
  
		</div><!-- /.products -->
	</div><!-- /.item -->
<?php } ?>

		</div><!-- /.home-owl-carousel -->
				</div><!-- /.product-slider -->
			</div>




<div class="tab-pane" id="books">
				<div class="product-slider">
					<div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
	<?php
$ret=mysqli_query($con,"select * from products where category=3");
while ($row=mysqli_fetch_array($ret)) 
{
# code...


?>

							
	<div class="item item-carousel">
		<div class="products">
			
<div class="product">		
	<div class="product-image">
		<div class="image">
			<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
			<img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="180" height="300" alt=""></a>
		</div><!-- /.image -->			

										   
	</div><!-- /.product-image -->
		
	
	<div class="product-info text-left">
		<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
		<div class="rating rateit-small"></div>
		<div class="description"></div>

		<div class="product-price">	
			<span class="price">
				TK. <?php echo htmlentities($row['productPrice']);?>			</span>
										 <span class="price-before-discount">TK.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></span>
								
		</div><!-- /.product-price -->
		
	</div><!-- /.product-info -->
			<?php if($row['productAvailability']=='In Stock'){?>
				<div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Add to Cart</a></div>
			<?php } else {?>
					<div class="action" style="color:red">Out of Stock</div>
				<?php } ?>
		</div><!-- /.product -->
  
		</div><!-- /.products -->
	</div><!-- /.item -->
<?php } ?>

	
							</div><!-- /.home-owl-carousel -->
				</div><!-- /.product-slider -->
			</div>






	<div class="tab-pane" id="furniture">
				<div class="product-slider">
					<div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
	<?php
$ret=mysqli_query($con,"select * from products where category=5");
while ($row=mysqli_fetch_array($ret)) 
{
?>

							
	<div class="item item-carousel">
		<div class="products">
			
<div class="product">		
	<div class="product-image">
		<div class="image">
			<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
			<img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="180" height="300" alt=""></a>
		</div>		

										   
	</div>
		
	
	<div class="product-info text-left">
		<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
		<div class="rating rateit-small"></div>
		<div class="description"></div>

		<div class="product-price">	
			<span class="price">
				TK.<?php echo htmlentities($row['productPrice']);?>			</span>
										 <span class="price-before-discount">TK.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></span>
								
		</div>
		
	</div>
			<?php if($row['productAvailability']=='In Stock'){?>
				<div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Add to Cart</a></div>
			<?php } else {?>
					<div class="action" style="color:red">Out of Stock</div>
				<?php } ?>
		</div>
  
		</div>
	</div>
<?php } ?>

	
							</div>
				</div>
			</div>
		</div>
	</div>
		


</div>
</div>
<?php include('includes/footer.php');?>

<script src="assets/js/jquery-1.11.1.min.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/echo.min.js"></script>
<script src="assets/js/jquery.easing-1.3.min.js"></script>
<script src="assets/js/bootstrap-slider.min.js"></script>
<script src="assets/js/jquery.rateit.min.js"></script>
<script type="text/javascript" src="assets/js/lightbox.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/scripts.js"></script>

<!-- For demo purposes – can be removed on production -->

<script src="switchstylesheet/switchstylesheet.js"></script>

<script>
	$(document).ready(function(){ 
		$(".changecolor").switchstylesheet( { seperator:"color"} );
		$('.show-theme-options').click(function(){
			$(this).parent().toggleClass('open');
			return false;
		});
	});

	$(window).bind("load", function() {
	   $('.show-theme-options').delay(2000).trigger('click');
	});
</script>
<!-- For demo purposes – can be removed on production : End -->



    <!-- Navbar End -->
    </body>
    </html>
