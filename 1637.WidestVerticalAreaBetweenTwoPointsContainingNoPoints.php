<?php
// Given n points on a 2D plane where points[i] = [xi, yi], Return the widest vertical area between two points such that no points are inside the area.

// A vertical area is an area of fixed-width extending infinitely along the y-axis (i.e., infinite height). The widest vertical area is the one with the maximum width.

// Note that points on the edge of a vertical area are not considered included in the area.



// Example 1:

// ​
$points = [[8, 7], [9, 9], [7, 4], [9, 7]];
// Output: 1
// Explanation: Both the red and the blue area are optimal.
// Example 2:

// $points = [[3,1],[9,0],[1,0],[1,4],[5,3],[8,8]];
// Output: 3


// Constraints:

// n == points.length
// 2 <= n <= 105
// points[i].length == 2
// 0 <= xi, yi <= 109
class Solution
{

  /**
   * @param Integer[][] $points
   * @return Integer
   */
  public function maxWidthOfVerticalArea($points)
  {
    $x_vals = [];
    foreach ($points as $index => $vals) {
      $x_vals[$vals[0]] = $vals[0];
    }
    sort($x_vals);


    $max_dist = 0;
    foreach ($x_vals as $k => $cur_x) {
      if (!isset($x_vals[$k + 1])) {
        break;
      }
      $dist =  ($x_vals[$k + 1]  - $cur_x);
      if($dist > $max_dist){
        $max_dist = $dist;
      }
    }

    return $max_dist;
  }
}
echo (new Solution())->maxWidthOfVerticalArea($points);
