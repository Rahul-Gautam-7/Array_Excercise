<?php
//14. Remove the email element from the associative array and display the updated array. 
$personal_detail = array(
    "name"=>"Rahul",
    "age"=>"23",
    "email"=>"rahulgautam7r@gmail.com");
unset($personal_detail["email"]);
print_r($personal_detail)
?>