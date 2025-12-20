<?php

// You are given a string s consisting of lowercase English letters.

// Return an integer denoting the maximum number of substrings you can split s into such that each substring starts with a distinct character (i.e., no two substrings start with the same character).



// Example 1:

// Input: s = "abab"

// Output: 2

// Explanation:

// Split "abab" into "a" and "bab".
// Each substring starts with a distinct character i.e 'a' and 'b'. Thus, the answer is 2.
// Example 2:

$s = "abcd";

// Output: 4

// Explanation:

// Split "abcd" into "a", "b", "c", and "d".
// Each substring starts with a distinct character. Thus, the answer is 4.
// Example 3:

// Input: s = "aaaa"

// Output: 1

// Explanation:

// All characters in "aaaa" are 'a'.
// Only one substring can start with 'a'. Thus, the answer is 1.


// Constraints:

// 1 <= s.length <= 105
// s consists of lowercase English letters.


class Solution
{

	/**
	 * @param String $s
	 * @return int
	 */
	function maxDistinct($s): int
	{
		$dist_vals = [];
		$i = 0;
		while (isset($s[$i])) {
			$dist_vals[$s[$i]] = 1;
			$i++;
		}
		return count($dist_vals);
	}
}

// v2 no split
// class Solution
// {

// 	/**
// 	 * @param String $s
// 	 * @return int
// 	 */
// 	function maxDistinct($s): int {
// 		$dist_vals = [];
// 		$len = strlen($s);
// 		for ($i=0; $i < $len; $i++) { 
// 			$dist_vals[$s[$i]] = 1;
// 		}
// 		return count($dist_vals);
// 	}
// }

// v1 not optimal
// class Solution
// {

// 	/**
// 	 * @param String $s
// 	 * @return int
// 	 */
// 	function maxDistinct($s): int {
// 		$dist_vals = [];
// 		foreach(str_split($s) as $letter) {
// 			$dist_vals[$letter] = 1;
// 		};
// 		return count($dist_vals);
// 	}
// }


echo (new Solution())->maxDistinct($s);
