<!-- Cho một chuỗi gồm nhiều số,
in ra số có tổng các chữ số chẵn lớn nhất trong chuỗi.
Ví dụ: $a  = “124,457,895”; kết quả : 895 vì tổng các
số chẵn trong chuỗi là 8. -->

<?php
$a = "124,457";

$b = explode(",", $a);
for ($i = 0; $i < count($b); $i++) {
    // echo $b[$i] . "<br>";
    $max = $b[0];
    while ($b[$i] > 0) {
        $x = $b[$i] % 10;
        if ($x % 2 == 0) {
            $max += $x;
        }
        $b[$i] /= 10;
    }
    // for ($j = 0; $j < strlen($str); $j++) {
    // }
    $str = (string)$max;
}


var_dump($str);