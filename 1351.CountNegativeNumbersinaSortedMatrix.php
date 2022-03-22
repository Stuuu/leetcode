<?php
// Given a m x n matrix grid which is sorted in non-increasing order both row-wise and column-wise, return the number of negative numbers in grid.



// Example 1:

// Input: grid = [[4,3,2,-1],[3,2,1,-1],[1,1,-1,-2],[-1,-1,-2,-3]]
// Output: 8
// Explanation: There are 8 negatives number in the matrix.
// Example 2:

// Input: grid = [[3,2],[1,0]]
// Output: 0


// Constraints:

// m == grid.length
// n == grid[i].length
// 1 <= m, n <= 100
// -100 <= grid[i][j] <= 100


// Follow up: Could you find an O(n + m) solution?
class Solution
{

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function countNegatives($grid)
    {
        $ans = 0;
        $gc = count($grid[0]) - 1;
        foreach ($grid as $vals) {
            if ($vals[$gc] > 0) continue;
            for ($i = $gc; $i >= 0; $i--) {
                if ($vals[$i] >= 0) break;
                $ans++;
            }
        }
        return $ans;
    }
}
$grid = [[4, 3, 2, -1], [3, 2, 1, -1], [1, 1, -1, -2], [-1, -1, -2, -3]];
// Output: 8
// Explanation: There are 8 negatives number in the matrix.
// Example 2:

// $grid = [[3, 2], [1, 0]];
// Output: 0
(new Solution())->countNegatives($grid);
