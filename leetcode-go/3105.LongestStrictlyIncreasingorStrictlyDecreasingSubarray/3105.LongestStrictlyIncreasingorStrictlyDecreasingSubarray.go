package main

import "fmt"

// You are given an array of integers nums. Return the length of the longest
// subarray
//  of nums which is either
// strictly increasing
//  or
// strictly decreasing
// .

// Example 1:

// Input: nums = [1,4,3,3,2]

// Output: 2

// Explanation:

// The strictly increasing subarrays of nums are [1], [2], [3], [3], [4], and [1,4].

// The strictly decreasing subarrays of nums are [1], [2], [3], [3], [4], [3,2], and [4,3].

// Hence, we return 2.

// Example 2:

// Input: nums = [3,3,3,3]

// Output: 1

// Explanation:

// The strictly increasing subarrays of nums are [3], [3], [3], and [3].

// The strictly decreasing subarrays of nums are [3], [3], [3], and [3].

// Hence, we return 1.

// Example 3:

// Input: nums = [3,2,1]

// Output: 3

// Explanation:

// The strictly increasing subarrays of nums are [3], [2], and [1].

// The strictly decreasing subarrays of nums are [3], [2], [1], [3,2], [2,1], and [3,2,1].

// Hence, we return 3.

// Constraints:

// 1 <= nums.length <= 50
// 1 <= nums[i] <= 50

func main() {

	// nums := []int{1, 4, 3, 3, 2}
	nums := []int{3, 2, 1}

	// nums := []int{3, 3, 3, 3}
	// nums := []int{1, 1, 5}

	fmt.Println(longestMonotonicSubarray(nums))
}

func longestMonotonicSubarray(nums []int) int {

	longest_count := 1

	nums_len := len(nums) - 1

	cur_increase_counter := 1
	cur_decrease_counter := 1
	for index, cur_num := range nums {

		if index == nums_len {
			break
		}

		if cur_num > nums[index+1] {
			cur_increase_counter++
			if cur_increase_counter > longest_count {
				longest_count = cur_increase_counter
			}
		} else {
			cur_increase_counter = 1
		}

		if cur_num < nums[index+1] {
			cur_decrease_counter++
			if cur_decrease_counter > longest_count {
				longest_count = cur_decrease_counter
			}
		} else {
			cur_decrease_counter = 1
		}

	}

	if cur_decrease_counter > longest_count {
		longest_count = cur_decrease_counter
	}
	if cur_increase_counter > longest_count {
		longest_count = cur_increase_counter
	}

	return longest_count
}
