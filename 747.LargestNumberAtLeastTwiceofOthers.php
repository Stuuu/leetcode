<?php
// You are given an integer array nums where the largest integer is unique.

// Determine whether the largest element in the array is at least twice as much as every other number in the array. If it is, return the index of the largest element, or return -1 otherwise.



// Example 1:

$nums = [3, 6, 1, 0];
// Output: 1
// Explanation: 6 is the largest integer.
// For every other number in the array x, 6 is at least twice as big as x.
// The index of value 6 is 1, so we return 1.
// Example 2:

// $nums = [1, 2, 3, 4];
// Output: -1
// Explanation: 4 is less than twice the value of 3, so we return -1.
// Example 3:

// $nums = [1];
// Output: 0
// Explanation: 1 is trivially at least twice the value as any other number because there are no other numbers.


// Constraints:

// 1 <= nums.length <= 50
// 0 <= nums[i] <= 100
// The largest element in nums is unique.
class Solution
{

    /**
     * @param int[] $nums
     * @return int
     */
    public function dominantIndex($nums)
    {
        $num_keys = array_flip($nums);
        sort($nums);
        $c = count($nums);
        if ($c === 1) {
            return 0;
        }
        if ($nums[$c - 1] >= (2 * $nums[$c - 2])) {
            return $num_keys[$nums[$c - 1]];
        }
        return -1;
    }
}
echo (new Solution())->dominantIndex($nums);
