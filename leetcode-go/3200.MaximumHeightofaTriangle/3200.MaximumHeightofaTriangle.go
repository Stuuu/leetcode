package main

import (
	"fmt"
	"strings"
)

// You are given two integers red and blue representing the count of red and blue colored balls. You have to arrange these balls to form a triangle such that the 1st row will have 1 ball, the 2nd row will have 2 balls, the 3rd row will have 3 balls, and so on.

// All the balls in a particular row should be the same color, and adjacent rows should have different colors.

// Return the maximum height of the triangle that can be achieved.

// Example 1:

// Input: red = 2, blue = 4

// Output: 3

// Explanation:

// The only possible arrangement is shown above.

// Example 2:

// Input: red = 2, blue = 1

// Output: 2

// Explanation:

// The only possible arrangement is shown above.

// Example 3:

// Input: red = 1, blue = 1

// Output: 1

// Example 4:

// Input: red = 10, blue = 1

// Output: 2

// Explanation:

// The only possible arrangement is shown above.

// Constraints:

// 1 <= red, blue <= 100

func main() {

	red := 1
	blue := 1

	fmt.Println(maxHeightOfTriangle(red, blue))
}

func maxHeightOfTriangle(red int, blue int) int {

	red_first_height := triangleMaxHeight(red, blue)
	blue_first_height := triangleMaxHeight(blue, red)

	if blue_first_height > red_first_height {
		return blue_first_height
	}

	return red_first_height
}

func triangleMaxHeight(color1, color2 int) int {
	lvl := 1
	triangle_height := 0
	for {
		if lvlIsOdd(lvl) {
			if color1 < lvl {
				break
			}
			color1 -= lvl
			fmt.Println(strings.Repeat("R", lvl))
		} else {
			if color2 < lvl {
				break
			}
			color2 -= lvl
			fmt.Println(strings.Repeat("B", lvl))
		}

		if color2 < 0 {
			fmt.Println("color2 out", color2)
			break
		}
		if color1 < 0 {
			fmt.Println("color1 out", color2)
			break
		}
		lvl++
		triangle_height++
	}
	return triangle_height
}

func lvlIsOdd(lvl int) bool {
	return lvl%2 != 0
}
