<?php
 
function checkOddEven($number) {
     
    if ($number % 2 == 0) {
        echo "$number is Even.";
    } else {
        echo "$number is Odd.";
    }
}

 
$number = 7;  

 
checkOddEven($number);
?>
