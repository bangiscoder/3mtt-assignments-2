<?php
echo "<h1>Comment Delivered</h1>";
$servername = "sql202.infinityfree.com";
$username = "if0_35132759"; // Your MySQL username
$password = "TzLLy7P6ALW"; // Your MySQL password
$dbname = "if0_35132759_3mtt"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $conn->real_escape_string($_POST['userName']);
    $comment = $conn->real_escape_string($_POST['comment']);

    $sql = "INSERT INTO comments (userName, comment) VALUES ('$userName', '$comment')";

    if ($conn->query($sql) === TRUE) {
        echo "New comment submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    echo "<h1>Successful</h1>";
}

$conn->close();
?>