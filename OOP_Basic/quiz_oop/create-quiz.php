<?php
session_start();
if (isset($_SESSION['Admin'])) {
    echo "Hello " .  $_SESSION['Admin']['uname'];
} else {
    header('location:signin.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Quiz</title>
</head>

<body>
    <a href="logout.php">Logout</a>
    <h1>Create Questions</h1>
</body>

</html>