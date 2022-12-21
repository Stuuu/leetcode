<?php
// You are given a 0-indexed m x n binary matrix grid.

// A 0-indexed m x n difference matrix diff is created with the following procedure:

// Let the number of ones in the ith row be onesRowi.
// Let the number of ones in the jth column be onesColj.
// Let the number of zeros in the ith row be zerosRowi.
// Let the number of zeros in the jth column be zerosColj.
// diff[i][j] = onesRowi + onesColj - zerosRowi - zerosColj
// Return the difference matrix diff.



// Example 1:
$grid = [[0, 1, 1], [1, 0, 1], [0, 0, 1]];
// Output: [[0,0,4],[0,0,4],[-2,-2,2]]
// Explanation:
// - diff[0][0] = onesRow0 + onesCol0 - zerosRow0 - zerosCol0 = 2 + 1 - 1 - 2 = 0
// - diff[0][1] = onesRow0 + onesCol1 - zerosRow0 - zerosCol1 = 2 + 1 - 1 - 2 = 0
// - diff[0][2] = onesRow0 + onesCol2 - zerosRow0 - zerosCol2 = 2 + 3 - 1 - 0 = 4
// - diff[1][0] = onesRow1 + onesCol0 - zerosRow1 - zerosCol0 = 2 + 1 - 1 - 2 = 0
// - diff[1][1] = onesRow1 + onesCol1 - zerosRow1 - zerosCol1 = 2 + 1 - 1 - 2 = 0
// - diff[1][2] = onesRow1 + onesCol2 - zerosRow1 - zerosCol2 = 2 + 3 - 1 - 0 = 4
// - diff[2][0] = onesRow2 + onesCol0 - zerosRow2 - zerosCol0 = 1 + 1 - 2 - 2 = -2
// - diff[2][1] = onesRow2 + onesCol1 - zerosRow2 - zerosCol1 = 1 + 1 - 2 - 2 = -2
// - diff[2][2] = onesRow2 + onesCol2 - zerosRow2 - zerosCol2 = 1 + 3 - 2 - 0 = 2
// Example 2:


$grid = [[1, 1, 1], [1, 1, 1]];
// Output: [[5,5,5],[5,5,5]]
// Explanation:
// - diff[0][0] = onesRow0 + onesCol0 - zerosRow0 - zerosCol0 = 3 + 2 - 0 - 0 = 5
// - diff[0][1] = onesRow0 + onesCol1 - zerosRow0 - zerosCol1 = 3 + 2 - 0 - 0 = 5
// - diff[0][2] = onesRow0 + onesCol2 - zerosRow0 - zerosCol2 = 3 + 2 - 0 - 0 = 5
// - diff[1][0] = onesRow1 + onesCol0 - zerosRow1 - zerosCol0 = 3 + 2 - 0 - 0 = 5
// - diff[1][1] = onesRow1 + onesCol1 - zerosRow1 - zerosCol1 = 3 + 2 - 0 - 0 = 5
// - diff[1][2] = onesRow1 + onesCol2 - zerosRow1 - zerosCol2 = 3 + 2 - 0 - 0 = 5


// Constraints:

// m == grid.length
// n == grid[i].length
// 1 <= m, n <= 105
// 1 <= m * n <= 105
// grid[i][j] is either 0 or 1.
class Solution
{

    /**
     * @param Integer[][] $grid
     * @return Integer[][]
     */
    public function onesMinusZeros($grid)
    {
        $cols = [];
        $counts = [];
        foreach ($grid as $row_num => $row) {
            foreach ($row as $col_num => $col_value) {
                $cols[$col_num][] = $col_value;
            }
            $row_vals = array_count_values($row);
            $counts[$row_num]['r_zeros'] = isset($row_vals[0]) ? $row_vals[0] : 0;
            $counts[$row_num]['r_ones'] = isset($row_vals[1]) ? $row_vals[1] : 0;
        }

        foreach ($cols as $k => $col) {
            $col_vals = array_count_values($col);
            $counts[$k]['c_zeros'] = isset($col_vals[0]) ? $col_vals[0] : 0;
            $counts[$k]['c_ones'] = isset($col_vals[1]) ? $col_vals[1] : 0;
        }


        $ans = [];
        foreach ($grid as $row_num => $row) {
            foreach($row as $col_num => $col){
                // diff[i][j] = onesRowi + onesColj - zerosRowi - zerosColj

                $ans[$row_num][$col_num] =
                    $counts[$row_num]['r_ones']
                    + $counts[$col_num]['c_ones']
                    - $counts[$row_num]['r_zeros']
                    - $counts[$col_num]['c_zeros'];
            }
        }
        return $ans;
    }
}


(new Solution())->onesMinusZeros($grid);
