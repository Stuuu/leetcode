<?php
// Given a 0-indexed integer array nums, find a 0-indexed integer array answer where:

// answer.length == nums.length.
// answer[i] = |leftSum[i] - rightSum[i]|.
// Where:

// leftSum[i] is the sum of elements to the left of the index i in the array nums. If there is no such element, leftSum[i] = 0.
// rightSum[i] is the sum of elements to the right of the index i in the array nums. If there is no such element, rightSum[i] = 0.
// Return the array answer.



// Example 1:

$nums = [10, 4, 8, 3];
// Output: [15,1,11,22]
// Explanation: The array leftSum is [0,10,14,22] and the array rightSum is [15,11,3,0].
// The array answer is [|0 - 15|,|10 - 11|,|14 - 3|,|22 - 0|] = [15,1,11,22].
// Example 2:

$nums = [1];
// Output: [0]
// Explanation: The array leftSum is [0] and the array rightSum is [0].
// The array answer is [|0 - 0|] = [0].


// Constraints:

// 1 <= nums.length <= 1000
// 1 <= nums[i] <= 105
class Solution
{

  /**
   * @param Integer[] $nums
   * @return Integer[]
   */
    public function leftRigthDifference($nums)
    {
        $ans = [];

        foreach ($nums as $index => $cur_num) {
            $left_sum =  array_sum(array_slice($nums, 0, $index));
            $right_sum = array_sum(array_slice($nums, $index + 1));
            $ans[] = abs($left_sum - $right_sum);
        }

        return $ans;
    }
}
(new Solution())->leftRigthDifference($nums);
