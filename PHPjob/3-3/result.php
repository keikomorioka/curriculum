<?php
$number = $_GET['number'];
$arr_number = str_split($number);
$r_number = $arr_number[array_rand($arr_number)];
?>

<p><?php echo date("Y/m/d", time()); ?>の運勢は</p>
<p>選ばれた数字は<?php echo $r_number; ?></p>
<p><?php if ($r_number == 0) {
    echo "凶";
} elseif ($r_number <= 3) {
    echo "小吉";
} elseif ($r_number <= 6) {
    echo "中吉";
} elseif ($r_number <= 8) {
    echo "吉";
} else {
    echo "大吉";
} ?></p>
