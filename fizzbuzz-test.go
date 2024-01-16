package main
import "fmt"

func main() {
    // Iterasi dari 1 hingga 100
    for i := 1; i <= 100; i++ {
        // Cek apakah kelipatan 3 dan 5
        if i%3 == 0 && i%5 == 0 {
            fmt.Println("FizzBuzz")
        } else if i%3 == 0 { // Cek apakah kelipatan 3
            fmt.Println("Fizz")
        } else if i%5 == 0 { // Cek apakah kelipatan 5
            fmt.Println("Buzz")
        } else { // Jika bukan kelipatan 3 atau 5, cetak angka
            fmt.Println(i)
        }
    }
}