<!-- Cho một số nguyên n, tính tổng: 1/3 + 2/6 + 3/9 + …. +n/j. -->

<?php
function tinhTong($n)
{
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i / ($i * 3);
    }
    echo $sum;
}

tinhTong(3);
