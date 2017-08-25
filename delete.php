<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "llc_students";
$id=$_GET['id'];

$connection = mysqli_connect($host, $user, $pass, $db_name);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM student_info WHERE id='$id'";

if (mysqli_query($connection, $sql)) {
    echo "<center><h1>Record deleted successfully</h1></center>";
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}

mysqli_close($connection);
?>


<!DOCTYPE html>
<html>
<head>
    <style>
        .button {
            display: inline-block;
            border-radius: 4px;
            background-color: #f4511e;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 28px;
            padding: 20px;
            width: 200px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;

        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button:hover span {
            padding-right: 25px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }
        a{
         text-decoration: none;
            color:whitesmoke;;
        }
    </style>
</head>
<body>


<center><button class="button" style="vertical-align:middle"><span><a href="list.php">HOME</a></span></button></center>

</body>
</html>
