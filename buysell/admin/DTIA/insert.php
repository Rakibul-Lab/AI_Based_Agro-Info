<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert</title>
    <style media="screen">
      textarea{
        width: 550px;
        height: 300px;
        font-size: 20px;
      }
      div{
        border: 2px solid black;
        width: 600px;
        margin-left: 450px;
        margin-top: 50px;
        padding: 30px;
      }
      input[type=file]{
        font-size: 20px;
      }
      input[type=submit]{
        font-size: 20px;
        font-weight: bold;
        margin-left: 200px;
      }
    </style>
  </head>
  <body>
  
    <div class="">
      <form class="" action="insert.php" method="post" enctype="multipart/form-data">
        <textarea name="descrip" rows="20" cols="80" placeholder="Enter descrip" required></textarea><br><br>
        <input type="file" name="image" value="" required><br><br>
        <input type="submit" name="submit" value="Submit">

      </form>
      <?php
      include 'db.php';

      if (isset($_POST['submit'])) {
        $descrip=$_POST['descrip'];
        $image=$_FILES['image']['name'];
        $image_type=$_FILES['image']['type'];
        $image_size=$_FILES['image']['size'];
        $image_tem_loc=$_FILES['image']['tmp_name'];
        $image_store="image/".$image;

        move_uploaded_file($image_tem_loc,$image_store);

        $sql="INSERT INTO descrip(descrip,image) values('$descrip','$image')";
        $query=mysqli_query($conn,$sql);


          echo "Record updated successfully";
         


      }

       ?>

    </div>

  </body>
</html>
