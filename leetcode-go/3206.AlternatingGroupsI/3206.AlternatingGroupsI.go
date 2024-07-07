package main

import "fmt"

// There is a circle of red and blue tiles. You are given an array of integers colors. The color of tile i is represented by colors[i]:

// colors[i] == 0 means that tile i is red.
// colors[i] == 1 means that tile i is blue.
// Every 3 contiguous tiles in the circle with alternating colors (the middle tile has a different color from its left and right tiles) is called an alternating group.

// Return the number of alternating groups.

// Note that since colors represents a circle, the first and the last tiles are considered to be next to each other.

// Example 1:

// Input: colors = [1,1,1]

// Output: 0

// Explanation:

// Example 2:

// Input: colors = [0,1,0,0,1]

// Output: 3

// Explanation:

// Alternating groups:

// Constraints:

// 3 <= colors.length <= 100
// 0 <= colors[i] <= 1
func main() {

	colors := []int{0, 1, 0, 0, 1}

	fmt.Println(numberOfAlternatingGroups(colors))
}

func numberOfAlternatingGroups(colors []int) int {
	num_groups := 0
	num_colors := len(colors) - 1
	for i := range colors {
		one := i
		two := i + 1
		three := i + 2
		// second to last index means three is 0
		if i == num_colors-1 {
			three = 0
		}
		// last index means two is 0 and three is 1
		if i == num_colors {
			two = 0
			three = 1
		}

		if isAltSeq(colors[one], colors[two], colors[three]) {
			num_groups++
		}
	}
	return num_groups
}

func isAltSeq(one, two, three int) bool {
	return one == three && two != three
}
