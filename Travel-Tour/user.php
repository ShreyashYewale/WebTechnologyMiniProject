<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/result.css">
   <title>Document</title>
</head>
<body>
   <?php include 'database.php';?>
   <?php
   if(isset($_POST['sendinfo'])){
      $name = $_POST['full_name'];
      $email = $_POST['email'];
      $password = $_POST['password'];


      $request = " insert into users(fullname,email,password) values('$name','$email','$password') ";
      $rs=mysqli_query($connection, $request);
      if($rs)
      {
         header("Location:login.html");
      }
      else{
         echo "<script>alert('Please enter valid credentials')</script>";
         header("Location:signup.html");
      }

   }else{
      echo 'something went wrong please try again!';
   }
?>
</body>
</html>
