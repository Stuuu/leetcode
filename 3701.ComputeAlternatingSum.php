<?php

// You are given an integer array nums.

// The alternating sum of nums is the value obtained by adding elements at even indices and subtracting elements at odd indices. That is, nums[0] - nums[1] + nums[2] - nums[3]...

// Return an integer denoting the alternating sum of nums.



// Example 1:

$nums = [1, 3, 5, 7];

// Output: -4

// Explanation:

// Elements at even indices are nums[0] = 1 and nums[2] = 5 because 0 and 2 are even numbers.
// Elements at odd indices are nums[1] = 3 and nums[3] = 7 because 1 and 3 are odd numbers.
// The alternating sum is nums[0] - nums[1] + nums[2] - nums[3] = 1 - 3 + 5 - 7 = -4.
// Example 2:

$nums = [100];

// Output: 100

// Explanation:

// The only element at even indices is nums[0] = 100 because 0 is an even number.
// There are no elements on odd indices.
// The alternating sum is nums[0] = 100.


// Constraints:

// 1 <= nums.length <= 100
// 1 <= nums[i] <= 100


class Solution
{

	/**
	 * @param int[] $nums
	 * @return int
	 */
	function alternatingSum($nums)
	{
		$sum = 0;
		foreach ($nums as $key => $num) {
			$is_even = (($key % 2) == 0);
			if ($is_even) {
				$sum += $num;
			} else {
				$sum -= $num;
			}
		}
		return  $sum;
	}
}

echo (new Solution())->alternatingSum($nums);
