<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "donations_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("DB Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $phoneno = trim($_POST['phoneno']);
    $city = trim($_POST['city']);
    $donation = trim($_POST['donation']);
    $panno = trim($_POST['panno']);
    $address = trim($_POST['address']);

    $stmt = $conn->prepare("INSERT INTO donations (name, lastname, email, phoneno, city, donation, panno, address) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $name, $lastname, $email, $phoneno, $city, $donation, $panno, $address);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "Database error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
