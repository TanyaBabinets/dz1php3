<?php
$number=5493256;
$digits=str_split($number);
$qty=count($digits);
$maxDigit=max($digits);
$minDigit=min($digits);
$sum=array_sum($digits);
$average=$sum/$qty;

echo "<h1>Number is: $number</h1>";
echo "<h2>Digits are: ". implode(',',$digits)."</h2>";
echo "<h3>Max number: $maxDigit</h3>";
echo "<h3>Min number: $minDigit</h3>";
echo "<h3>Sum : $sum</h3>";
echo "<h3>Average: ". number_format($average,2)."</h3>";
?>