<!-- Viết chương trình nhập vào một tháng bất kỳ (dương lịch),
sau đó in ra số ngày có trong tháng. -->

<?php
function inNgay($t)
{
    switch ($t) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            echo "Có 31 ngày";
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            echo "Có 30 ngày";
            break;
        case 2:
            echo "Có 28 ngày";
            break;
        default:
            echo "Vui lòng nhập lại!";
            break;
    }
}


inNgay(2);
