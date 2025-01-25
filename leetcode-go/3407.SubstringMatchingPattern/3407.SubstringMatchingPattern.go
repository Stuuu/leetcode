package main

import (
	"fmt"
	"strings"
)

// You are given a string s and a pattern string p, where p contains exactly one '*' character.

// The '*' in p can be replaced with any sequence of zero or more characters.

// Return true if p can be made a
// substring
//  of s, and false otherwise.

// Example 1:

// Input: s = "leetcode", p = "ee*e"

// Output: true

// Explanation:

// By replacing the '*' with "tcod", the substring "eetcode" matches the pattern.

// Example 2:

// Input: s = "car", p = "c*v"

// Output: false

// Explanation:

// There is no substring matching the pattern.

// Example 3:

// Input: s = "luck", p = "u*"

// Output: true

// Explanation:

// The substrings "u", "uc", and "uck" match the pattern.

// Constraints:

// 1 <= s.length <= 50
// 1 <= p.length <= 50
// s contains only lowercase English letters.
// p contains only lowercase English letters and exactly one '*'

func main() {

	s := "ckckkk"
	p := "ck*kc"
	// s := "luck"
	// p := "u*"

	fmt.Println(hasMatch(s, p))

}

func hasMatch(s string, p string) bool {
	if len(p) == 1 {
		return true
	}
	pParts := strings.Split(p, "*")
	partsToMatch := []string{}
	for _, part := range pParts {
		if part != "" {
			partsToMatch = append(partsToMatch, part)
		}
	}
	matchesNeeded := len(partsToMatch)
	sLenZeroIndexed := len(s)
	matchCount := 0
	nextChunkStartIndex := 0
partloop:
	for _, pPart := range partsToMatch {
		noMatched := false
		for i := nextChunkStartIndex; i <= sLenZeroIndexed; i++ {
			chunkIndexEnd := i + len(pPart)
			if chunkIndexEnd > sLenZeroIndexed {
				break
			}
			curChunk := s[i:chunkIndexEnd]
			if curChunk == pPart {
				nextChunkStartIndex = chunkIndexEnd
				matchCount++
				noMatched = true
				if matchCount == matchesNeeded {
					return true
				}
				continue partloop
			}
		}
		if noMatched == false {
			return false
		}
	}
	return false
}
