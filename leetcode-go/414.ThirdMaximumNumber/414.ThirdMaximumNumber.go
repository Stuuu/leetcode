package main

import (
	"fmt"
	"slices"
	"sort"
)

// Given an integer array nums, return the third distinct maximum number in this array. If the third maximum does not exist, return the maximum number.

// Example 1:

// Input: nums = [3,2,1]
// Output: 1
// Explanation:
// The first distinct maximum is 3.
// The second distinct maximum is 2.
// The third distinct maximum is 1.
// Example 2:

// Input: nums = [1,2]
// Output: 2
// Explanation:
// The first distinct maximum is 2.
// The second distinct maximum is 1.
// The third distinct maximum does not exist, so the maximum (2) is returned instead.
// Example 3:

// Input: nums = [2,2,3,1]
// Output: 1
// Explanation:
// The first distinct maximum is 3.
// The second distinct maximum is 2 (both 2's are counted together since they have the same value).
// The third distinct maximum is 1.

// Constraints:

// 1 <= nums.length <= 104
// -231 <= nums[i] <= 231 - 1

func main() {

	nums := []int{2, 2, 3, 1}
	// nums := []int{1, 2}

	// nums := []int{3, 2, 1}
	// nums := []int{5, 2, 2}
	// nums := []int{1, 2, 2, 5, 3, 5}

	fmt.Println(thirdMax(nums))

}
func thirdMax(nums []int) int {

	uni_map := make(map[int]int)
	for _, num := range nums {
		uni_map[num] = num
	}

	uni_slice := []int{}

	for _, uni_num := range uni_map {
		uni_slice = append(uni_slice, uni_num)
	}

	sort.Sort(sort.Reverse(sort.IntSlice(uni_slice)))

	if len(uni_slice) >= 3 {
		return uni_slice[2]
	}

	return slices.Max(uni_slice)
}
