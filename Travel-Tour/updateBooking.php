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
   if(isset($_POST['updateb'])){
        $email = $_POST['email'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $request = " Update book_form set name='$name',phone='$phone' where email='$email' ";
        $rs=mysqli_query($connection, $request);
        if($rs){
            echo "<script>alert('Your Update Booking Request has been sent successfully')</script>";
         }
         else{
            echo "<script>alert('Your Update Booking Request has not been sent successfully')</script>";
         }

         header('location:book.html'); 

    }
        else{
           echo "<script>alert('Updation Failed')</script>";
        }

?>
</body>
</html>
