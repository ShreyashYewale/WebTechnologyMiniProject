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
   if(isset($_POST['deleteb'])){
        $email = $_POST['email'];

        $request = " Delete from book_form where email='$email'";
        $rs=mysqli_query($connection, $request);
        if($rs){
            echo "<script>alert('Your Delete Booking Request has been sent successfully')</script>";
         }
         else{
            echo "<script>alert('Your Delete Booking Request has not been sent successfully')</script>";
         }

         header('location:book.html'); 

    }
        else{
           echo "<script>alert('Deletion Failed')</script>";
        }

?>
</body>
</html>
