<?php
// Assuming you have already connected to your database
session_start();

$phone = $_POST['phone'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE phone = '$phone'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header('Location: dashboard.html');
    } else {
        echo "Invalid password!";
    }
} else {
    echo "No user found!";
}
?>
