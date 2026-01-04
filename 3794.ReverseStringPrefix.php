<?php
// You are given a string s and an integer k.

// Reverse the first k characters of s and return the resulting string.



// Example 1:

$s = "abcd";
$k = 2;

// Output: "bacd"

// Explanation:​​​​​​​

// The first k = 2 characters "ab" are reversed to "ba". The final resulting string is "bacd".

// Example 2:

// $s = "xyz";
// $k = 3;

// Output: "zyx"

// Explanation:

// The first k = 3 characters "xyz" are reversed to "zyx". The final resulting string is "zyx".

// Example 3:

// $s = "hey"; $k = 1;

// Output: "hey"

// Explanation:

// The first k = 1 character "h" remains unchanged on reversal. The final resulting string is "hey".



// Constraints:

// 1 <= s.length <= 100
// s consists of lowercase English letters.
// 1 <= k <= s.length

class Solution
{

	/**
	 * @param string $s
	 * @param int $k
	 * @return string
	 */
	function reversePrefix($s, $k) {
		if ($k === 1) return $s;
		$p_one = substr($s, 0, $k);
		$p_two = substr($s, $k);
		return strrev($p_one) . $p_two;
	}
}
// $s = "hey"; $k= 2;
print_r((new Solution())->reversePrefix($s, $k));

