<?php

// Enable error display
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

// Check if there is a connection error and exit if any
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if(isset($_POST['res_submit'])) {

    // Get the submitted form data
    $name = $_POST['res_name'];
    $email = $_POST['res_email'];
    $date = $_POST['res_date'];
    $time = $_POST['res_time'];
    $people = $_POST['res_people'];
    $requests = $_POST['res_requests'];

    // Check for existing reservations
    $check_sql = "SELECT * FROM reservations WHERE date = ? AND time = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("ss", $date, $time);
    $check_stmt->execute();
    $result = $check_stmt->get_result();

    if($result->num_rows > 0) {
        // If a reservation exists, display a message and exit
        echo "Sorry, this time slot is already booked. Please choose a different time.";
        header("Refresh: 3; url=index.html");
    } else {
        // SQL query to insert the reservation into the database
        $sql = "INSERT INTO reservations (name, email, date, time, people, requests) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssis", $name, $email, $date, $time, $people, $requests);
        
        // Execute the query and check if it's successful
        if($stmt->execute()) {
            // If successful, display a success message and then redirect to the homepage
            echo "Your reservation has been booked successfully!";
            header("Refresh: 3; url=index.html");
        } else {
            // If there's an error, display it
            echo "Error, your reservation can not be booked!" . $conn->error;
        }
    }

}

// Close the database connection
$conn->close();

?>
