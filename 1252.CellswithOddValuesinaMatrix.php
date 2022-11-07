<?php
// There is an m x n matrix that is initialized to all 0's. There is also a 2D array indices where each indices[i] = [ri, ci] represents a 0-indexed location to perform some increment operations on the matrix.

// For each location indices[i], do both of the following:

// Increment all the cells on row ri.
// Increment all the cells on column ci.
// Given m, n, and indices, return the number of odd-valued cells in the matrix after applying the increment to all locations in indices.



// Example 1:


// $m = 2; $n = 3; $indices = [[0,1],[1,1]];
// Output: 6
// Explanation: Initial matrix = [[0,0,0],[0,0,0]].
// After applying first increment it becomes [[1,2,1],[0,1,0]].
// The final matrix is [[1,3,1],[1,3,1]], which contains 6 odd numbers.
// Example 2:


$m = 2; $n = 2; $indices = [[1,1],[0,0]];
// Output: 0
// Explanation: Final matrix = [[2,2],[2,2]]. There are no odd numbers in the final matrix.


// Constraints:

// 1 <= m, n <= 50
// 1 <= indices.length <= 100
// 0 <= ri < m
// 0 <= ci < n
class Solution
{

  /**
   * @param int $m
   * @param int $n
   * @param int[][] $indices
   * @return int
   */
    public function oddCells($m, $n, $indices)
    {
        $matrix = [];
        // $m is number of rows
        for ($i=0; $i < $m; $i++) {
            // $n is number of colums
            $matrix[] = array_fill(0, $n, 0);
        }


        // increment values
        foreach ($indices as $incremnt_location) {
            $row = $incremnt_location[0];
            $col = $incremnt_location[1];

            // increment row
            foreach ($matrix[$row] as &$val) {
                $val++;
            }

            // increment column
            for ($c=0; $c < $m; $c++) {
                $matrix[$c][$col]++;
            }
        }

        //flatten matrix
        $matrix_values = array_merge(...$matrix);

        $odd_count = 0;
        foreach ($matrix_values as $value) {
            if ($value % 2 !== 0) {
                $odd_count++;
            }
        }
        return $odd_count;
    }
}
echo (new Solution())->oddCells($m, $n, $indices);
