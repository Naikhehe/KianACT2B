<?php
$item = "Ballpen" ;
$quantity = 10 ;
$pricePeritem = 20 ;
$discountRate = 0.10 ;
$amountpaid= 300 ;

$totalBeforeDiscount = $quantity * $pricePeritem ;
$discountAmount = 
$totalBeforeDiscount * $discountRate ;
$totalAfterDiscount = $totalBeforeDiscount - $discountAmount ;
$change = $ampun - $totalAfterDiscound ;

echo "Purchase Summary <br>" ;
echo "----------- <br>" ;
echo "Item: $item <br>" ;
echo "Quantity: $quantity <br>" ;
echo "Price per item: ₱ $pricePeritem <br>" ;
echo "Total before discount: ₱ $totalBeforeDiscount <br>" ;
echo "Discount (10%): ₱ $discountAmount <br>" ;
echo "Total after discount: ₱ $totalAfterDiscount <br>" ;
echo "Amount paid: ₱ $amountPaid <br>" ;
echo "Change: ₱ $change <br>" ;
?>