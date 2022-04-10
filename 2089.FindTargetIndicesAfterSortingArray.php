<?php
// You are given a 0-indexed integer array nums and a target element target.

// A target index is an index i such that nums[i] == target.

// Return a list of the target indices of nums after sorting nums in non-decreasing order. If there are no target indices, return an empty list. The returned list must be sorted in increasing order.

 

// Example 1:

$nums = [1,2,5,2,3]; $target = 2;
// Output: [1,2]
// Explanation: After sorting, nums is [1,2,2,3,5].
// The indices where nums[i] == 2 are 1 and 2.
// Example 2:

// $nums = [1,2,5,2,3]; $target = 3;
// Output: [3]
// Explanation: After sorting, nums is [1,2,2,3,5].
// The index where nums[i] == 3 is 3.
// Example 3:

// $nums = [1,2,5,2,3]; $target = 5;
// Output: [4]
// Explanation: After sorting, nums is [1,2,2,3,5].
// The index where nums[i] == 5 is 4.
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    public function targetIndices($nums, $target)
    {
        sort($nums);
        $ans = [];
        foreach ($nums as $k => $num) {
            if ($num > $target) {
                break;
            }
            if ($num == $target) {
                $ans[] = $k;
            }
        }
        return $ans;
    }
}
print_r((new Solution())->targetIndices($nums, $target));
