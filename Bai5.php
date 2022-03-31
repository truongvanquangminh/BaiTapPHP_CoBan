<!-- Cho một chuỗi gồm nhiều số, tìm số bé nhất trong chuỗi. -->
<?php

$string = '2461';
$n = str_split($string);
$min = null;
for ($i = 0; $i < count($n); $i++) {
    if ($min == null) {
        $min = $string[0];
    } else {
        if ($n[$i] < $min) {
            $min = $n[$i];
        }
    }
}
echo "Số nhỏ nhất là: " . $min;
