<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Indormations</title>
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
            <h1>Stundet registration</h1>
            <ul>
                <li><a href="#">Registration</a></li>
                <li><a href="list.php">Listing</a></li>
            </ul>
        </div>
        <div class="panel-body">
            <form action="store.php" method="post">
                <div class="form-group">
                    <label>First name</label>
                    <input type="text" class="form-control" name="first_name">
                </div>
                <div class="form-group">
                    <label>Last name</label>
                    <input type="text" class="form-control" name="last_name">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email_id">
                </div>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>