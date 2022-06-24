<?php
// Given an integer array nums of length n where all the integers of nums are in the range [1, n] and each integer appears once or twice, return an array of all the integers that appears twice.

// You must write an algorithm that runs in O(n) time and uses only constant extra space.



// Example 1:

$nums = [4, 3, 2, 7, 8, 2, 3, 1];
// Output: [2,3]
// Example 2:

// $nums = [1, 1, 2];
// Output: [1]
// Example 3:

$nums = [1];
// Output: []


// Constraints:

// n == nums.length
// 1 <= n <= 105
// 1 <= nums[i] <= n
// Each element in nums appears once or twice.
class Solution
{

  /**
   * @param Integer[] $nums
   * @return Integer[]
   */
  function findDuplicates($nums)
  {
    if (count($nums) === 1) {
      return [];
    }
    $num_counts = array_fill_keys($nums, 0);
    foreach ($nums as $k => $num) {
      if ($num_counts[$num] < 2) {
        $num_counts[$num]++;
      }
    }
    return array_keys($num_counts, 2);
  }
}
(new Solution())->findDuplicates($nums);
