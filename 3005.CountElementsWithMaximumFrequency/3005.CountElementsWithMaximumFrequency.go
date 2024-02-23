package main

import (
	"fmt"
	"sort"
)

// You are given an array nums consisting of positive integers.

// Return the total frequencies of elements in nums such that those elements all have the maximum frequency.

// The frequency of an element is the number of occurrences of that element in the array.

// Example 1:

// Input: nums = [1,2,2,3,1,4]
// Output: 4
// Explanation: The elements 1 and 2 have a frequency of 2 which is the maximum frequency in the array.
// So the number of elements in the array with maximum frequency is 4.
// Example 2:

// Input: nums = [1,2,3,4,5]
// Output: 5
// Explanation: All elements of the array have a frequency of 1 which is the maximum.
// So the number of elements in the array with maximum frequency is 5.

// Constraints:

// 1 <= nums.length <= 100
// 1 <= nums[i] <= 100

func main() {
	nums := []int{1, 2, 3, 4, 5}

	fmt.Println(maxFrequencyElements(nums))
}

func maxFrequencyElements(nums []int) int {

	num_frequency := make(map[int]int)

	for _, num := range nums {

		num_frequency[num]++

	}

	type kv struct {
		Key   int
		Value int
	}

	var ss []kv
	for k, v := range num_frequency {
		ss = append(ss, kv{k, v})
	}

	// Then sorting the slice by value, higher first.
	sort.Slice(ss, func(i, j int) bool {
		return ss[i].Value > ss[j].Value
	})

	max_freq_sums := 0
	top_sum := ss[0].Value
	for _, frequency := range ss {

		if frequency.Value != top_sum {
			break
		}
		max_freq_sums += frequency.Value
	}

	return max_freq_sums

}
