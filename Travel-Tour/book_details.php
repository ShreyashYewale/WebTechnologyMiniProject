<?php

   $servername="localhost";
   $username="root";
   $password="";
   $dbname="Travel_book";
   $connection = mysqli_connect($servername,$username,$password,$dbname);

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

   }else{
      echo 'something went wrong please try again!';
   }

?>