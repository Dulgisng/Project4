<?php

// Enable error display for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

// Establish a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if there's a connection error and terminate the script if there is
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if a reservation ID is provided in the URL query string
if(isset($_GET['id'])) {

    // Retrieve the provided reservation ID
    $reservation_id = $_GET['id'];

    // Prepare an SQL statement to delete a reservation based on its ID
    $sql = "DELETE FROM reservations WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $reservation_id);

    // Execute the prepared statement and check the result
    if($stmt->execute()) {
        // Display a success message if the booking was cancelled successfully
        echo "Your booking has been cancelled successfully!";
        echo "<br>";
        echo "<a href='cancel_booking.php'>Cancel another booking</a>";
        echo "<br>";
        echo "<a href='index.html'>Return to homepage</a>";
    } else {
        // Display an error message if there was an issue cancelling the booking
        echo "Error: " . $stmt->error;
        echo "<br>";
        echo "<a href='cancel_booking.php'>Try cancelling another booking</a>";
        echo "<br>";
        echo "<a href='index.html'>Return to homepage</a>";
    }
} else {
    // Display an error message if no reservation was provided
    echo "Invalid request!";
    echo "<br>";
    echo "<a href='cancel_booking.php'>Go to cancellation page</a>";
    echo "<br>";
    echo "<a href='index.html'>Return to homepage</a>";
}

// Close the database connection
$conn->close();

?>
