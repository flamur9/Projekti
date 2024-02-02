<?php
include 'dbconnect.php';


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$stmt = $conn->prepare("INSERT INTO contact_form (name, email, subject, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $subject, $message);


if ($stmt->execute()) {
  
    header("Location: contactus.php");
    exit();  
} else {
    echo "Error: " . $stmt->error;
}


$stmt->close();
$conn->close();
?>
