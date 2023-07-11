<?php
include 'config.php';
$name = $_POST['p_name'];
$price = $_POST['p_price'];
$image = $_FILES['p_image'];

// echo $name . "<br>";
// echo $price . "<br>";

// echo "<pre>";
// print_r($image);
// echo "</pre>";

$imageLocation = $_FILES['p_image']['tmp_name'];
$imageName = $_FILES['p_image']['name'];
$image_des = "image/" . $imageName;
// echo $x . "<br>";
move_uploaded_file($imageLocation, $image_des);

$insert_query = "INSERT INTO `product`(`name`, `price`, `image`) VALUES ('$name','$price','$image_des')";
if (mysqli_query($conn, $insert_query)) {
    // echo "<script>alert('Product Inserted!')</script>";
    echo "<script>location.href='index.php'</script>";

}