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