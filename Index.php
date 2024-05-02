<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample PHP Page</title>
</head>
<body>
    <h1>Welcome to My PHP Page!</h1>
    <p>This is a sample PHP page.</p>
    
    <?php
    // PHP code block to connect to the database
    $servername = "se-demo-server1.mysql.database.azure.com";
    $username = "Bhargavi";
    $password = "Bright$219319";
    $database = "MySQL Workbench";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo "<p>Connected to the database successfully!</p>";

    // Close the connection
    $conn->close();
    ?>

    <?php
    // PHP code block to display current date and time
    echo "<p>Today's date is " . date("Y-m-d") . " and the time is " . date("h:i:sa") . ".</p>";
    ?>

    <p>This is just a basic example. You can add more PHP code and HTML content as needed.</p>
</body>
</html>