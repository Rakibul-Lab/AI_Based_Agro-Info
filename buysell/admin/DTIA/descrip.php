<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>


  <meta charset="utf-8">
    <title>AI Based Agro Info</title>
    <link rel="icon" href="image/icon.png" type="image/icon type">
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
    <style media="screen">
      body{
        background-color: azure;
      }
      .div1{
        border: 2px solid black;
        width: 470px;
        float: left;
        margin-left: 10px;
        padding-bottom: 15px;
        margin-top: 15px;
      }
      .div2{
        width: 200px;
        border: 1px solid white;
        max-height: 150px;
        overflow: hidden;
        float: left;
        margin-top: 10px;
        margin-left: 10px;
        padding: 1px;
        font-size: 23px;
        font-weight: bold;
      }
      img{
        width: 220px;
        height: 160px;
        float: left;
        margin-left: 20px;
        margin-top: 10px;
      }
      .divmain{
        margin-left: 60px;
      }
      .div3{
        float: left;
        margin-top: 10px;
        margin-right: 200px;

      }
      #label1{
        font-size: 20px;
        font-weight: bold;
        margin-left: 60px;
      }
      #label2{
        font-size: 20px;
        font-weight: bold;
        margin-left: 14px;
      }
      form{
        margin-top: -60px;
        float: right;
        margin-right: 55px;

      }
      #readfulldescrip{
        font-size: 20px;
        font-weight: bold;
      }
    </style>
 </head>
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
                <h1 class="text-capitalize text-primary mb">AI Based Agro Info</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="" class="nav-item nav-link active">Home</a>
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
    
    <br><br>
    <div class="divmain">
      <?php
      include 'db.php';
     

      $sql="SELECT * from descrip order by id desc";
      $query=mysqli_query($conn,$sql);

      while ($info=mysqli_fetch_array($query)) {
        ?>

        <div class="div1">
          <img src="image/<?php echo $info['image']; ?>" alt="">
          <div class="div2">
            <?php echo $info['descrip']; ?>
          </div>

          <div class="div3">
            <label id="label1"> <?php echo formatDate3($info['date']); ?> </label><br><br>
            <label id="label2"> <?php echo formatDate1($info['date']); ?></label>
            <label id="label2"> <?php echo formatDate2($info['date']); ?> </label>

          </div>
          <form class="" action="fulldescrip.php" method="post">
            <input type="text" name="id" value="<?php echo $info['id']; ?>" hidden>
            <input id="readfulldescrip" type="submit" name="fulldescrip" value="Read Full descrip">

          </form>

        </div>

        <?php
      }

      ?>

    </div>

  </body>
</html>
