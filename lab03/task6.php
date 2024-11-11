<?php
 
function searchElement($array, $element) {
     
    foreach ($array as $item) {
        if ($item == $element) {
             
            echo "Element '$element' found in the array.";
            return;
        }
    }
    
    echo "Element '$element' not found in the array.";
}

 
$array = [10, 20, 30, 40, 50, 60, 70];

 
$elementToSearch = 40; 

 
searchElement($array, $elementToSearch);
?>
