package main

import (
	"fmt"
	"math"
	"math/big"
)

// You are given an integer array nums.

// Return an integer that is the maximum distance between the indices of two (not necessarily different) prime numbers in nums.

// Example 1:

// Input: nums = [4,2,9,5,3]

// Output: 3

// Explanation: nums[1], nums[3], and nums[4] are prime. So the answer is |4 - 1| = 3.

// Example 2:

// Input: nums = [4,8,2,8]

// Output: 0

// Explanation: nums[2] is prime. Because there is just one prime number, the answer is |2 - 2| = 0.

// Constraints:

// 1 <= nums.length <= 3 * 105
// 1 <= nums[i] <= 100
// The input is generated such that the number of prime numbers in the nums is at least one.

func main() {
	// nums := []int{4, 2, 9, 5, 3}
	nums := []int{4, 8, 2, 8}
	fmt.Println(maximumPrimeDifference(nums))
}

func maximumPrimeDifference(nums []int) int {

	first_prime_index := -1
	var last_prime_index int

	is_prime_memo := make(map[int]bool)

	for index, num := range nums {

		if is_prime, ok := is_prime_memo[num]; ok {

			if is_prime == false {
				continue
			}
		}

		if is_prime_memo[num] || big.NewInt(int64(num)).ProbablyPrime(0) {
			is_prime_memo[num] = true
			if first_prime_index == -1 {
				first_prime_index = index
			}

			last_prime_index = index
		} else {
			is_prime_memo[num] = false
		}
	}

	return int(math.Abs(float64(last_prime_index)) - math.Abs(float64(first_prime_index)))
}
