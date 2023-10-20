<?php

// Enable error display for debugging purposes
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

// Establish a new connection with the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for any connection errors and exit if there are any
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['search_email'])) {

    // Get the email from the submitted form data
    $email_to_check = $_POST['search_email'];

    // SQL query to select reservations based on the provided email
    $sql = "SELECT * FROM reservations WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email_to_check);
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch and display each reservation associated with the provided email
    while ($row = $result->fetch_assoc()) {
        echo "Reservation for " . $row['name'] . " on " . $row['date'] . " at " . $row['time'] . "<br>";
        echo "<a href='cancel_booking_action.php?id=" . $row['id'] . "'>Cancel this booking</a><br><br>";
    }
}

?>

<!-- Form to search for bookings using an email -->
<form method="post" action="cancel_booking.php">
    <input type="email" name="search_email" placeholder="Enter your email" required>
    <input type="submit" value="Search Bookings">
</form>
