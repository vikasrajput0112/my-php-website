<?php include 'header.php'; ?>
<h2>Contact Us</h2>
<form action="process_form.php" method="post">
    <label>Name:</label><br>
    <input type="text" name="name" required><br>
    <label>Email:</label><br>
    <input type="email" name="email" required><br>
    <label>Message:</label><br>
    <textarea name="message" required></textarea><br>
    <button type="submit">Send</button>
</form>
<?php include 'footer.php'; ?>

