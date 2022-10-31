<?php
// Given an integer array nums of positive integers, return the average value of all even integers that are divisible by 3.

// Note that the average of n elements is the sum of the n elements divided by n and rounded down to the nearest integer.



// Example 1:

// $nums = [1,3,6,10,12,15];
// Output: 9
// Explanation: 6 and 12 are even numbers that are divisible by 3. (6 + 12) / 2 = 9.
// Example 2:

$nums = [1,2,4,7,10];
// Output: 0
// Explanation: There is no single number that satisfies the requirement, so return 0.


// Constraints:

// 1 <= nums.length <= 1000
// 1 <= nums[i] <= 1000
class Solution
{

  /**
   * @param int[] $nums
   * @return Integer
   */
    public function averageValue($nums)
    {
        $divisible_by_3 = [];
        foreach ($nums as $num) {
            if ($num % 2 === 0 && $num % 3 === 0) {
                $divisible_by_3[] = $num;
            }
        }

        $div_count = count($divisible_by_3);

        if ($div_count === 0) {
            return 0;
        }
        return floor(array_sum($divisible_by_3) / $div_count);
    }
}
var_dump((new Solution())->averageValue($nums));
