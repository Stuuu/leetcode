package main

import (
	"fmt"
)

// Alice and Bob are playing a game. Initially, Alice has a string word = "a".

// You are given a positive integer k.

// Now Bob will ask Alice to perform the following operation forever:

// Generate a new string by changing each character in word to its next character in the English alphabet, and append it to the original word.
// For example, performing the operation on "c" generates "cd" and performing the operation on "zb" generates "zbac".

// Return the value of the kth character in word, after enough operations have been done for word to have at least k characters.

// Note that the character 'z' can be changed to 'a' in the operation.

// Example 1:

// Input: k = 5

// Output: "b"

// Explanation:

// Initially, word = "a". We need to do the operation three times:

// Generated string is "b", word becomes "ab".
// Generated string is "bc", word becomes "abbc".
// Generated string is "bccd", word becomes "abbcbccd".
// Example 2:

// Input: k = 10

// Output: "c"

// Constraints:

// 1 <= k <= 500

func main() {

	k := 10

	fmt.Println(kthCharacter(k))
}

func kthCharacter(k int) byte {
	parts := []int{97}
	k = k - 1 // remove 1 since it's 0 indexed
	part_inc := 1
	for {
		for _, part := range parts {
			if part == 122 {
				part = 97
			} else {
				part = part + 1
			}
			parts = append(parts, part)
		}

		part_inc = part_inc * 2

		if part_inc > k {
			break
		}
	}

	return byte(parts[k])
}
