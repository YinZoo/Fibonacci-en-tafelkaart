<?php
// Fibonacci sequence

// Prints the first $n numbers of the sequence
function fibonacci(int $n): void
{
    $a = 1;
    $b = 2;

    for ($i = 1; $i <= $n; $i++) {
        echo $a;

        // No comma after the last number
        if ($i < $n) {
            echo ", ";
        }

        // Calculate the next number
        $next = $a + $b;
        $a = $b;
        $b = $next;
    }

    echo "\n";
}

// Main program
$n = (int)readline("Enter a number: ");
fibonacci($n);
