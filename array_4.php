<?php
//4. Check if the color "Green" exists in the array from question 1. 
$favorite_colors = array('red', 'green', 'blue','yellow');
if(in_array("green",$favorite_colors)){
    echo "green color is present in the array";
}
else{
    echo "green color is not present in the array";
}

?>