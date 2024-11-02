package main

import (
	"fmt"
)

// Given a string s consisting of words and spaces, return the length of the last word in the string.

// A word is a maximal
// substring
//  consisting of non-space characters only.

// Example 1:

// Input: s = "Hello World"
// Output: 5
// Explanation: The last word is "World" with length 5.
// Example 2:

// Input: s = "   fly me   to   the moon "
// Output: 4
// Explanation: The last word is "moon" with length 4.
// Example 3:

// Input: s = "luffy is still joyboy"
// Output: 6
// Explanation: The last word is "joyboy" with length 6.

// Constraints:

// 1 <= s.length <= 104
// s consists of only English letters and spaces ' '.
// There will be at least one word in s.

func main() {
	s := "luffy is still joyboy "
	fmt.Println(lengthOfLastWord(s))
}

func lengthOfLastWord(s string) int {
	cur_len_count := 0
	last_len_count := 0
	for _, char := range s {
		if char != 32 {
			cur_len_count++
			last_len_count = cur_len_count
			continue
		}
		cur_len_count = 0
	}
	return last_len_count
}

// func lengthOfLastWord(s string) int {
// 	s_parts := strings.Split(s, " ")
// 	last_part_len := 0
// 	for _, part := range s_parts {
// 		part_len := len(part)
// 		if len(part) > 0 {
// 			last_part_len = part_len
// 		}
// 	}
// 	return last_part_len
// }
