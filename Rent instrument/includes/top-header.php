<?php 
//session_start();

?>

<div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class="list-unstyled">

<?php if(strlen($_SESSION['login']))
    {   ?>
				<li><a href="#"><i class="icon fa fa-user"></i>Welcome -<?php echo htmlentities($_SESSION['username']);?></a></li>
				<?php } ?>

					<li style="font-size:25px"><a href="my-account.php"><i class="icon fa fa-user" style="font-size:20px"></i>My Account</a></li>
					<li style="font-size:25px"><a href="my-wishlist.php"><i class="icon fa fa-heart fa" style="font-size:20px"></i>Wishlist</a></li>
					<li style="font-size:25px"><a href="my-cart.php"><i class="icon fa fa-shopping-cart " style="font-size:20px"></i>My Rent</a></li>
					<?php if(strlen($_SESSION['login'])==0)
    {   ?>
<li style="font-size:25px"><a href="login.php"><i class="icon fa fa-sign-in" style="font-size:20px"></i>Login</a></li>
<li style="font-size:25px"><a href="signup.php"><i class="icon fa fa-sign-in" style="font-size:20px"></i>Signup</a></li>
<?php }
else{ ?>
	
				<li style="font-size:25px"><a href="logout.php"><i class="icon fa fa-sign-out" style="font-size:20px"></i>Logout</a></li>
				<?php } ?>	
				</ul>
			</div><!-- /.cnt-account -->

<div class="cnt-block">
				<ul class="list-unstyled list-inline">
					<li class="dropdown dropdown-small">
						<a href="track-orders.php" class="dropdown-toggle" ><span class="key">Track Order</b></a>
						
					</li>

				
				</ul>
			</div>
			
			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->