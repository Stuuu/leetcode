<?php
// Given an unsorted array of integers nums, return the length of the longest consecutive elements sequence.

// You must write an algorithm that runs in O(n) time.



// Example 1:

$nums = [100, 4, 200, 1, 3, 2];
// Output: 4
// Explanation: The longest consecutive elements sequence is [1, 2, 3, 4]. Therefore its length is 4.
// Example 2:

$nums = [0, 3, 7, 2, 5, 8, 4, 6, 0, 1];
// Output: 9


// Constraints:

// 0 <= nums.length <= 105
// -109 <= nums[i] <= 109
class Solution
{

  /**
   * @param int[] $nums
   * @return int
   */
  public function longestConsecutive($nums)
  {
    if (empty($nums)) {
      return 0;
    }
    $nums = array_unique($nums);
    sort($nums);
    $max = 0;
    $curr = 1;
    foreach ($nums as $k => $num) {
      if (isset($nums[$k + 1]) && $nums[$k + 1] === $num + 1) {
        $curr++;
        continue;
      } else {
        if ($curr > $max) {
          $max = $curr;
        }
        $curr = 1;
      }
      if ($curr > $max) {
        $max = $curr;
      }
    }
    return $max;
  }
}
// $nums = [1, 2, 0, 1];
echo (new Solution())->longestConsecutive($nums);
