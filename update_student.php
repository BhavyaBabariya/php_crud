<?php
include "config.php";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $marks = $_POST['marks'];

    // Update the student record in the database
    $sql = "UPDATE student SET name = '$name', email = '$email', subject = '$subject', marks = $marks WHERE id = $id";

    if ($con->query($sql) === TRUE) {
        echo "Student updated successfully!";
    } else {
        echo "Error updating student: " . $con->error;
    }

    // Redirect back to the edit page or list
    header("Location: display.php?id=" . $id);
    exit;
}
?>
