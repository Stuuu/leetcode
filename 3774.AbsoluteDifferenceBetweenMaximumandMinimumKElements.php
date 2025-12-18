<?php

// You are given an integer array nums and an integer k.

// Find the absolute difference between:

// the sum of the k largest elements in the array; and
// the sum of the k smallest elements in the array.
// Return an integer denoting this difference.



// Example 1:

$nums = [5, 2, 2, 4];
$k = 2;

// Output: 5

// Explanation:

// The k = 2 largest elements are 4 and 5. Their sum is 4 + 5 = 9.
// The k = 2 smallest elements are 2 and 2. Their sum is 2 + 2 = 4.
// The absolute difference is abs(9 - 4) = 5.
// Example 2:

$nums = [100];
$k = 1;

// Output: 0

// Explanation:

// The largest element is 100.
// The smallest element is 100.
// The absolute difference is abs(100 - 100) = 0.


// Constraints:

// 1 <= n == nums.length <= 100
// 1 <= nums[i] <= 100
// 1 <= k <= n


class Solution
{

	/**
	 * @param int[] $nums
	 * @param int $k
	 * @return int
	 */
	function absDifference($nums, $k)
	{
		sort($nums);
		$max_start = count($nums) - $k;

		$min_sum = 0;
		$max_sum = 0;
		
		foreach ($nums as $key => $value) {
			if ($key < $k) {
				$min_sum += $value;
			}

			if ($key >= $max_start) {
				$max_sum += $value;
			}
		}
		return $max_sum - $min_sum;
	}
}

echo (new Solution())->absDifference($nums, $k);
