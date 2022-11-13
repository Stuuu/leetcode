<?php
// You are given two integers, x and y, which represent your current location on a Cartesian grid: (x, y). You are also given an array points where each points[i] = [ai, bi] represents that a point exists at (ai, bi). A point is valid if it shares the same x-coordinate or the same y-coordinate as your location.

// Return the index (0-indexed) of the valid point with the smallest Manhattan distance from your current location. If there are multiple, return the valid point with the smallest index. If there are no valid points, return -1.

// The Manhattan distance between two points (x1, y1) and (x2, y2) is abs(x1 - x2) + abs(y1 - y2).



// Example 1:

$x = 3;
$y = 4;
$points = [[1, 2], [3, 1], [2, 4], [2, 3], [4, 4]];
// Output: 2
// Explanation: Of all the points, only [3,1], [2,4] and [4,4] are valid. Of the valid points, [2,4] and [4,4] have the smallest Manhattan distance from your current location, with a distance of 1. [2,4] has the smallest index, so return 2.
// Example 2:

$x = 3;
$y = 4;
$points = [[3, 4]];
// Output: 0
// Explanation: The answer is allowed to be on the same location as $your current location.
// Example 3:

$x = 3;
$y = 4;
$points = [[2, 3]];
// Output: -1
// Explanation: There are no valid points.


// Constraints:

// 1 <= points.length <= 104
// points[i].length == 2
// 1 <= x, y, ai, bi <= 104
class Solution
{

  /**
   * @param int $x
   * @param int $y
   * @param int[][] $points
   * @return int
   */
  function nearestValidPoint($x, $y, $points)
  {
    $qualifying_points = [];
    foreach ($points as $index => $point) {
      $x2 = $point[0];
      $y2 = $point[1];

      if ($x2 === $x || $y === $y2) {
        $man_dist = abs($x - $x2) + abs($y - $y2);
        $qualifying_points[$index] = $man_dist;
      }
    }

    if (count($qualifying_points) === 0) {
      return -1;
    }

    $shortest_dist = min($qualifying_points);
    $matching_shortest_dists = array_keys($qualifying_points, $shortest_dist);

    return $matching_shortest_dists[0];
  }
}
print_r((new Solution())->nearestValidPoint($x, $y, $points));
