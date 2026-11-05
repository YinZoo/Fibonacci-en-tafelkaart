<?php
// Multiplication table

// Prints a table from 1 to $n
function multiplicationTable(int $n): void
{
    // Header row
    echo "Table of";
    for ($i = 1; $i <= $n; $i++) {
        echo "\t" . $i;
    }
    echo "\n";

    // Outer loop = rows
    for ($row = 1; $row <= $n; $row++) {
        echo $row;

        // Inner loop = columns
        for ($col = 1; $col <= $n; $col++) {
            echo "\t" . ($row * $col);
        }

        echo "\n";
    }
}

// Main program
$n = (int)readline("Enter a number: ");
multiplicationTable($n);
