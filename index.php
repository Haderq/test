<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Apache 2.2.8</title>
</head>
<body>
    <h1>Welcome to Apache 2.2.8</h1>
    <p>This is the default index.php page.</p>
    <?php
    echo "<p>Current PHP version: " . phpversion() . "</p>";
    echo "<p>Server software: " . $_SERVER['SERVER_SOFTWARE'] . "</p>";
    ?>
</body>
</html>
