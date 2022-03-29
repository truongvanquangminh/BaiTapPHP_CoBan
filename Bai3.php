<!-- Tạo một số nguyên n bất kì ,
tính tổng các chữ số lẻ trong n và
in kết quả ra màn hình ( VD: 123 = 1+3) -->

<?php
function tongSoLe($n)
{
    $sum = 0;
    // $x = 0;
    while ($n != 0) {
        $x = $n % 10;
        if($x % 2 != 0) {
            $sum += $x;
        }
        $n /= 10;
    }
    echo $sum;
}

tongSoLe(103);