package main

import "fmt"

// You are given a m x n matrix grid consisting of non-negative integers.

// In one operation, you can increment the value of any grid[i][j] by 1.

// Return the minimum number of operations needed to make all columns of grid strictly increasing.

// Example 1:

// Input: grid = [[3,2],[1,3],[3,4],[0,1]]

// Output: 15

// Explanation:

// To make the 0th column strictly increasing, we can apply 3 operations on grid[1][0], 2 operations on grid[2][0], and 6 operations on grid[3][0].
// To make the 1st column strictly increasing, we can apply 4 operations on grid[3][1].

// Example 2:

// Input: grid = [[3,2,1],[2,1,0],[1,2,3]]

// Output: 12

// Explanation:

// To make the 0th column strictly increasing, we can apply 2 operations on grid[1][0], and 4 operations on grid[2][0].
// To make the 1st column strictly increasing, we can apply 2 operations on grid[1][1], and 2 operations on grid[2][1].
// To make the 2nd column strictly increasing, we can apply 2 operations on grid[1][2].

// Constraints:

// m == grid.length
// n == grid[i].length
// 1 <= m, n <= 50
// 0 <= grid[i][j] < 2500

func main() {
	// grid := [][]int{{3, 2}, {1, 3}, {3, 4}, {0, 1}}
	grid := [][]int{{3, 2, 1}, {2, 1, 0}, {1, 2, 3}}
	//
	fmt.Println(minimumOperations(grid))
}

func minimumOperations(grid [][]int) int {
	opCount := 0
	RowsInGrid := len(grid)
	ColsInGrid := len(grid[0]) - 1
	for rowNum := 0; rowNum <= RowsInGrid; rowNum++ {
		nextRowNumb := rowNum + 1
		if nextRowNumb >= RowsInGrid {
			break
		}
		for colNum := 0; colNum <= ColsInGrid; colNum++ {
			if grid[rowNum][colNum] >= grid[nextRowNumb][colNum] {
				originalNextNum := grid[nextRowNumb][colNum]
				grid[nextRowNumb][colNum] = grid[rowNum][colNum] + 1
				NumDiff := grid[nextRowNumb][colNum] - originalNextNum
				opCount += NumDiff
			}
		}
	}
	return opCount
}
