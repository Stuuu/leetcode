package main

import (
	"fmt"
	"sort"
)

// Given an integer array nums that does not contain any zeros, find the largest positive integer k such that -k also exists in the array.

// Return the positive integer k. If there is no such integer, return -1.

// Example 1:

// Input: nums = [-1,2,-3,3]
// Output: 3
// Explanation: 3 is the only valid k we can find in the array.
// Example 2:

// Input: nums = [-1,10,6,7,-7,1]
// Output: 7
// Explanation: Both 1 and 7 have their corresponding negative values in the array. 7 has a larger value.
// Example 3:

// Input: nums = [-10,8,6,7,-2,-3]
// Output: -1
// Explanation: There is no a single valid k, we return -1.

// Constraints:

// 1 <= nums.length <= 1000
// -1000 <= nums[i] <= 1000
// nums[i] != 0

func main() {

	nums := []int{-1, 2, -3, 3}

	fmt.Println(findMaxK(nums))
}

func findMaxK(nums []int) int {
	max_k := -1

	nums_lookup_map := make(map[int]bool)

	for _, num := range nums {
		nums_lookup_map[num] = true
	}
	sort.Sort(sort.Reverse(sort.IntSlice(nums)))

	for _, num := range nums {
		if num < 1 {
			break
		}
		negative_num := (num - (num * 2))
		if nums_lookup_map[negative_num] {
			return num
		}
	}

	return max_k
}
