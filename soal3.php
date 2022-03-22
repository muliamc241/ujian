<?php $arr1 = array(1, 3, 5, 6, 3, 2, 3, 8, 9, 10, 15, 13);
$arr2 = range(1,15);
$missing = array_diff($arr2, $arr1);
echo "Angka yang hilang : " . implode(', ', $missing);
?>