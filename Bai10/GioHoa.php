<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <table class="table">
            <thead>
                <tr class="thead-dark">
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Tổng tiền</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // session_start();


                // if (isset($_SESSION['buy'])) {
                //     foreach ($_SESSION['buy'] as $key => $item) {
                //         echo '<tr>';
                //         echo '<td>';
                //         echo htmlspecialchars($_SESSION['buy'][$key]["name"]);
                //         echo '<td>';
                //         echo htmlspecialchars($_SESSION['buy'][$key]["qty"]);
                //         echo '</td>';
                //         echo '<td>';

                //         echo htmlspecialchars($_SESSION['buy'][$key]["price"]);;
                //         echo '</td>';
                //         echo '<td>';

                //         echo htmlspecialchars($_SESSION['buy'][$key]["price"] * $_SESSION['buy'][$key]["qty"]);;
                //         echo '</td>';
                //         echo '</td>';
                //         echo '</tr>';
                //     }
                // }
                ?>
                <?php
                session_start();
                if (isset($_SESSION['buy'])) {
                    foreach ($_SESSION['buy'] as $key => $item) {
                ?>
                        <tr>
                            <th>
                                <a href=""><?php echo $_SESSION['buy'][$key]["name"]; ?></a>
                            </th>
                            <td><?php echo $_SESSION['buy'][$key]['price']; ?></td>
                            <td><input type="text" value="<?php echo $_SESSION['buy'][$key]['qty'] ?>"></td>
                            <td><?php echo $_SESSION['buy'][$key]['price'] * $_SESSION['buy'][$key]['qty']; ?></td>
                        </tr>
                <?php }
                } ?>
            </tbody>
        </table>
    </div>
</body>

</html>