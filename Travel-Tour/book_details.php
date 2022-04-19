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
         echo"
         <div>
         <table>
         <tr>
            <td>Name</td>
            <td>$name</td>
         </tr>
         <tr>
            <td>Email</td>
            <td>$email</td>
         </tr>
         <tr>
            <td>Phone</td>
            <td>$phone</td>
         </tr>
         <tr>
            <td>Address</td>
            <td>$address</td>
         </tr>
         <tr>
            <td>Location</td>
            <td>$location</td>
         </tr>
         <tr>
            <td>No of Guests</td>
            <td>$guests</td>
         </tr>
         <tr>
            <td>Arrival Date</td>
            <td>$arrivals</td>
         </tr>
         <tr>
            <td>Departure Date</td>
            <td>$leaving</td>
         </tr>
         </table>
         </div>";
        echo "<h3>You have successfully submitted your details for enquiry.Our executive will contact you soon!!!</h3>";
        
      }
      else{
         echo "<script>alert('Your Booking Request has not been sent successfully')</script>";
      }

   }else{
      echo 'something went wrong please try again!';
   }

?>
</body>
</html>
