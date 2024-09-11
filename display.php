<?php
include "read_data.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Marks</th>
                <th scope="col">Action</th>
                <th scope="col"><a href="index.php" class="btn btn-success">Add Student</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (count($fetchData) > 0) {
                $sn = 1;
                foreach ($fetchData as $data) {
            ?>
            <tr>
                <td> <?php echo $sn++; ?> </td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['subject']; ?></td>
                <td><?php echo $data['marks']; ?></td>
                <td><a href="view.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">view</a>
                    <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-primary">Edit</a>
                    <a href="delete.php?delete=<?php echo $data['id']; ?>" class="btn btn-danger">delete</a>
                </td>
                </td>
            </tr>
            <?php
                }
            } else {
                ?>
            <tr>
                <td colspan="5">No data found</td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>