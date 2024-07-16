<!-- Write a function to calculate the factorial of a number (a non-negative integer). -->
<?php
function factorial($n)
{
    if ($n == 0)
    {
        return 1;
    }
    else
    {
        return $n * factorial($n - 1);
    }
}
print_r(factorial(4) . "\n");
?>