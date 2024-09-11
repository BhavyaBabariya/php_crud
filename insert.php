<?php
include "config.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email_address'];
    $subject = $_POST['subject_name'];
    $mark = $_POST['mark'];

    $query = "INSERT INTO student(name, email, subject, marks) VALUES ('$name','$email','$subject','$mark')";
    $exec = mysqli_query($con, $query);
    if ($exec) {
        header('location:display.php');
    } else {
        $msg = "Error: " . $query . "<br>" . mysqli_error($con);
        echo $msg;
    }
}
