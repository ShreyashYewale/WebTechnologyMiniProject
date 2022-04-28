<?php
   $servername="localhost";
   $username="root";
   $password="root";
   $dbname="travel_book";
   $connection = mysqli_connect($servername,$username,$password,$dbname,3308);

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
      $rs=mysqli_query($connection, $request);
      if($rs){
         echo "<script>alert('Your Booking Request has been sent successfully')</script>";
      }
      else{
         echo "<script>alert('Your Booking Request has not been sent successfully')</script>";
      }


      header('location:book.html');
      
   }
   else if(isset($_POST['deleteb'])){
      header('location:deleteBooking.html'); 
   } 
   else if(isset($_POST['updateb'])){
      header('location:updateBooking.html'); 
   } 
   else{
      echo 'something went wrong please try again!';
   }

?>
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
   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
      $rs=mysqli_query($connection, $request);
      if($rs){
         echo "<script>alert('Your Booking Request has been sent successfully')</script>";
      }
      else{
         echo "<script>alert('Your Booking Request has not been sent successfully')</script>";
      }


      header('location:book.html'); 

      
   }
   else if(isset($_POST['deleteb'])){
        header('location:deleteBooking.html');    
   } 
   else if(isset($_POST['updateb'])){
      header('location:updateBooking.html'); 
   } 
   else{
      echo 'something went wrong please try again!';
   }

?>