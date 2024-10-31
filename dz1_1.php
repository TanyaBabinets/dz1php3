<?php
$numbers=[];
for($i=0;$i<100;$i++){
    $numbers[]=rand(1,500);
}
echo implode("  ", $numbers) ."<br>";
echo "Maximum Number:". $maxNumber=max($numbers) ."<br>";
echo "Minimum Number:". $minNUmber=min($numbers);
?>