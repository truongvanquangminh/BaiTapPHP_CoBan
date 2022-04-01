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
                // Tạo mảng lưu trữ thông tin sinh viên, với key mỗi phần tử ID_SV
                $arHocVien = [
                    'FFSE1701001' => ['Nguyễn Văn Bảo', 95, 1],
                    'FFSE1701002' => ['Huỳnh Thị Thanh Thủy', 85, 0],
                    'FFSE1701003' => ['Ngô Việt Anh', 98, 1],
                    'FFSE1701004' => ['Nguyễn Thị Hương Lan', 100, 1]
                ];
                // Thêm 2 sinh viên vào mảng
                $arHocVienAdd = [
                    'FFSE1701005' => ['Trương Văn Quang Minh', 70, 1],
                    'FFSE1701006' => ['Phạm Minh Quyền', 78, 0]
                ];
                $arHocVien = array_merge($arHocVien, $arHocVienAdd);
                foreach ($arHocVien as $key => $value) {
                    // if ($value[2] == 1) { //Hiển thị thông tin sinh viên có CapChungNhan = 1
                ?>
                    <tr>
                        <th scope="row"><?php echo $key ?></th>
                        <td><?php echo $value[0] ?></td>
                        <td><?php echo $value[1] ?></td>
                        <td><?php echo $value[2] ?></td>
                    </tr>
                <?php
                    // Kiểm tra sinh viên có CapChungNhan = 0 thì xóa khỏi mảng
                    // if ($value[2] == 0) {
                    //     unset($arHocVien[$key]);
                    //     print_r($arHocVien);
                    // }
                    //}
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>