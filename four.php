<!-- Write a PHP script to remove all white spaces in an array. -->

<?php
function removeWhiteSpaces($string) {
    // Using str_replace() function to removes all whitespaces
    return str_replace(' ', '', $string);
}

$array = ["hi", "   every  ", " body ", "remove  "];
$resultArray = [];
foreach ($array as $item) {
    $resultArray[] = removeWhiteSpaces($item);
}print_r($resultArray);

?>