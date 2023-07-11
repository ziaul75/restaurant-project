<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "final_project";


$conn = new mysqli($serverName, $userName, $password, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$firstName = $_POST['fn'];
$lastName = $_POST['ln'];
$email = $_POST['email'];
$password = $_POST['pass'];

// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $firstName, $lastName, $email, $password);

// Execute the statement
if ($stmt->execute()) {
    echo "Registration successful";
    echo "<script>location.href='login.php'</script>";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
