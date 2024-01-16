<?php
    // Iterasi dari 1 hingga 100
    for ($i = 1; $i <= 100; $i++) {
        // Cek apakah kelipatan 3 dan 5
        if ($i % 3 === 0 && $i % 5 === 0) {
            echo "FizzBuzz\n";
        }
        // Cek apakah kelipatan 3
        elseif ($i % 3 === 0) {
            echo "Fizz\n";
        }
        // Cek apakah kelipatan 5
        elseif ($i % 5 === 0) {
            echo "Buzz\n";
        }
        // Jika bukan kelipatan 3 atau 5, cetak angka
        else {
            echo $i . "\n";
        }
    }
?>