package main

import (
	"fmt"
	"strconv"
	"strings"
)

// You are given a string num consisting of only digits. A string of digits is called balanced if the sum of the digits at even indices is equal to the sum of digits at odd indices.

// Return true if num is balanced, otherwise return false.

// Example 1:

// Input: num = "1234"

// Output: false

// Explanation:

// The sum of digits at even indices is 1 + 3 == 4, and the sum of digits at odd indices is 2 + 4 == 6.
// Since 4 is not equal to 6, num is not balanced.
// Example 2:

// Input: num = "24123"

// Output: true

// Explanation:

// The sum of digits at even indices is 2 + 1 + 3 == 6, and the sum of digits at odd indices is 4 + 2 == 6.
// Since both are equal the num is balanced.

// Constraints:

// 2 <= num.length <= 100
// num consists of digits only

func main() {
	num := "1234"
	fmt.Println(isBalanced(num))
}

func isBalanced(num string) bool {
	numParts := strings.Split(num, "")
	even := 0
	odd := 0
	for index, num := range numParts {
		num_as_int, _ := strconv.Atoi(num)
		if index % 2 == 0 {
			even += num_as_int 
			continue
		}
		odd += num_as_int
	}
	
	return even == odd
}
