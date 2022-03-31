<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mua hoa</title>
    <style>
        .container {
            width: 40%;
            margin: 0 auto;
            text-align: left;
            background-color: #23df82;
        }

        .container h2 {
            padding: 10px 0 0 10px;
        }

        .my-form {
            background-color: #2374df;
            padding: 20px;
        }

        .my-form input {
            margin: 5px;
        }

        .my-form button {
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Mua hoa</h2>
        <form action="" method="post" class="my-form">
            <label for="id">Id hoa:</label>
            <input type="text" name="id" value="">
            <br>
            <label for="id">Tên hoa:</label>
            <input type="text" name="name" value="">
            <br>
            <label for="id">Số lượng:</label>
            <input type="text" name="qty" value="">
            <br>
            <label for="id">Đơn giá:</label>
            <input type="text" name="price" value="">
            <br>
            <input type="submit" value="Mua hoa" />
        </form>
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_SESSION['buy'][$_POST['id']]['id'] == $_POST['id']) {
                $_SESSION['buy'][$_POST["id"]]['qty'] += $_POST["qty"];
            } else {
                $_SESSION['buy'][$_POST["id"]] = array("id" => $_POST["id"], "name" => $_POST["name"], "qty" => $_POST["qty"], "price" => $_POST["price"]);
            }
            if (isset($_SESSION["buy"])) {
                header("Location:giohoa.php");
            }
            // session_destroy();
        }
        ?>
    </div>
</body>

</html>