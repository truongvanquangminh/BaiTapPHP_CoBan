<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle area</title>
</head>

<body>
    <?php
    if (isset($_POST['radius'])) {
        $radius = $_POST['radius'];
        $area = pow($radius, 2) * 3.14;
    }
    ?>
    <h2>Hình tròn</h2>
    <form action="#" method="post">
        <div>
            <label for="area">Diện tích:</label>
            <input type="text" name="area" value="<?php echo $area; ?>">
        </div>
        <div>
            <label for="radius">Bán kính:</label>
            <input type="text" name="radius">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>

</html>