<?php include('server.php') ?>
<div id="google_translate_element"></div>
          
        <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
        }
        </script>
        
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<head>
	<title>Advice</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Niramit" rel="stylesheet">

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">



	<head>
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<title>Discuss</title>
	<script src="assets/js/jquery-3.2.1.min.js"></script>
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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

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
                    <h1 class="text-uppercase text-primary mb-1">AI Based Agro Info</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="../index.php" class="nav-item nav-link active">Home</a>
                        <a href="" class="nav-item nav-link">About</a>
                        <a href="" class="nav-item nav-link">Service</a>
                        <a href="" class="nav-item nav-link">Chatbot</a>
                        <a href="" class="nav-item nav-link">Helpline</a>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
	</head>



<body>



	<div class="header">
		<h2>For Login</h2>
	</div>

	<p class="tip">Give your identity!</p>
	<div class="cont">
		<?php include('errors.php'); ?>

		<form method="post" action="login.php">

			<div class="form sign-in">
				<div class="row">
					<h2>Welcome back</h2>
					<div class="col-md-12">
						<label>
							<span>Username</span>
							<input type="text" name="username" />
						</label>
					</div>
					<div class="col-md-12">

						<label>
							<span>Password</span>
							<input type="password" name="password" />
						</label>
					</div>
					<button type="submit" name="login_user" class="submit">Sign In</button>
				</div>
			</div>
		</form>
		<div class="sub-cont">
			<div class="img">
				<div class="img__text m--up">
					<h2>New here?</h2>
					<p>Sign up and discuss</p>
				</div>
				<div class="img__text m--in">
					<h2>One of us?</h2>
					<p>If you already has an account, just sign in.</p>
				</div>
				<div class="img__btn">
					<span class="m--up">Sign Up</span>
					<span class="m--in">Sign In</span>
				</div>
			</div>
			<form method="post" action="login.php">
				<div class="form sign-up">
					<h2>Give your Information</h2>
					<label>
						<span>Username</span>
						<input type="text" name="username" value="<?php echo isset($username) ? $username : ''; ?>" />
					</label>
					<label>
						<span>Email</span>
						<input type="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>" />
					</label>
					<label>
						<span>Password</span>
						<input type="password" name="password" />
					</label>
					<button type="submit" class="submit" name="reg_user">Sign Up</button>
				</div>
			</form>
		</div>
	</div>
	</a>

	<script>
		document.querySelector('.img__btn').addEventListener('click', function () {
			document.querySelector('.cont').classList.toggle('s--signup');
		});
	</script>
</body>

</html>



