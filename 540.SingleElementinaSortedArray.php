<?php
// You are given a sorted array consisting of only integers where every element appears exactly twice, except for one element which appears exactly once.

// Return the single element that appears only once.

// Your solution must run in O(log n) time and O(1) space.



// Example 1:

$nums = [1,1,2,3,3,4,4,8,8];
// Output: 2
// Example 2:

$nums = [3,3,7,7,10,11,11];
// Output: 10


// Constraints:

// 1 <= nums.length <= 105
// 0 <= nums[i] <= 105
class Solution
{

  /**
   * @param Integer[] $nums
   * @return Integer
   */
    public function singleNonDuplicate($nums)
    {
        $nums_count = count($nums);

        for ($i=0; $i < $nums_count; $i+= 2) {
            if ($nums[$i] !== $nums[$i + 1]) {
                return $nums[$i];
            }
        }
    }
}

var_dump((new Solution())->singleNonDuplicate($nums));
