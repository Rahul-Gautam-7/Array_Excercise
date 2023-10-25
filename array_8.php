<?php
//8. Remove a specific number of your choice from the array and display the updated array. 
$numbers=array(5,4,6,2,7);
print_r($numbers);
unset($numbers[1]);
print_r($numbers);
?>