<?php
// You are given an integer array nums.

// Choose three elements a, b, and c from nums at distinct indices such that the value of the expression a + b - c is maximized.

// Return an integer denoting the maximum possible value of this expression.



// Example 1:

$nums = [1, 4, 2, 5];

// Output: 8

// Explanation:

// We can choose a = 4, b = 5, and c = 1. The expression value is 4 + 5 - 1 = 8, which is the maximum possible.

// Example 2:

// $nums = [-2, 0, 5, -2, 4];

// Output: 11

// Explanation:

// We can choose a = 5, b = 4, and c = -2. The expression value is 5 + 4 - (-2) = 11, which is the maximum possible.



// Constraints:

// 3 <= nums.length <= 100
// -100 <= nums[i] <= 100


class Solution
{

	/**
	 * @param int[] $nums
	 * @return int
	 */
	function maximizeExpressionOfThree($nums)
	{
		sort($nums);
		$num_len = count($nums);
		return ($nums[$num_len - 1] + $nums[$num_len - 2]) - $nums[0];
	}
}

print_r((new Solution())->maximizeExpressionOfThree($nums));
