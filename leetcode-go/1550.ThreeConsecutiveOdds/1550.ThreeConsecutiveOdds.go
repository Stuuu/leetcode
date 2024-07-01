package main

import "fmt"

// Given an integer array arr, return true if there are three consecutive odd numbers in the array. Otherwise, return false.

// Example 1:

// Input: arr = [2,6,4,1]
// Output: false
// Explanation: There are no three consecutive odds.
// Example 2:

// Input: arr = [1,2,34,3,4,5,7,23,12]
// Output: true
// Explanation: [5,7,23] are three consecutive odds.

// Constraints:

// 1 <= arr.length <= 1000
// 1 <= arr[i] <= 1000

func main() {

	arr := []int{1,2,34,3,4,5,7,23,12}
	// arr := []int{2, 6, 4, 1}
	fmt.Println(threeConsecutiveOdds(arr))
}

func threeConsecutiveOdds(arr []int) bool {
	
	if len(arr) < 3 {
        return false
    }

	consec_count := 0
	for _, num := range arr {

		if num%2 != 0 {
			consec_count++
		} else {
			consec_count = 0
		}

		if consec_count > 2 {
			return true
		}
	}
	return false
}
