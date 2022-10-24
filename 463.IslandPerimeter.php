<?php
// You are given row x col grid representing a map where grid[i][j] = 1 represents land and grid[i][j] = 0 represents water.

// Grid cells are connected horizontally/vertically (not diagonally). The grid is completely surrounded by water, and there is exactly one island (i.e., one or more connected land cells).

// The island doesn't have "lakes", meaning the water inside isn't connected to the water around the island. One cell is a square with side length 1. The grid is rectangular, width and height don't exceed 100. Determine the perimeter of the island.



// Example 1:


$grid = [[0, 1, 0, 0], [1, 1, 1, 0], [0, 1, 0, 0], [1, 1, 0, 0]];
// Output: 16
// Explanation: The perimeter is the 16 yellow stripes in the image above.
// Example 2:

$grid = [[1]];
// Output: 4
// Example 3:

$grid = [[1, 0]];
// Output: 4
class Solution
{
    const LAND_SYMBOL = 1;

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    public function islandPerimeter($grid)
    {
        return self::gridTraversal($grid);
    }


    public function gridTraversal(array $grid): int
    {
        $perim_total = 0;
        foreach ($grid as $row_index => $row_vals) {
            $row_perim = 0;
            foreach ($row_vals as $col_index => $col_val) {
                if ($col_val === self::LAND_SYMBOL) {
                    // col - 1, same row
                    $row_perim += @$grid[$row_index][$col_index - 1] !== self::LAND_SYMBOL ? 1 : 0;
                    // same col, row -1
                    $row_perim += @$grid[$row_index - 1][$col_index] !== self::LAND_SYMBOL ? 1 : 0;
                    // col + 1, same row
                    $row_perim += @$grid[$row_index][$col_index + 1] !== self::LAND_SYMBOL ? 1 : 0;
                    // same col, row + 1
                    $row_perim += @$grid[$row_index + 1][$col_index] !== self::LAND_SYMBOL ? 1 : 0;
                }
            }
            $perim_total += $row_perim;
        }
        return $perim_total;
    }
}
echo (new Solution())->islandPerimeter($grid);
