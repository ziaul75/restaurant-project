<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "final_project";

$conn = new mysqli($serverName, $userName, $password, $dbName);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$password = $_POST['password'];
$emai = $_POST['email'];

$stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $email, $password);

$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "Login successful";
    echo "<script>location.href='crud/index.php'</script>";
    
} else {
    echo "Invalid email or password";
}

$stmt->close();
$conn->close();
?>
