<?php
// Given an integer array nums, move all 0's to the end of it while maintaining the relative order of the non-zero elements.

// Note that you must do this in-place without making a copy of the array.



// Example 1:

$nums = [0, 1, 0, 3, 12];
// Output: [1,3,12,0,0]
// Example 2:

$nums = [0];
// Output: [0]


// Constraints:

// 1 <= nums.length <= 104
// -231 <= nums[i] <= 231 - 1
class Solution
{

  /**
   * @param Integer[] $nums
   * @return NULL
   */
  function moveZeroes(&$nums)
  {

    $zero_locations = array_keys($nums, 0);

    foreach ($zero_locations as $location_index) {
      unset($nums[$location_index]);
      $nums[] = 0;
    }
  return $nums;
  }
}
print_r((new Solution())->moveZeroes($nums));
