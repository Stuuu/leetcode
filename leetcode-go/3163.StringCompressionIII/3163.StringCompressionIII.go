package main

import (
	"fmt"
	"strconv"
	"strings"
)

// Given a string word, compress it using the following algorithm:

// Begin with an empty string comp. While word is not empty, use the following operation:
// Remove a maximum length prefix of word made of a single character c repeating at most 9 times.
// Append the length of the prefix followed by c to comp.
// Return the string comp.

// Example 1:

// Input: word = "abcde"

// Output: "1a1b1c1d1e"

// Explanation:

// Initially, comp = "". Apply the operation 5 times, choosing "a", "b", "c", "d", and "e" as the prefix in each operation.

// For each prefix, append "1" followed by the character to comp.

// Example 2:

// Input: word = "aaaaaaaaaaaaaabb"

// Output: "9a5a2b"

// Explanation:

// Initially, comp = "". Apply the operation 3 times, choosing "aaaaaaaaa", "aaaaa", and "bb" as the prefix in each operation.

// For prefix "aaaaaaaaa", append "9" followed by "a" to comp.
// For prefix "aaaaa", append "5" followed by "a" to comp.
// For prefix "bb", append "2" followed by "b" to comp.

// Constraints:

// 1 <= word.length <= 2 * 105
// word consists only of lowercase English letters.

func main() {

	word := "aaaaaaaaaaaaaabb"

	fmt.Println(compressedString(word))

}

const MaxPrefix = 9

func compressedString(word string) string {
	
	var comp strings.Builder

	word_parts := strings.Split(word, "")
	if len(word_parts) == 1 {
		return "1" + word_parts[0]
	}
	part_count := 1
	last_part := ""
	for index, part := range word_parts {
		if index == 0 {
			last_part = part
			continue
		}
		if part == last_part {
			part_count++
		}
		if part_count == MaxPrefix {
			comp.WriteString(strconv.Itoa(MaxPrefix) + last_part)
			last_part = part
			part_count = 0
		}

		if part != last_part {
			if part_count != 0 {
				comp.WriteString(strconv.Itoa(part_count) + last_part)
			}
			last_part = part
			part_count = 1
		}

	}
	if part_count != 0 {
		comp.WriteString(strconv.Itoa(part_count) + last_part)
	}
	return comp.String()
}
