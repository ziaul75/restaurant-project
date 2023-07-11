<?php
include 'config.php';
$id = $_POST['id'];
$name = $_POST['u_name'];
$price = $_POST['u_price'];
$image = $_FILES['u_image'];

// echo $name . "<br>";
// echo $price . "<br>";

// echo "<pre>";
// print_r($image);
// echo "</pre>";

$imageLocation = $_FILES['u_image']['tmp_name'];
$imageName = $_FILES['u_image']['name'];
$image_des = "image/" . $imageName;
// echo $x . "<br>";
move_uploaded_file($imageLocation, $image_des);


$update_query = "UPDATE `product` SET `name`='$name',`price`='$price',`image`='$image_des' WHERE id='$id'";
mysqli_query($conn,$update_query);
// if (mysqli_query($conn, $update_query)) {
//     // echo "<script>alert('Product Inserted!')</script>";
    echo "<script>location.href='index.php'</script>";

// }
// $insert_query = "INSERT INTO `product`(`name`, `price`, `image`) VALUES ('$name','$price','$image_des')";
