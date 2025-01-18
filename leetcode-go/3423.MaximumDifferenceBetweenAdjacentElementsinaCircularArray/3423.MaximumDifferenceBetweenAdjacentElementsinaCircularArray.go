package main

import "fmt"

// Given a circular array nums, find the maximum absolute difference between adjacent elements.

// Note: In a circular array, the first and last elements are adjacent.

// Example 1:

// Input: nums = [1,2,4]

// Output: 3

// Explanation:

// Because nums is circular, nums[0] and nums[2] are adjacent. They have the maximum absolute difference of |4 - 1| = 3.

// Example 2:

// Input: nums = [-5,-10,-5]

// Output: 5

// Explanation:

// The adjacent elements nums[0] and nums[1] have the maximum absolute difference of |-5 - (-10)| = 5.

// Constraints:

// 2 <= nums.length <= 100
// -100 <= nums[i] <= 100

func main() {
	nums := []int{-5,-10,-5}
	fmt.Println(maxAdjacentDistance(nums))
}

func maxAdjacentDistance(nums []int) int {
	maxDist := getAbsDiff(nums[0], nums[len(nums)-1])
	for index, num := range nums {
		if index == 0 {
			continue
		}
		curDist := getAbsDiff(nums[index-1], num)
		if curDist > maxDist {
			maxDist = curDist
		}
	}
	return maxDist
}

func getAbsDiff(a, b int) int {
	if a < b {
		return b - a
	}
	return a - b
}
