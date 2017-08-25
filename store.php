<?php
require_once("db.php");

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email_id = $_POST['email_id'];

$query = "INSERT INTO student_info(first_name,last_name,email_id) values('{$first_name}','{$last_name}','{$email_id}')";

$insert = mysqli_query($connection,$query);

if($insert){
	echo "<center><h1>Successfully data inserted</h1></center>";
}else{
	echo "Sorry try again";
}

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


<center><button class="button" style="vertical-align:middle"><span><a href="index.php">HOME</a></span></button></center>

</body>
</html>
