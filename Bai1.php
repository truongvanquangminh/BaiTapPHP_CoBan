<!-- Viết chương trình tạo số tiền phải trả của khách hàng.
In ra số tiền khuyến mại với quy định:
nếu số tiền phải trả thuộc [200, 300) thì khuyến mại 20%.
Nếu số tiền phải trả từ 300 trở lên thì khuyến mại 30%.
Còn lại thì không khuyến mại. -->

<?php
function tinhTien($a)
{
    if (200 <= $a && $a < 300) {
        echo $a * (100 - 20) / 100;
    } elseif ($a >= 300) {
        echo $a * (100 - 30) / 100;
    } else {
        echo $a;
    }
}

tinhTien(250);
