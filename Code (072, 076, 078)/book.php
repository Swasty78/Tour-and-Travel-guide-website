<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>

    <!--swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!--font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">



</head>
<body>
<!-- header section starts -->
<section class="header">
    <a href="home.php" class="logo">travel.</a>
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>


</section>

<!--header section ends-->
<div class="heading" style="background:url(images/header-bg-3.jpg") no-repeat> 
    <h1>book now</h1>
</div>    


<!--booking section starts-->
<section class="booking">

<h1 class="heading-title">book your trip!</h1>
<form action="payment.php" method="post" class="book-form">

    <div class="flex">
        <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
        </div>
        <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
        </div>
        <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
        </div>
        <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
        </div>
        <div class="inputBox">
           <span>where to :</span>
           <div class="drop">
             <select name="location" id="location" style= "width:100%; font-size: 16px;
             margin-top: 15px; border: 2px solid #040000; border-radius:0px; height:52px;
            -webkit-appearance:none; background-color: white; color: #777;
             padding: 10px 12px;">
 
               <option value="Arial Beel">Arial Beel </option>
               <option value="Baikka">Baikka </option>
               <option value="Baliati Palace">Baliati Palace </option>
               <option value="Bhawal">Bhawal</option>
               <option value="Bhitargarh">Bhitargarh</option>
               <option value="Char Kukri Mukri"> Char Kukri Mukri</option>
               <option value="Chandraghona"> Chandraghona</option>
               <option value="Darianagar"> Darianagar</option>
               <option value="Dulahazra"> Dulahazra</option>
               <option value="Gangamati">Gangamati </option>
               <option value="Godkhali">Godkhali </option>
               <option value="Guava Market"> Guava Market </option>
               <option value="Jadipai Waterfall"> Jadipai Waterfall</option>
               <option value="Kantajew Temple">Kantajew Temple </option>
               <option value="Lal Pahar">Lal Pahar </option>
               <option value="Lalakhal">Lalakhal</option>
               <option value="Puthia">Puthia</option>
               <option value="Ratnodweep"> Ratnodweep</option>
               <option value="Satla">Satla</option>
               <option value="Sonargaon">Sonargaon </option>
               <option value="Teota Palace"> Teota Palace</option>
            </select>
            </div>
        </div>
        <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
        </div>
        <div class="inputBox" style=" margin-left:23%; display: block;">
            <span>arrivals :</span>
            <input type="date" name="arrival" style ="width:50%">
        </div>

    </div>


    <input type="submit" value="Confirmation and Advance Payment" class="btn" name="send" style="margin-left: 30%; padding-left:35px; border-radius:5px; justify-content:center; " >



</form>

</section>


<!--booking section ends-->
















<!-- footer section starts -->
<section class="footer">

    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
        <a href="book_form.php"><i class="fas fa-angle-right"></i>book</a>
        </div>

        <div class="box">
        <h3>extra links</h3>
        <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>about us</a>
        <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
        </div>

        <div class="box">
        <h3>contact info</h3>
        <a href="#"><i class="fas fa-phone"></i>+880-1734-450786</a>
        <a href="#"><i class="fas fa-phone"></i>+880-1678-392763</a>
        <a href="#"><i class="fas fa-phone"></i>+880-1234-567890</a>
        <a href="#"><i class="fas fa-envelope"></i>deyswasty@gmail.com</a>
        <a href="#"><i class="fas fa-envelope"></i>belamoni991@gmail.com</a>
        <a href="#"><i class="fas fa-envelope"></i>nstamanna19@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i>mirpur DOHS, Dhaka, 1206</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com/ShuvA.AnwitA?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i>facebook</a>
            <a href="https://www.facebook.com/nstamanna?mibextid=ZbWKwL"><i class="fab fa-twitter"></i>twitter</a>
            <a href="https://www.facebook.com/megla.moni.545?mibextid=ZbWKwL"><i class="fab fa-instagram"></i>instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
        </div>
</div>


<div class="credit">created by<span> Swasty,Nayma,Bela</span> | all rights reserved!</div>

</section>


<!-- footer section ends -->

<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- custom js file link -->
<script src="script.js"></script>  


</body>
</html>