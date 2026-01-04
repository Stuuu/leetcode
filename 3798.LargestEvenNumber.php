<?php

// You are given a string s consisting only of the characters '1' and '2'.

// You may delete any number of characters from s without changing the order of the remaining characters.

// Return the largest possible resultant string that represents an even integer. If there is no such string, return the empty string "".



// Example 1:

$s = "1112";

// Output: "1112"

// Explanation:

// The string already represents the largest possible even number, so no deletions are needed.

// Example 2:

// $s = "221";

// Output: "22"

// Explanation:

// Deleting '1' results in the largest possible even number which is equal to 22.

// Example 3:

// $s = "1";

// Output: ""

// Explanation:

// There is no way to get an even number.



// Constraints:

// 1 <= s.length <= 100
// s consists only of the characters '1' and '2'.
class Solution
{

	/**
	 * @param string $s
	 * @return string
	 */
	function largestEven($s)
	{
		$s_len = strlen($s) - 1;

		$cut_line = null;
		for ($i = $s_len; $i >= 0; $i--) {
			if ($s[$i] === "2") {
				$cut_line = $i + 1;
				break;
			};
		}
		if ($cut_line) {
			return substr($s, 0,  $cut_line);
		}
		return "";
	}
}

echo (new Solution())->largestEven($s);
