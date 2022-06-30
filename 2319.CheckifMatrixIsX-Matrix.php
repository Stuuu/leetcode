<?php
// A square matrix is said to be an X-Matrix if both of the following conditions hold:

//   All the elements in the diagonals of the matrix are non-zero.
//   All other elements are 0.
//   Given a 2D integer array grid of size n x n representing a square matrix, return true if grid is an X-Matrix. Otherwise, return false.



//   Example 1:


$grid = [[2, 0, 0, 1], [0, 3, 1, 0], [0, 5, 2, 0], [4, 0, 0, 2]];
//   Output: true
//   Explanation: Refer to the diagram above.
//   An X-Matrix should have the green elements (diagonals) be non-zero and the red elements be 0.
//   Thus, grid is an X-Matrix.
//   Example 2:


// $grid = [[5, 7, 0], [0, 3, 1], [0, 5, 0]];
//   Output: false
//   Explanation: Refer to the diagram above.
//   An X-Matrix should have the green elements (diagonals) be non-zero and the red elements be 0.
//   Thus, grid is not an X-Matrix.


//   Constraints:

//   n == grid.length == grid[i].length
//   3 <= n <= 100
//   0 <= grid[i][j] <= 105
class Solution
{

  /**
   * @param Integer[][] $grid
   * @return Boolean
   */
  function checkXMatrix($grid)
  {

    // Check from top right diagnol to bottom right.
    $left_right_diagnol = [];
    $right_left_diagnol = [];
    $col_and_row_length = count($grid[0]) - 1;
    $odd_row_skip = false;

    if ((($col_and_row_length + 1) % 2 !== 0)) {
      $odd_row_skip =  ($col_and_row_length / 2) + 1;
      $odd_row_skip--;
    }
    $total_array_sum = 0;
    foreach ($grid as $row_num => $row) {

      $total_array_sum += array_sum($row);

      // Non negative diagnol check
      $right_left_val = $row[$col_and_row_length - $row_num];
      $left_right_val = $row[$row_num];
      if ($right_left_val === 0 || $left_right_val === 0) {
        return false;
      }
      if ($odd_row_skip && $row_num == $odd_row_skip) {

        $left_right_diagnol[] = $left_right_val;
      } else {
        $left_right_diagnol[] = $left_right_val;
        $right_left_diagnol[] = $right_left_val;
      }
    }


    // check that all other values are zero
    $sum_of_all_diagnols = array_sum($left_right_diagnol) + array_sum($right_left_diagnol);
    if ($sum_of_all_diagnols !== $total_array_sum) {
      return false;
    }

    return true;
  }
}
$grid = [
  [2, 0, 0, 0, 1], // 3
  [0, 4, 0, 1, 5], // 3 + 10 = 13
  [0, 0, 5, 0, 0], // 18
  [0, 5, 0, 2, 0],
  [4, 0, 0, 0, 2]
];

$grid = [
  [5, 0, 20],
  [0, 5, 0],
  [6, 0, 2]
];

var_dump((new Solution())->checkXMatrix($grid));
