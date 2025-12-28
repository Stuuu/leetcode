<?php
// You are given an integer array nums.

// The binary reflection of a positive integer is defined as the number obtained by reversing the order of its binary digits (ignoring any leading zeros) and interpreting the resulting binary number as a decimal.

// Sort the array in ascending order based on the binary reflection of each element. If two different numbers have the same binary reflection, the smaller original number should appear first.

// Return the resulting sorted array.



// Example 1:

$nums = [4, 5, 4];

// Output: [4,4,5]

// Explanation:

// Binary reflections are:

// 4 -> (binary) 100 -> (reversed) 001 -> 1
// 5 -> (binary) 101 -> (reversed) 101 -> 5
// 4 -> (binary) 100 -> (reversed) 001 -> 1
// Sorting by the reflected values gives [4, 4, 5].
// Example 2:

$nums = [3,6,5,8];

// Output: [8,3,6,5]

// Explanation:

// Binary reflections are:

// 3 -> (binary) 11 -> (reversed) 11 -> 3
// 6 -> (binary) 110 -> (reversed) 011 -> 3
// 5 -> (binary) 101 -> (reversed) 101 -> 5
// 8 -> (binary) 1000 -> (reversed) 0001 -> 1
// Sorting by the reflected values gives [8, 3, 6, 5].
// Note that 3 and 6 have the same reflection, so we arrange them in increasing order of original value.


// Constraints:

// 1 <= nums.length <= 100
// 1 <= nums[i] <= 109

class Solution
{

	/**
	 * @param int[] $nums
	 * @return int[]
	 */
	function sortByReflection($nums)
	{
		sort($nums);
		$bin_reflection_vals = [];
		foreach ($nums as $key => $num) {
			$bin_reflection_vals[$key] = ltrim(strrev(decbin($num)), "0");
		}
		
		asort($bin_reflection_vals);
		$sorted_result = [];
		foreach ($bin_reflection_vals as $target_key => $value) {
			$sorted_result[] = $nums[$target_key];
		}

		return $sorted_result;
	}
}
$nums = [8, 2];
$nums = [657043124, 724593918, 291606865];
$nums = [999999937, 500000000, 250000000];

print_r((new Solution())->sortByReflection($nums));

