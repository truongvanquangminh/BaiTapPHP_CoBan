<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Replace string</title>
    <style>
        .container {
            width: 50%;
            margin: 0 auto;
            text-align: center;
            background-color: #2343df;
        }

        .container h2 {
            padding-top: 10px;
        }

        .content {
            background-color: yellow;
            height: 37vh;
        }

        .content h3 {
            padding-top: 10px;
        }

        button {
            margin-top: 5px;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_POST['param1']) && isset($_POST['tugoc']) && isset($_POST['thaythe'])) {
        $param1 = $_POST['param1'];
        $tugoc = $_POST['tugoc'];
        $thaythe = $_POST['thaythe'];

        $param2 = str_replace($tugoc, $thaythe, $param1);
    }
    ?>
    <div class="container">
        <h2>Thay thế chuỗi</h2>
        <div class="content">
            <h3>Đoạn văn gốc:</h3>
            <form action="" method="post">
                <textarea name="param1" id="" cols="100" rows="4"></textarea>
                <div style="margin: 10px 0 10px -270px;">
                    <label for="tugoc">Từ gốc</label>
                    <input type="text" name="tugoc">
                    <label for="thaythe">thay thế bằng</label>
                    <input type="text" name="thaythe">
                </div>
                <textarea name="param2" id="" cols="100" rows="4"><?php if(isset($param2)) echo $param2; ?></textarea>
                <br>
                <button type="submit">Thực hiện</button>
            </form>

        </div>
    </div>
</body>

</html>