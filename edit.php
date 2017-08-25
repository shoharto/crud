<?php
require_once("db.php");
$id = $_GET['id'];
$search_query = mysqli_query($connection, "SELECT * FROM student_info where id = {$id}");
$row = mysqli_fetch_assoc($search_query);
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
    </style>
</head>
<body>

<div class="form_wrapper">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h1>Edit user</h1>
            <ul>
                <li><a href="#">Registration</a></li>
                <li><a href="list.php">Listing</a></li>
            </ul>
        </div>
        <div class="panel-body">
            <form action="update.php" method="post">
                <div class="form-group">
                    <label>First name</label>
                    <input type="text" class="form-control" value="<?= $row['first_name'] ?>" name="first_name">
                </div>
                <div class="form-group">
                    <label>Last name</label>
                    <input type="text" class="form-control" value="<?= $row['last_name'] ?>" name="last_name">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email_id" value="<?= $row['email_id'] ?>">
                </div>
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <button class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>