package main

import (
	"fmt"
	"sort"
	"strings"
)

// Given an integer array hours representing times in hours, return an integer denoting the number of pairs i, j where i < j and hours[i] + hours[j] forms a complete day.

// A complete day is defined as a time duration that is an exact multiple of 24 hours.

// For example, 1 day is 24 hours, 2 days is 48 hours, 3 days is 72 hours, and so on.

// Example 1:

// Input: hours = [12,12,30,24,24]

// Output: 2

// Explanation:

// The pairs of indices that form a complete day are (0, 1) and (3, 4).

// Example 2:

// Input: hours = [72,48,24,3]

// Output: 3

// Explanation:

// The pairs of indices that form a complete day are (0, 1), (0, 2), and (1, 2).

// Constraints:

// 1 <= hours.length <= 100
// 1 <= hours[i] <= 109

func main() {

	hours := []int{24, 24, 24, 24}

	fmt.Println(countCompleteDayPairs(hours))
}
func countCompleteDayPairs(hours []int) int {

	complete_pairs := make(map[string][]int)

	for index_1, hour_1 := range hours {

		for index_2, hour_2 := range hours {
			if index_1 == index_2 {
				continue
			}

			if (hour_1+hour_2)%24 == 0 {
				index_slice := []int{
					index_1,
					index_2,
				}

				sort.Ints(index_slice)
				key := strings.Trim(strings.Join(strings.Fields(fmt.Sprint(index_slice)), ","), "[]")

				complete_pairs[key] = []int{index_1, index_2}
			}
		}
	}
	return len(complete_pairs)
}
