<?php

$result = 0;
$firstList = array(2, 4, 5);
$secondList = array(1, 2 ,5);

for ($i=0; $i<sizeof($firstList); $i++) {
    $result+=$firstList[$i]*$secondList[$i];
}
echo $result
?>
