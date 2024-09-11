<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form action="insert.php" method="POST">
        <div class="form-group">
            <label>Name</label>
            <input type="text" placeholder="Enter a name" name="name">
        </div>
        <div class="form-group">
            <label>Email Address</label>
            <input type="email" placeholder="Enter Email Address" name="email_address" required>
        </div>
        <div class="form-group">
            <label>Subject</label>
            <input type="text" placeholder="Enter Subject Name" name="subject_name" required>
        </div>
        <div class="form-group">
            <label>Marks</label>
            <input type="number" placeholder="Enter Marks" name="mark" required>
        </div>
        <input type="submit" type="submit" name="submit" value="Submit">
    </form>
</body>

</html>