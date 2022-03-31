<!-- Nhập số nguyên n. Kiểm tra từ 0 đến n có bao nhiêu số chẵn. -->

<?php
$n = 2;
$c = 0;
for ($i = 0; $i <= $n; $i++) {
    if($i % 2 == 0) {
        $c +=1;
    }
}
echo $c;
