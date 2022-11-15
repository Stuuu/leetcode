<?php
// Given an array nums of n integers where nums[i] is in the range [1, n], return an array of all the integers in the range [1, n] that do not appear in nums.



// Example 1:

$nums = [4,3,2,7,8,2,3,1];
// Output: [5,6]
// Example 2:

$nums = [1,1];
// Output: [2]


// Constraints:

// n == nums.length
// 1 <= n <= 105
// 1 <= nums[i] <= n
class Solution
{

  /**
   * @param Integer[] $nums
   * @return Integer[]
   */
    public function findDisappearedNumbers($nums)
    {
        $num_count = count($nums);
        $nums = array_flip($nums);

        $ans = [];
        for ($i=1; $i <= $num_count; $i++) {
            if (!isset($nums[$i])) {
                $ans[] = $i;
            }
        }
        return $ans;
    }
}
(new Solution())->findDisappearedNumbers($nums);
