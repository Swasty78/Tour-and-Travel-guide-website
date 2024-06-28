<?php
/*

$connection = mysqli_connect("localhost", "root", "", "book_db", 3305);
echo "<h3> Image uploaded successfully!</h3>";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone']; 
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrival = $_POST['arrival'];


    $request = " insert into book_form(name,email,phone,address,location,guests,arrival) values ('$name','$email','$phone','$address','$location','$guests','$arrival')";

    mysqli_query($connection, $request);

   // header('location:book.php');
    echo'booked successfully!';

*/

$name= $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$location = $_POST['location'];
$guests = $_POST['guests'];
$arrival = $_POST['arrival'];


if($guests == 1){
    echo 'hehe';
}
else{
    echo 'eheheehe';
}


$conn = new mysqli('localhost', 'root', '', 'book_db', 3305);
if($conn->connect_error){
    die('connection failed: '.$conn0->connect_error);
}
else{
    echo 'hi';
    $stmt= $conn->prepare("insert into book(name, email, phone, address, location, guests, arrival) values(?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssss", $name, $email, $phone, $address, $location, $guests, $arrival);
    $stmt->execute();
    echo "registration successfull";

    $stmt->close();
    $conn->close();

   // header('location:payment.php');
    echo'booked successfully!';
}




?>