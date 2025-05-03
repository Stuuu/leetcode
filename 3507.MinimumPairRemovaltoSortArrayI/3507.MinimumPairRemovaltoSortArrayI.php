<?php



class Solution
{

	/**
	 * @param int[] $nums
	 * @return int
	 */
	public function minimumPairRemoval(
		array $nums
	) {
		$pair_removal_opt_count = 0;

		while ($this->isNotInOrder($nums)) {
			$pair_sums = [];
			for ($i = 0; $i < count($nums); $i++) {
				if (isset($nums[$i + 1]) === false) {
					break;
				}
				$pair_sums[$i] = $nums[$i] + $nums[$i + 1];
			}

			asort($pair_sums);
			$min_key = array_key_first($pair_sums);

			foreach ($nums as $k => &$num) {
				if ($k === $min_key) {
					$nums[$min_key] = $pair_sums[$min_key];
					unset($nums[$min_key + 1]);
					$pair_removal_opt_count++;
					break;
				}
			}
			$nums = array_values($nums);
		}

		return $pair_removal_opt_count;
	}



	private function isNotInOrder(array $nums): bool
	{
		foreach ($nums as $k => $num) {
			if (isset($nums[$k + 1]) && $num > $nums[$k + 1]) {
				return true;
			}
		}
		return false;
	}
}
// Given an array nums, you can perform the following operation any number of times:

// Select the adjacent pair with the minimum sum in nums. If multiple such pairs exist, choose the leftmost one.
// Replace the pair with their sum.
// Return the minimum number of operations needed to make the array non-decreasing.

// An array is said to be non-decreasing if each element is greater than or equal to its previous element (if it exists).


// Example 1:

$nums = [5, 2, 3, 1];

// Output: 2

// Explanation:

// The pair (3,1) has the minimum sum of 4. After replacement, nums = [5,2,4].
// The pair (2,4) has the minimum sum of 6. After replacement, nums = [5,6].
// The array nums became non-decreasing in two operations.

// Example 2:

// $nums = [1, 2, 2];

// $nums = [2, 2, -1, 3, -2, 2, 1, 1, 1, 0, -1];

// Output: 0
// Explanation:

// The array nums is already sorted.



// Constraints:

// 1 <= nums.length <= 50
// -1000 <= nums[i] <= 1000
echo (new Solution())->minimumPairRemoval($nums) . PHP_EOL;
