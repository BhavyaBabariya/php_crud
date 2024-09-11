<?php
include "config.php"; // Database connection

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $id = intval($id);
    delete_data($con, $id);
}
// Query to fetch data
function delete_data($con, $id)
{
    $query = "DELETE FROM student WHERE id = $id ";
    $result = mysqli_query($con, $query);
    if ($result) {
        header('Location: display.php');
        exit();
    } else {
        die('Error: ' . mysqli_error($con));
    }
}
