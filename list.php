<?php

require_once('db.php');

$get_query = mysqli_query($connection, "SELECT * FROM student_info");

$students = [];

while ($row = mysqli_fetch_assoc($get_query)) {
    $students[] = $row;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <style>
        .form_wrapper {
            width: 600px;
            margin: 20px auto;
        }
        th,td{
            text-align: center;
        }
    </style>
</head>
<body>

<div class="form_wrapper">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h1>Student List</h1>
            <ul>
                <li><a href="index.php">Registration</a></li>
                <li><a href="list.php">Listing</a></li>
            </ul>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>Frist name</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($students as $value) : ?>
                    <tr>
                        <td><?= $value['id']; ?></td>
                        <td><?= $value['first_name']; ?></td>
                        <td><?= $value['last_name']; ?></td>
                        <td><?= $value['email_id']; ?></td>
                        <td><a href="edit.php?id=<?= $value['id']; ?>" class="btn btn-sm btn-warning">Edit</a></td>
                        <td><a href="delete.php?id=<?= $value['id']; ?>" class="btn btn-sm btn-warning">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>