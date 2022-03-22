$arr1 = array(1,2,3,4,6,8,9,10);
$arr2 = range(1,10);
$missing = array_diff($arr2, $arr1);
echo "Angka yang hilang : " . implode(', ', $missing);