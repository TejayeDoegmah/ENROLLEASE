<?php
// Replace these values with your actual database credentials
$servername = "sql210.infinityfree.com";
$username = "if0_34894584";
$password = "gAt5j3BocRI";
$dbname = "if0_34894584_Tejaye";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $entered_username = $_POST["user"];
    $entered_password = $_POST["pass"];

    // Validate credentials against the database
    $sql = "SELECT * FROM admin WHERE username = '$entered_username' AND password = '$entered_password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Redirect to the admin dashboard or perform other actions
        header("Location: admin_dashboard.php");
        exit();
    } else {
        // Display error message
        echo "Invalid username or password";
    }
}

// Close the connection
$conn->close();
?>
