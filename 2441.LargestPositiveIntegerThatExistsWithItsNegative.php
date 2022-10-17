<?php
// Given an integer array nums that does not contain any zeros, find the largest positive integer k such that -k also exists in the array.

// Return the positive integer k. If there is no such integer, return -1.



// Example 1:

$nums = [-1, 2, -3, 3];
// Output: 3
// Explanation: 3 is the only valid k we can find in the array.
// Example 2:

// $nums = [-1,10,6,7,-7,1];
// Output: 7
// Explanation: Both 1 and 7 have their corresponding negative values in the array. 7 has a larger value.
// Example 3:

// $nums = [-10,8,6,7,-2,-3];
// Output: -1
// Explanation: There is no a single valid k, we return -1.


// Constraints:

// 1 <= nums.length <= 1000
// -1000 <= nums[i] <= 1000
// nums[i] != 0

class Solution
{

  /**
   * @param Integer[] $nums
   * @return Integer
   */
  function findMaxK($nums)
  {
    $nums = array_flip($nums);
    krsort($nums);

    foreach ($nums as $num => $unused_old_key) {
      if ($num <= 0) {
        return -1;
      }

      if (isset($nums[(0 - $num)])) {
        return $num;
      }
    }
    return -1;
  }
}
var_dump((new Solution())->findMaxK($nums));
