<?php
// Given an integer array nums, return the most frequent even element.

// If there is a tie, return the smallest one. If there is no such element, return -1.



// Example 1:

$nums = [0,1,2,2,4,4,1];
// Output: 2
// Explanation:
// The even elements are 0, 2, and 4. Of these, 2 and 4 appear the most.
// We return the smallest one, which is 2.
// Example 2:

// $nums = [4,4,4,9,2,4];
// Output: 4
// Explanation: 4 is the even element appears the most.
// Example 3:

// $nums = [29,47,21,41,13,37,25,7];
// Output: -1
// Explanation: There is no even element.
class Solution
{

  /**
   * @param int[] $nums
   * @return int
   */
    public function mostFrequentEven($nums)
    {
        $evens = [];
        foreach ($nums as $k => $num) {
            if (($num % 2) !== 0) {
                continue;
            }
            if (!isset($evens[$num])) {
                $evens[$num] = 1;
                continue;
            }
            $evens[$num]++;
        }

        if (empty($evens)) {
            return -1;
        }

        $highest_count = max($evens);
        $vals_with_highest_count = array_keys($evens, $highest_count);

        return min($vals_with_highest_count);
    }
}
echo (new Solution())->mostFrequentEven($nums);
