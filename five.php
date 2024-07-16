

<?php 
    // define array 
    $a = array(1, 5, 2, 5, 1, 3, 2, 4, 5); 
      
    // print original array 
    echo "Original Array : \n"; 
    print_r($a); 
     
    // remove duplicate values by using  
    // flipping keys and values 
    $a = array_flip($a); 
   
    // restore the array elements by again  
    // flipping keys and values. 
    $a = array_flip($a); 
  
    // re-order the array keys 
    $a= array_values($a); 
  
    // print updated array 
    echo "\nUpdated Array : \n "; 
    print_r($a); 
?> 
<?php
echo '<hr>';
$colors = array( 
  0 => 'Red', 
  1 => 'Green', 
  2 => 'White', 
  3 => 'Black', 
  4 => 'Red', 
); 

$numbers = array( 
  0 => 100, 
  1 => 200, 
  2 => 100, 
  3 => -10, 
  4 => -10, 
  5 => 0, 
); 
$uniq_colors = array_keys(array_flip($colors)); 
$uniq_numbers = array_keys(array_flip($numbers)); 
print_r($uniq_colors);
print_r($uniq_numbers);
?>