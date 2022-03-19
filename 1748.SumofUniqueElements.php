<?php
// You are given an integer array nums. The unique elements of an array are the elements that appear exactly once in the array.

// Return the sum of all the unique elements of nums.



// Example 1:

// Input: nums = [1,2,3,2]
// Output: 4
// Explanation: The unique elements are [1,3], and the sum is 4.
// Example 2:

// Input: nums = [1,1,1,1,1]
// Output: 0
// Explanation: There are no unique elements, and the sum is 0.
// Example 3:

// Input: nums = [1,2,3,4,5]
// Output: 15
// Explanation: The unique elements are [1,2,3,4,5], and the sum is 15.


// Constraints:

// 1 <= nums.length <= 100
// 1 <= nums[i] <= 100 
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function sumOfUnique($nums)
    {

        $sum = 0;
        $counts = array_count_values($nums);
        foreach ($counts as $val => $count) {
            if ($count === 1) {
                $sum += $val;
            }
        }
        return $sum;
    }
}


$nums = [1, 2, 3, 2];
// Output: 4
// Explanation: The unique elements are [1,3], and the sum is 4.
// Example 2:

// $nums = [1, 1, 1, 1, 1];
// Output: 0
// Explanation: There are no unique elements, and the sum is 0.
// Example 3:

// $nums = [1, 2, 3, 4, 5];
// Output: 15
// Explanation: The unique elements are [1,2,3,4,5], and the sum is 15.
echo (new Solution())->sumOfUnique($nums);
