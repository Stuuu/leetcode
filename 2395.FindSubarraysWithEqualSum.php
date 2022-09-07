<?php
// Given a 0-indexed integer array nums, determine whether there exist two subarrays of length 2 with equal sum. Note that the two subarrays must begin at different indices.

// Return true if these subarrays exist, and false otherwise.

// A subarray is a contiguous non-empty sequence of elements within an array.



// Example 1:

$nums = [4, 2, 4];
// Output: true
// Explanation: The subarrays with elements [4,2] and [2,4] have the same sum of 6.
// Example 2:

$nums = [1,2,3,4,5];
// Output: false
// Explanation: No two subarrays of size 2 have the same sum.
// Example 3:

$nums = [0,0,0];
// Output: true
// Explanation: The subarrays [nums[0],nums[1]] and [nums[1],nums[2]] have the same sum of 0.
// Note that even though the subarrays have the same content, the two subarrays are considered different because they are in different positions in the original array.


// Constraints:

// 2 <= nums.length <= 1000
// -109 <= nums[i] <= 109
class Solution
{

  /**
   * @param int[] $nums
   * @return Boolean
   */
  public function findSubarrays($nums)
  {
    $sum_counts = [];

    foreach ($nums as $k => $num) {

      if (!isset($nums[$k + 1])) {
        break;
      }


      $sum = $num + $nums[$k + 1];
      if (isset($sum_counts[$sum])) {
        return true;
      }
      $sum_counts[$sum] = 1;
    }
    return false;
  }
}
var_dump((new Solution())->findSubarrays($nums));
