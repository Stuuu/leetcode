package main

import (
	"fmt"
	"strings"
)

// You are given a string allowed consisting of distinct characters and an array of strings words. A string is consistent if all characters in the string appear in the string allowed.

// Return the number of consistent strings in the array words.

// Example 1:

// Input: allowed = "ab", words = ["ad","bd","aaab","baa","badab"]
// Output: 2
// Explanation: Strings "aaab" and "baa" are consistent since they only contain characters 'a' and 'b'.
// Example 2:

// Input: allowed = "abc", words = ["a","b","c","ab","ac","bc","abc"]
// Output: 7
// Explanation: All strings are consistent.
// Example 3:

// Input: allowed = "cad", words = ["cc","acd","b","ba","bac","bad","ac","d"]
// Output: 4
// Explanation: Strings "cc", "acd", "ac", and "d" are consistent.

// Constraints:

// 1 <= words.length <= 104
// 1 <= allowed.length <= 26
// 1 <= words[i].length <= 10
// The characters in allowed are distinct.
// words[i] and allowed contain only lowercase English letters.

func main() {

	allowed := "abc"
	words := []string{"a","b","c","ab","ac","bc","abc"}

	fmt.Println(countConsistentStrings(allowed, words))
}

func countConsistentStrings(allowed string, words []string) int {

	allowed_parts := strings.Split(allowed, "")
	allowed_map := make(map[string]bool)

	for _, allowed_part := range allowed_parts {
		allowed_map[allowed_part] = true
	}

	con_count := 0
WORD_LOOP:
	for _, word := range words {
		word_parts := strings.Split(word, "")
		for _, word_char := range word_parts {
			_, ok := allowed_map[word_char]
			if !ok {
				continue WORD_LOOP
			}
		}
		con_count++
	}
	return con_count
}
