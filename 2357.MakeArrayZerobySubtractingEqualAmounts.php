<?php
// You are given a non-negative integer array nums. In one operation, you must:

// Choose a positive integer x such that x is less than or equal to the smallest non-zero element in nums.
// Subtract x from every positive element in nums.
// Return the minimum number of operations to make every element in nums equal to 0.



// Example 1:

$nums = [1,5,0,3,5];
// Output: 3
// Explanation:
// In the first operation, choose x = 1. Now, nums = [0,4,0,2,4].
// In the second operation, choose x = 2. Now, nums = [0,2,0,0,2].
// In the third operation, choose x = 2. Now, nums = [0,0,0,0,0].
// Example 2:

$nums = [0];
// Output: 0
// Explanation: Each element in nums is already 0 so no operations are needed.


// Constraints:

// 1 <= nums.length <= 100
// 0 <= nums[i] <= 100
class Solution
{

  /**
   * @param int[] $nums
   * @return int
   */
    public function minimumOperations($nums)
    {
        $current_min = 0;
        $total_ops = 0;
        sort($nums);
        foreach ($nums as $k => &$num) {
            if ($num === 0) {
                continue;
            }


            // save subtract num because we'll loose it with pass by ref
            $subtract_num = $num;
            for ($i=$k; $i < count($nums); $i++) {
                $nums[$i] -= $subtract_num;
            }
            echo implode(', ', $nums) . PHP_EOL;
            $total_ops++;
        }
        return $total_ops;
    }
}
echo (new Solution())->minimumOperations($nums);
