<?php
// Assuming you have already connected to your database
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert into contact form submissions table
$sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Message sent successfully!";
} else {
    echo "Error: " . $conn->error;
}
?>
