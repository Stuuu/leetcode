<?php
// You are given a string s consisting of lowercase English letters, spaces, and digits.

// Let v be the number of vowels in s and c be the number of consonants in s.

// A vowel is one of the letters 'a', 'e', 'i', 'o', or 'u', while any other letter in the English alphabet is considered a consonant.

// The score of the string s is defined as follows:

// If c > 0, the score = floor(v / c) where floor denotes rounding down to the nearest integer.
// Otherwise, the score = 0.
// Return an integer denoting the score of the string.



// Example 1:

$s = "cooear";

// Output: 2

// Explanation:

// The string s = "cooear" contains v = 4 vowels ('o', 'o', 'e', 'a') and c = 2 consonants ('c', 'r').


// The score is floor(v / c) = floor(4 / 2) = 2.

// Example 2:

// $s = "axeyizou";

// Output: 1

// Explanation:

// The string s = "axeyizou" contains v = 5 vowels ('a', 'e', 'i', 'o', 'u') and c = 3 consonants ('x', 'y', 'z').

// The score is floor(v / c) = floor(5 / 3) = 1.

// Example 3:

// $s = "au 123";

// Output: 0

// Explanation:

// The string s = "au 123" contains no consonants (c = 0), so the score is 0.



// Constraints:

// 1 <= s.length <= 100
// s consists of lowercase English letters, spaces and digits.

class Solution
{

	private const CHARS = [
		"a" => 2,
		"e" => 2,
		"i" => 2,
		"o" => 2,
		"u" => 2,
		"b" => 1,
		"c" => 1,
		"d" => 1,
		"f" => 1,
		"g" => 1,
		"h" => 1,
		"j" => 1,
		"k" => 1,
		"l" => 1,
		"m" => 1,
		"n" => 1,
		"p" => 1,
		"q" => 1,
		"r" => 1,
		"s" => 1,
		"t" => 1,
		"v" => 1,
		"w" => 1,
		"x" => 1,
		"y" => 1,
		"z" => 1,
	];


	/**
	 * @param String $s
	 * @return Integer
	 */
	function vowelConsonantScore($s)
	{
		$c = 0;
		$v = 0;

		for ($i = 0; $i < strlen($s); $i++) {
			if (isset(self::CHARS[$s[$i]])) {
				if (self::CHARS[$s[$i]] === 1) {
					$c++;
					continue;
				}
				$v++;
			}
		}

		if ($c === 0) {
			return 0;
		}

		return floor($v / $c);
	}
}

echo (new Solution())->vowelConsonantScore($s);
