package main

import (
	"fmt"
)

// You are given a string word. A letter c is called special if it appears both in lowercase and uppercase in word, and every lowercase occurrence of c appears before the first uppercase occurrence of c.

// Return the number of special letters in word.

// Example 1:

// Input: word = "aaAbcBC"

// Output: 3

// Explanation:

// The special characters are 'a', 'b', and 'c'.

// Example 2:

// Input: word = "abc"

// Output: 0

// Explanation:

// There are no special characters in word.

// Example 3:

// Input: word = "AbBCab"

// Output: 0

// Explanation:

// There are no special characters in word.

// Constraints:

// 1 <= word.length <= 2 * 105
// word consists of only lowercase and uppercase English letters.

func main() {
	// word := "abc"
	word := "AbBCab"
	// word := "aaAbcBC"

	fmt.Println(numberOfSpecialChars(word))
}

func numberOfSpecialChars(word string) int {

	w_parts := []byte(word)
	spesh_map := make(map[int]int)

	for location, ascii_val := range w_parts {
		ascii_int := int(ascii_val)

		// store max lowercase location key'd by char ascii val
		if ascii_int > 90 {
			spesh_map[ascii_int] = location
			continue
		}

		// for uppercase letters just store the first location
		if _, ok := spesh_map[ascii_int]; !ok {
			spesh_map[ascii_int] = location
		}
	}

	spesh_count := 0
	for as_val, _ := range spesh_map {
		if as_val < 90 {
			continue
		}
		if _, ok := spesh_map[as_val-32]; ok {
			if spesh_map[as_val] < spesh_map[as_val-32] {
				spesh_count++
			}
		}
	}
	return spesh_count
}
