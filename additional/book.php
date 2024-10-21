<?php

$conn = new mysqli("localhost","root","","projet");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $appointment_date = $_POST['appointment_date'];

    $stmt = $conn->prepare("INSERT INTO reservations (first_name, last_name, email, address, phone_number, appointment_date) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $first_name, $last_name, $email, $address, $phone_number, $appointment_date);

    if ($stmt->execute()) {
        header('Location: ../index.php');
        die();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
