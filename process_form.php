<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Here you can save data to DB or send an email
    // mail($to, "New Message", $message);

    header("Location: thankyou.php");
    exit();
}
?>

