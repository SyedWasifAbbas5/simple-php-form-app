<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP App</title>
</head>
<body>
    <h2>Welcome to Simple PHP App</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Server-side logic
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        echo "<p>Hello, $name! Welcome to the app.</p>";
        // Additional server-side processing can be added here
    }
    ?>
</body>
</html>
