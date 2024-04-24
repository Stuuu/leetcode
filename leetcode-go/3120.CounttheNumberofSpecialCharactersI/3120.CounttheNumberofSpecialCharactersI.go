package main

import "fmt"

// You are given a string word. A letter is called special if it appears both in lowercase and uppercase in word.

// Return the number of special letters in word.

// Example 1:

// Input: word = "aaAbcBC"

// Output: 3

// Explanation:

// The special characters in word are 'a', 'b', and 'c'.

// Example 2:

// Input: word = "abc"

// Output: 0

// Explanation:

// No character in word appears in uppercase.

// Example 3:

// Input: word = "abBCab"

// Output: 1

// Explanation:

// The only special character in word is 'b'.

// Constraints:

// 1 <= word.length <= 50
// word consists of only lowercase and uppercase English letters.

func main() {
	word := "aaAbcBC"

	fmt.Println(numberOfSpecialChars(word))
}

func numberOfSpecialChars(word string) int {

	w_parts := []byte(word)
	spesh_map := make(map[int]int)

	for _, ascii_val := range w_parts {
		spesh_map[int(ascii_val)] = 1
	}

	spesh_count := 0
	for as_val, _ := range spesh_map {
		if as_val > 90 {
			continue
		}
		if spesh_map[as_val+32] == 1 {
			spesh_count++
		}
	}
	return spesh_count
}
