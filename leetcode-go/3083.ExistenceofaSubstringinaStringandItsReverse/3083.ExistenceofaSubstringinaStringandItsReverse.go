package main

import (
	"fmt"
	"slices"
	"strings"
)

// Given a string s, find any
// substring
//  of length 2 which is also present in the reverse of s.

// Return true if such a substring exists, and false otherwise.

// Example 1:

// Input: s = "leetcode"

// Output: true

// Explanation: Substring "ee" is of length 2 which is also present in reverse(s) == "edocteel".

// Example 2:

// Input: s = "abcba"

// Output: true

// Explanation: All of the substrings of length 2 "ab", "bc", "cb", "ba" are also present in reverse(s) == "abcba".

// Example 3:

// Input: s = "abcd"

// Output: false

// Explanation: There is no substring of length 2 in s, which is also present in the reverse of s.

// Constraints:

// 1 <= s.length <= 100
// s consists only of lowercase English letters.

func main() {

	// s := "leetcode"

	// s := "abcd"

	s := "abcba"

	fmt.Println(isSubstringPresent(s))
}

func isSubstringPresent(s string) bool {
	s_parts := strings.Split(s, ``)

	s_reversed := reverse(s_parts)

	s_len := len(s_parts)
	for index, char := range s_parts {
		if index == s_len-1 {
			return false
		}
		if strings.Contains(s_reversed, char+s_parts[index+1]) {
			return true
		}
	}
	return false
}

func reverse(s_parts []string) string {

	s_parts_reversed := append([]string(nil), s_parts...)
	slices.Reverse(s_parts_reversed)

	return strings.Join(s_parts_reversed, "")
}
