<?php
// An array is monotonic if it is either monotone increasing or monotone decreasing.

// An array nums is monotone increasing if for all i <= j, nums[i] <= nums[j]. An array nums is monotone decreasing if for all i <= j, nums[i] >= nums[j].

// Given an integer array nums, return true if the given array is monotonic, or false otherwise.



// Example 1:

$nums = [1,2,2,3];
// Output: true
// Example 2:

// $nums = [6,5,4,4];
// Output: true
// Example 3:

// $nums = [1,3,2];
// Output: false


// Constraints:

// 1 <= nums.length <= 105
// -105 <= nums[i] <= 105
class Solution {

  /**
   * @param Integer[] $nums
   * @return Boolean
   */
  function isMonotonic($nums)
  {
    $nums_desc = $nums_asc = $nums;
    sort($nums_asc);
    if($nums === $nums_asc){
      return true;
    }
    rsort($nums_desc);
    if($nums === $nums_desc){
      return true;
    }
    return false;
  }
}
var_dump((new Solution())->isMonotonic($nums));
