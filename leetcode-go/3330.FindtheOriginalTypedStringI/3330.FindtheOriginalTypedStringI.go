package main

import (
	"fmt"
	"strconv"
)

// Alice is attempting to type a specific string on her computer. However, she tends to be clumsy and may press a key for too long, resulting in a character being typed multiple times.

// Although Alice tried to focus on her typing, she is aware that she may still have done this at most once.

// You are given a string word, which represents the final output displayed on Alice's screen.

// Return the total number of possible original strings that Alice might have intended to type.

// Example 1:

// Output: 5

// Explanation:

// The possible strings are: "abbcccc", "abbccc", "abbcc", "abbc", and "abcccc".

// Example 2:

// Input: word = "abcd"

// Output: 1

// Explanation:

// The only possible string is "abcd".

// Example 3:

// Input: word = "aaaa"

// Output: 4

// Constraints:

// 1 <= word.length <= 100
// word consists only of lowercase English letters.

func main() {

	word := "aaaa"

	fmt.Println(possibleStringCount(word))
}
func possibleStringCount(word string) int {

	getUniqueChars := make(map[string]int)
	lastChar := rune(word[0])
	letterGroupCount := 0
	for _, char := range word {
		if char != lastChar {
			letterGroupCount++
		}
		charAndLetterGroupCount := string(char) + "." + strconv.Itoa(letterGroupCount)
		getUniqueChars[charAndLetterGroupCount]++

		lastChar = char
	}

	// the original string is always possible so start the count at 1
	possibleStringCount := 1
	for _, count := range getUniqueChars {
		if count > 1 {
			possibleStringCount += (count - 1)
		}
	}
	return possibleStringCount
}
