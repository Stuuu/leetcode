package main

import (
	"fmt"
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

	s := "abcba"

	fmt.Println(isSubstringPresent(s))
}

func isSubstringPresent(s string) bool {

	s_reversed := reverse(s)

	s_parts := strings.Split(s, ``)
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

func reverse(s string) string {
	rns := []rune(s) // convert to rune
	for i, j := 0, len(rns)-1; i < j; i, j = i+1, j-1 {

		// swap the letters of the string,
		// like first with last and so on.
		rns[i], rns[j] = rns[j], rns[i]
	}

	// return the reversed string.
	return string(rns)
}
