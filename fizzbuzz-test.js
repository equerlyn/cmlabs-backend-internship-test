 // Iterasi dari 1 hingga 100
for (let i = 1; i <= 100; i++) {
    // Cek apakah kelipatan 3 dan 5
    if (i % 3 === 0 && i % 5 === 0) {
        console.log("FizzBuzz");
    } else if (i % 3 === 0) { // Cek apakah kelipatan 3
        console.log("Fizz");
    } else if (i % 5 === 0) { // Cek apakah kelipatan 5
        console.log("Buzz");
    } else { // Bukan kelipatan 3 atau 5
        console.log(i);
    }
}