package main

import "fmt"

// You are given a 2D string array responses where each responses[i] is an array of strings representing survey responses from the ith day.

// Return the most common response across all days after removing duplicate responses within each responses[i]. If there is a tie, return the lexicographically smallest response.

// Example 1:

// Input: responses = [["good","ok","good","ok"],["ok","bad","good","ok","ok"],["good"],["bad"]]

// Output: "good"

// Explanation:

// After removing duplicates within each list, responses = [["good", "ok"], ["ok", "bad", "good"], ["good"], ["bad"]].
// "good" appears 3 times, "ok" appears 2 times, and "bad" appears 2 times.
// Return "good" because it has the highest frequency.
// Example 2:

// Input: responses = [["good","ok","good"],["ok","bad"],["bad","notsure"],["great","good"]]

// Output: "bad"

// Explanation:

// After removing duplicates within each list we have responses = [["good", "ok"], ["ok", "bad"], ["bad", "notsure"], ["great", "good"]].
// "bad", "good", and "ok" each occur 2 times.
// The output is "bad" because it is the lexicographically smallest amongst the words with the highest frequency.

// Constraints:

// 1 <= responses.length <= 1000
// 1 <= responses[i].length <= 1000
// 1 <= responses[i][j].length <= 10
// responses[i][j] consists of only lowercase English letters

func main() {

	responses := [][]string{{"good", "ok", "good", "ok"}, {"ok", "bad", "good", "ok", "ok"}, {"good"}, {"bad"}}
	// responses := [][]string{{"good", "ok", "good"}, {"ok", "bad"}, {"bad", "notsure"}, {"great", "good"}}

	fmt.Println(findCommonResponse(responses))
}

func findCommonResponse(responses [][]string) string {

	responseTally := make(map[string]int)

	for _, respGroup := range responses {
		uniqueRespForGroup := make(map[string]bool)
		for _, response := range respGroup {

			if uniqueRespForGroup[response] {
				continue
			}
			uniqueRespForGroup[response] = true
		}

		for uniqueResp := range uniqueRespForGroup {
			responseTally[uniqueResp]++
		}
		uniqueRespForGroup = make(map[string]bool)
	}

	max := 0
	// Find max votes
	for _, tally := range responseTally {
		if tally >= max {
			max = tally
		}
	}

	// remove any response tally that is not max
	for word, tally := range responseTally {
		if tally < max {
			delete(responseTally, word)
		}
	}
	smallestWord := ""
	// find lexicographical smallest
	for word := range responseTally {

		if smallestWord == "" {
			smallestWord = word
			continue
		}

		if word < smallestWord {
			smallestWord = word
		}
	}
	return smallestWord
}
