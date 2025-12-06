<?php
// You are given an integer array nums and an integer k.

// Return an integer denoting the sum of all elements in nums whose frequency is divisible by k, or 0 if there are no such elements.

// Note: An element is included in the sum exactly as many times as it appears in the array if its total frequency is divisible by k.



// Example 1:

$nums = [1, 2, 2, 3, 3, 3, 3, 4];
$k = 2;

// Output: 16

// Explanation:

// The number 1 appears once (odd frequency).
// The number 2 appears twice (even frequency).
// The number 3 appears four times (even frequency).
// The number 4 appears once (odd frequency).
// So, the total sum is 2 + 2 + 3 + 3 + 3 + 3 = 16.

// Example 2:

$nums = [1, 2, 3, 4, 5];
$k = 2;

// Output: 0

// Explanation:

// There are no elements that appear an even number of times, so the total sum is 0.

// Example 3:

$nums = [4, 4, 4, 1, 2, 3];
$k = 3;

// Output: 12

// Explanation:

// The number 1 appears once.
// The number 2 appears once.
// The number 3 appears once.
// The number 4 appears three times.
// So, the total sum is 4 + 4 + 4 = 12.



// Constraints:

// 1 <= nums.length <= 100
// 1 <= nums[i] <= 100

class Solution
{

	/**
	 * @param int[] $nums
	 * @param int $k
	 * @return int
	 */
	function sumDivisibleByK($nums, $k)
	{
		$num_counts = [];
		foreach ($nums as $num) {
			if (!isset($num_counts[$num])) {
				$num_counts[$num] = 1;
				continue;
			}
			$num_counts[$num]++;
		}

		$sum = 0;
		foreach ($num_counts as $num_key => $frequency) {

			if (($frequency % $k == 0)) {
				$sum += ($num_key * $frequency);
			}
		}
		return $sum;
	}
}

echo (new Solution())->sumDivisibleByK($nums, $k);
