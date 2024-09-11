<?php
include "config.php"; // Database connection

// Query to fetch data
$query = "SELECT * FROM student";
$result = mysqli_query($con, $query);

// Check if query execution was successful
if (!$result) {
    die('Error: ' . mysqli_error($con));
}

// Fetch data into an array
$fetchData = [];
while ($row = mysqli_fetch_assoc($result)) {
    $fetchData[] = $row;
}
