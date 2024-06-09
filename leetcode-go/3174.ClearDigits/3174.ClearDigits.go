package main

import (
	"fmt"
	"strconv"
	"strings"
)

// You are given a string s.

// Your task is to remove all digits by doing this operation repeatedly:

// Delete the first digit and the closest non-digit character to its left.
// Return the resulting string after removing all digits.

// Example 1:

// Input: s = "abc"

// Output: "abc"

// Explanation:

// There is no digit in the string.

// Example 2:

// Input: s = "cb34"

// Output: ""

// Explanation:

// First, we apply the operation on s[2], and s becomes "c4".

// Then we apply the operation on s[1], and s becomes "".

// Constraints:

// 1 <= s.length <= 100
// s consists only of lowercase English letters and digits.
// The input is generated such that it is possible to delete all digits.

func main() {
	s := "abc"
	fmt.Println(clearDigits(s))
}

func clearDigits(s string) string {
	s_len := len(s) - 1
	s_parts := strings.Split(s, "")

	for index := range s_parts {
		if index == s_len {
			break
		}
		if strIsInt(s_parts[index+1]) {
			s_parts = RemoveIndex(s_parts, index + 1)
			s_parts = RemoveIndex(s_parts, index)
			
			return clearDigits(strings.Join(s_parts, ""))
		}
	}
	return strings.Join(s_parts, "")
}

func strIsInt(s_part string) bool {
	if _, err := strconv.Atoi(s_part); err == nil {
		return true
	}
	return false
}

func RemoveIndex(s []string, index int) []string {
	return append(s[:index], s[index+1:]...)
}
