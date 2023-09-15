<?php
// You are given a 0-indexed 2D integer array nums representing the coordinates of the cars parking on a number line. For any index i, nums[i] = [starti, endi] where starti is the starting point of the ith car and endi is the ending point of the ith car.

// Return the number of integer points on the line that are covered with any part of a car.



// Example 1:

$nums = [[3, 6], [1, 5], [4, 7]];
// Output: 7
// Explanation: All the points from 1 to 7 intersect at least one car, therefore the answer would be 7.
// Example 2:

// $nums = [[1,3],[5,8]];
// Output: 7
// Explanation: Points intersecting at least one car are 1, 2, 3, 5, 6, 7, 8. There are a total of 7 points, therefore the answer would be 7.


// Constraints:

// 1 <= nums.length <= 100
// nums[i].length == 2
// 1 <= starti <= endi <= 100
class Solution
{

  /**
   * @param Integer[][] $nums
   * @return Integer
   */
  function numberOfPoints($nums)
  {

    $points_on_line = [];
    foreach ($nums as $num_set) {

      $range = range($num_set[0], $num_set[1]);


      $points_on_line = array_merge($points_on_line, $range);
    }
    return count(array_unique($points_on_line));
  }
}
echo (new Solution())->numberOfPoints($nums);
