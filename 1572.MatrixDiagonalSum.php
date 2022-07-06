<?php
// Given a square matrix mat, return the sum of the matrix diagonals.

// Only include the sum of all the elements on the primary diagonal and all the elements on the secondary diagonal that are not part of the primary diagonal.



// Example 1:


$mat = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9]
];
// Output: 25
// Explanation: Diagonals sum: 1 + 5 + 9 + 3 + 7 = 25
// Notice that element mat[1][1] = 5 is counted only once.
// Example 2:

$mat = [
  [1, 1, 1, 1],
  [1, 1, 1, 1],
  [1, 1, 1, 1],
  [1, 1, 1, 1]
];
// Output: 8
// Example 3:

$mat = [[5]];
// Output: 5


// Constraints:

// n == mat.length == mat[i].length
// 1 <= n <= 100
// 1 <= mat[i][j] <= 100
class Solution
{

  /**
   * @param Integer[][] $mat
   * @return Integer
   */
  function diagonalSum($mat)
  {
    $mat_len = count($mat[0]);
    if ($mat_len === 1) {
      return $mat[0][0];
    }


    $ans = [];
    foreach ($mat as $row_num => $row) {
      $sec_x = ($mat_len - 1) - $row_num;
      $fir_x = $row_num;

      $ans[$row_num . '-' . $sec_x] = $row[$sec_x];
      $ans[$row_num . '-' . $fir_x] = $row[$fir_x];
    }

    return     array_sum($ans);
  }
}
print_r((new Solution())->diagonalSum($mat));
