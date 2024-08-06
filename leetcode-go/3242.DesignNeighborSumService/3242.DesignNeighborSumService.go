package main

import "fmt"

// You are given a n x n 2D array grid containing distinct elements in the range [0, n2 - 1].

// Implement the neighborSum class:

// neighborSum(int [][]grid) initializes the object.
// int adjacentSum(int value) returns the sum of elements which are adjacent neighbors of value, that is either to the top, left, right, or bottom of value in grid.
// int diagonalSum(int value) returns the sum of elements which are diagonal neighbors of value, that is either to the top-left, top-right, bottom-left, or bottom-right of value in grid.

// Example 1:

// Input:

// ["neighborSum", "adjacentSum", "adjacentSum", "diagonalSum", "diagonalSum"]

// [[[[0, 1, 2], [3, 4, 5], [6, 7, 8]]], [1], [4], [4], [8]]

// Output: [null, 6, 16, 16, 4]

// Explanation:

// The adjacent neighbors of 1 are 0, 2, and 4.
// The adjacent neighbors of 4 are 1, 3, 5, and 7.
// The diagonal neighbors of 4 are 0, 2, 6, and 8.
// The diagonal neighbor of 8 is 4.
// Example 2:

// Input:

// ["neighborSum", "adjacentSum", "diagonalSum"]

// [[[[1, 2, 0, 3], [4, 7, 15, 6], [8, 9, 10, 11], [12, 13, 14, 5]]], [15], [9]]

// Output: [null, 23, 45]

// Explanation:

// The adjacent neighbors of 15 are 0, 10, 7, and 6.
// The diagonal neighbors of 9 are 4, 12, 14, and 15.

// Constraints:

// 3 <= n == grid.length == grid[0].length <= 10
// 0 <= grid[i][j] <= n2 - 1
// All grid[i][j] are distinct.
// value in adjacentSum and diagonalSum will be in the range [0, n2 - 1].
// At most 2 * n2 calls will be made to adjacentSum and diagonalSum.

type neighborSum struct {
	num_lookup map[int][]int
	grid       [][]int
	grid_len   int
}

func Constructor(grid [][]int) neighborSum {
	ns := neighborSum{}
	ns.grid = grid
	ns.grid_len = len(grid[0]) - 1
	ns.num_lookup = make(map[int][]int)
	for y_index, row := range grid {
		for x_index, row_val := range row {
			ns.num_lookup[row_val] = []int{x_index, y_index}
		}
	}

	return ns
}

func (this *neighborSum) AdjacentSum(value int) int {

	x := this.num_lookup[value][0]
	y := this.num_lookup[value][1]

	top := this.GetGridVal(x, y-1)
	right := this.GetGridVal(x+1, y)
	down := this.GetGridVal(x, y+1)
	left := this.GetGridVal(x-1, y)

	return top + right + down + left
}

func (this *neighborSum) DiagonalSum(value int) int {
	x := this.num_lookup[value][0]
	y := this.num_lookup[value][1]

	top_right := this.GetGridVal(x+1, y-1)
	bottom_right := this.GetGridVal(x+1, y+1)
	bottom_left := this.GetGridVal(x-1, y+1)
	top_left := this.GetGridVal(x-1, y-1)

	return top_right + bottom_right + bottom_left + top_left
}

func (this *neighborSum) GetGridVal(x, y int) int {
	if y < 0 || x < 0 {
		return 0
	}

	if y > this.grid_len || x > this.grid_len {
		return 0
	}

	return this.grid[y][x]
}

/**
 * Your neighborSum object will be instantiated and called as such:
 * obj := Constructor(grid);
 * param_1 := obj.AdjacentSum(value);
 * param_2 := obj.DiagonalSum(value);
 */

func main() {
	// ["neighborSum", "adjacentSum", "adjacentSum", "diagonalSum", "diagonalSum"]

	grid := [][]int{{0, 1, 2}, {3, 4, 5}, {6, 7, 8}}
	// values := []int{1, 4, 4, 8}

	obj := Constructor(grid)
	fmt.Println(obj.AdjacentSum(4))
	fmt.Println(obj.DiagonalSum(4))

	fmt.Println(obj.grid_len)

	// Output: [null, 6, 16, 16, 4]

}
