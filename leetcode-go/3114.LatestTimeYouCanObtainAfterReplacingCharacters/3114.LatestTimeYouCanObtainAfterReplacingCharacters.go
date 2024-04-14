package main

import (
	"fmt"
	"strings"
)

// You are given a string s representing a 12-hour format time where some of the digits (possibly none) are replaced with a "?".

// 12-hour times are formatted as "HH:MM", where HH is between 00 and 11, and MM is between 00 and 59. The earliest 12-hour time is 00:00, and the latest is 11:59.

// You have to replace all the "?" characters in s with digits such that the time we obtain by the resulting string is a valid 12-hour format time and is the latest possible.

// Return the resulting string.

// Example 1:

// Input: s = "1?:?4"

// Output: "11:54"

// Explanation: The latest 12-hour format time we can achieve by replacing "?" characters is "11:54".

// Example 2:

// Input: s = "0?:5?"

// Output: "09:59"

// Explanation: The latest 12-hour format time we can achieve by replacing "?" characters is "09:59".

// Constraints:

// s.length == 5
// s[2] is equal to the character ":".
// All characters except s[2] are digits or "?" characters.
// The input is generated such that there is at least one time between "00:00" and "11:59" that you can obtain after replacing the "?" characters.

func main() {

	// s := "1?:?4"

	// s := "0?:5?"
	// s := "?3:12"
	// s := "??:1?"
	s := "?0:40"

	fmt.Println(findLatestTime(s))

}

func findLatestTime(s string) string {

	latest_time := ""

	s_parts := strings.Split(s, "")

	for index, part := range s_parts {

		if part != "?" {
			latest_time += part
			continue
		}

		switch index {
		case 0:
			if s_parts[1] == "1" || s_parts[1] == "?" || s_parts[1] == "0" {
				latest_time += "1"
			} else {
				latest_time += "0"
			}
		case 1:
			if s_parts[0] == "0" {
				latest_time += "9"
			} else {
				latest_time += "1"
			}
		case 3:
			latest_time += "5"
		case 4:
			latest_time += "9"
		}

	}
	return latest_time
}
