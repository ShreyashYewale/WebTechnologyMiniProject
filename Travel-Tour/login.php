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
   if(isset($_POST['sendlogininfo'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $request = " select * from users where email='$email' and password='$password' ";
        $rs=mysqli_query($connection, $request);
        if($rs){
           $row = mysqli_fetch_array($rs);
           if($row){
              header('location:home.html');
           }
           else{
             
            echo "<script>alert('Login Failed')</script>";
           }
        }
    }
        else{
           echo "<script>alert('Login Failed')</script>";
        }

?>
</body>
</html>
