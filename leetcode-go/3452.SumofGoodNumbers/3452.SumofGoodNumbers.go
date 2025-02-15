package main

import "fmt"

// Given an array of integers nums and an integer k, an element nums[i] is considered good if it is strictly greater than the elements at indices i - k and i + k (if those indices exist). If neither of these indices exists, nums[i] is still considered good.

// Return the sum of all the good elements in the array.

// Example 1:

// Input: nums = [1,3,2,1,5,4], k = 2

// Output: 12

// Explanation:

// The good numbers are nums[1] = 3, nums[4] = 5, and nums[5] = 4 because they are strictly greater than the numbers at indices i - k and i + k.

// Example 2:

// Input: nums = [2,1], k = 1

// Output: 2

// Explanation:

// The only good number is nums[0] = 2 because it is strictly greater than nums[1].

// Constraints:

// 2 <= nums.length <= 100
// 1 <= nums[i] <= 1000
// 1 <= k <= floor(nums.length / 2)

func main() {

	nums := []int{1, 3, 2, 1, 5, 4}
	k := 2

	fmt.Println(sumOfGoodNumbers(nums, k))
}

func sumOfGoodNumbers(nums []int, k int) int {
	goodSum := 0
	numsLen := len(nums)

	for i, num := range nums {
		if (i - k) >= 0 { // ok to check left
			//  is strictly greater than the elements indices i - k
			if !(num > nums[i-k]) {
				continue
			}
		}
		if (i + k) < numsLen { // ok to check right
			if !(num > nums[i+k]) {
				continue
			}
		}
		goodSum += num
	}

	return goodSum
}
