<?php
include "config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch student data from the database
    $sql = "SELECT * FROM student WHERE id = $id";
    $result = $con->query($sql);
    
    // Check if the student exists
    if ($result->num_rows > 0) {
        $student = $result->fetch_assoc();
    } else {
        echo "Student not found!";
        exit;
    }
} else {
    echo "No student ID provided!";
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Edit Student</title>
</head>
<body>

<h2>Edit Student</h2>
<form action="update_student.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $student['id']; ?>">

    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value="<?php echo $student['name']; ?>"><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value="<?php echo $student['email']; ?>"><br><br>

    <label for="subject">Subject:</label><br>
    <input type="text" id="subject" name="subject" value="<?php echo $student['subject']; ?>"><br><br>

    <label for="marks">Marks:</label><br>
    <input type="number" id="marks" name="marks" value="<?php echo $student['marks']; ?>"><br><br>

    <input type="submit" value="Update Student" class="btn btn-secondary">
</form>

</body>
</html>