<?php
$rate_per_unit = 100;
$subject1_units = 4;
$subject2_units = 19;
$subject3_units = 2;
$total_units = $subject1_units + $subject2_units + $subject3_units;
$total_tuition = $total_units * $rate_per_unit;

if ($total_tuition >= 5000) {
    $discount = 0.05;
} elseif ($total_tuition >= 8000) {      
    $discount =  0.10;
} elseif ($total_tuition >= 10000 ) {
    $discount =  0.15;
} else {
    $discount = 0;
}

$total_discount =  $discount * $total_tuition ;
$finaltotal = $total_tuition - $total_discount ; 

echo "Total units: $total_units <br>" ;
echo "Total Tuition: $total_tuition <br>" ;
echo "Discount Applied: $total_discount <br>" ;
echo "Final Tuition to Pay: $finaltotal <br>" ;
?>


