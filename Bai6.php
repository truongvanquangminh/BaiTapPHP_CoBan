<!-- Cho một chuỗi gồm nhiều số,
in ra số có tổng các chữ số chẵn lớn nhất trong chuỗi.
Ví dụ: $a  = “124,457,895”; kết quả : 895 vì tổng các
số chẵn trong chuỗi là 8. -->

<?php
// $a = "124,457";

// $b = explode(",", $a);
// for ($i = 0; $i < count($b); $i++) {
//     var_dump($b[$i])  . "<br>";
//     // for ($j = 0; $j < strlen($b[$i]); $j++) {
//     //     echo $b[$i][$j] . "\n";
//     // }
//     $max = $b[$i];
//     while ($b[$i] > 0) {
//         $x = $b[$i] % 10;
//         if ($x % 2 == 0) {
//             $max += $x;
//         }
//         $b[$i] /= 10;
//     }

//     $str = (string)$max;
// }
$str = "1248,457,895";

$array = explode(',', $str);
$max = 0;
$maxTotal = 0;

foreach ($array as $number) {
    $arrNumber = str_split($number, 1);
    $total = 0;

    foreach ($arrNumber as $x) {
        $numberParsed = (int)$x;
        if ($numberParsed % 2 == 0) {
            $total += $numberParsed;
        }
    }
    if ($total > $maxTotal) {
        $maxTotal = $total;
        $max = $number;
    }
}

echo "Tổng các số chẵn: " . $max;