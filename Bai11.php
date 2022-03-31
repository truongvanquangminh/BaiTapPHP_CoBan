<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 11</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr class="table-primary">
                    <th scope="col">ID_SV</th>
                    <th scope="col">Ten_SV</th>
                    <th scope="col">AVG</th>
                    <th scope="col">CapChungNhan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $arHocVien = [
                    'FFSE1701001' => ['Nguyễn Văn Bảo', 95, 1],
                    'FFSE1701002' => ['Huỳnh Thị Thanh Thủy', 85, 0],
                    'FFSE1701003' => ['Ngô Việt Anh', 98, 1],
                    'FFSE1701004' => ['Nguyễn Thị Hương Lan', 100, 1]
                ];
                foreach ($arHocVien as $key => $value) { ?>
                    <tr>
                        <th scope="row"><?php echo $key ?></th>
                        <td><?php echo $value[0] ?></td>
                        <td><?php echo $value[1] ?></td>
                        <td><?php echo $value[2] ?></td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>