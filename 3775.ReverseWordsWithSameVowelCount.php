<?php
// You are given a string s consisting of lowercase English words, each separated by a single space.

// Determine how many vowels appear in the first word. Then, reverse each following word that has the same vowel count. Leave all remaining words unchanged.

// Return the resulting string.

// Vowels are 'a', 'e', 'i', 'o', and 'u'.



// Example 1:

$s = "cat and mice";

// Output: "cat dna mice"

// Explanation:​​​​​​​

// The first word "cat" has 1 vowel.
// "and" has 1 vowel, so it is reversed to form "dna".
// "mice" has 2 vowels, so it remains unchanged.
// Thus, the resulting string is "cat dna mice".
// Example 2:

$s = "book is nice";

// Output: "book is ecin"

// Explanation:

// The first word "book" has 2 vowels.
// "is" has 1 vowel, so it remains unchanged.
// "nice" has 2 vowels, so it is reversed to form "ecin".
// Thus, the resulting string is "book is ecin".
// Example 3:


$s = "banana healthy";


// Output: "banana healthy"

// Explanation:

// The first word "banana" has 3 vowels.
// "healthy" has 2 vowels, so it remains unchanged.
// Thus, the resulting string is "banana healthy".


// Constraints:

// 1 <= s.length <= 105
// s consists of lowercase English letters and spaces.
// Words in s are separated by a single space.
// s does not contain leading or trailing spaces.

class Solution
{
	
	private const VOWELS = [
		'a' => 1,
		'e' => 1,
		'i' => 1,
		'o' => 1,
		'u' => 1,
	];

	/**
	 * @param String $s
	 * @return String
	 */
	function reverseWords($s) {
		$words = explode(" ",$s);
		
		$should_flip_vowel_count = 0;
		$final_string = "";
		foreach($words as $index => $word) {
			$letters = str_split($word);
			$vowel_count = 0;
			foreach($letters as $letter) {
				if (isset(self::VOWELS[$letter])){
					$vowel_count++;
				}
			}
			if ($index === 0) {
				$should_flip_vowel_count = $vowel_count;
				$final_string .= $word;
				continue;
			}
			
			if ($vowel_count === $should_flip_vowel_count) {
				$final_string .= " " . strrev($word);
				continue;
			}
			$final_string .= " " . $word;
		}
		return $final_string;
	}
}

echo (new Solution())->reverseWords($s);