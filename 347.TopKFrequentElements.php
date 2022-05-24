<?php
// Given an integer array nums and an integer k, return the k most frequent elements. You may return the answer in any order.



// Example 1:

$nums = [1, 1, 1, 2, 2, 3];
$k = 2;
// Output: [1,2]
// Example 2:

// $nums = [1];
// $k = 1;
// Output: [1]


// Constraints:

// 1 <= nums.length <= 105
// k is in the range [1, the number of unique elements in the array].
// It is guaranteed that the answer is unique.
class Solution
{

  /**
   * @param int[] $nums
   * @param int $k
   * @return int[]
   */
  function topKFrequent($nums, $k)
  {
    $nums = array_count_values($nums);
    if (count($nums) === 1) {
      return array_keys($nums);
    }
    arsort($nums);
    $nums = array_slice($nums, 0, $k, true);
    return array_keys($nums);
  }
}

// $nums = [3, 0, 1, 0];
// $k = 1;


// $nums = [1, 2];
// $k = 2;
print_r((new Solution())->topKFrequent($nums, $k));
