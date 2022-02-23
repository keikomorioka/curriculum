<?php
$fruit = ["りんご" => calculate(150, 2), "みかん" => calculate(150, 1), "もも" => calculate(300, 10)];
function calculate($value, $number) {
    $sum = $value * $number;
    return $sum;
}
foreach ($fruit as $key => $value) {
    echo $key."は".$value."円です。";
    echo '<br>';
}

?>