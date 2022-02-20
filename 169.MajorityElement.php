<?php

// Given an array nums of size n, return the majority element.

// The majority element is the element that appears more than ⌊n / 2⌋ times. You may assume that the majority element always exists in the array.



// Example 1:

// Input: nums = [3,2,3]
// Output: 3
// Example 2:

// Input: nums = [2,2,1,1,1,2,2]
// Output: 2


// Constraints:

// n == nums.length
// 1 <= n <= 5 * 104
// -231 <= nums[i] <= 231 - 1


class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums)
    {

        $num_counts = [];
        foreach ($nums as $num) {

            if (!isset($num_counts[$num])) {
                $num_counts[$num] = 1;
            } else {
                $num_counts[$num]++;
            }
        }


        return array_search(max($num_counts), $num_counts);
    }
}




$nums = [2, 2, 1, 1, 1, 2, 2];

echo (new Solution())->majorityElement($nums);
