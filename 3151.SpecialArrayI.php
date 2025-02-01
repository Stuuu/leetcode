<?php

// An array is considered special if every pair of its adjacent elements contains two numbers with different parity.

// You are given an array of integers nums. Return true if nums is a special array, otherwise, return false.



// Example 1:

$nums = [1];

// Output: true

// Explanation:

// There is only one element. So the answer is true.

// Example 2:

// $nums = [2,1,4];

// Output: true

// Explanation:

// There is only two pairs: (2,1) and (1,4), and both of them contain numbers with different parity. So the answer is true.

// Example 3:

// $nums = [4,3,1,6];

// Output: false

// Explanation:

// nums[1] and nums[2] are both odd. So the answer is false.
// Constraints:

// 1 <= nums.length <= 100
// 1 <= nums[i] <= 100
class Solution
{
    /**
     * @param int[] $nums
     * @return Boolean
     */
    function isArraySpecial($nums)
    {
        foreach ($nums as $k => $num) {
            if (!$nums[$k + 1]) {
                break;
            }
            if ($this->isEven($num) == ($this->isEven($nums[$k + 1]))) {
                return false;
            }
        }

        return true;
    }

    private function isEven(int $num): bool
    {
        return ($num % 2) == 0;
    }
}


var_dump((new Solution())->isArraySpecial($nums));
