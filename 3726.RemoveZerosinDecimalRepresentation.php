<?php

// You are given a positive integer n.

// Return the integer obtained by removing all zeros from the decimal representation of n.



// Example 1:

$n = 1020030;

// Output: 123

// Explanation:

// After removing all zeros from 1020030, we get 123.

// Example 2:

$n = 1;

// Output: 1

// Explanation:

// 1 has no zero in its decimal representation. Therefore, the answer is 1.



// Constraints:

// 1 <= n <= 1015


class Solution
{
	/**
	 * @param Integer $n
	 * @return Integer
	 */
	function removeZeros($n) {
		$n = (string) $n;
		$len = strlen($n);
		$result = "";
		for ($i=0; $i < $len; $i++) { 
			if ($n[$i] != "0") {
				$result .= $n[$i];
			}
		}
		return $result;
	}
}

echo (new Solution())->removeZeros($n);