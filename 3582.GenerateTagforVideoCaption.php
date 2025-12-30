<?php
// You are given a string caption representing the caption for a video.

// The following actions must be performed in order to generate a valid tag for the video:

// Combine all words in the string into a single camelCase string prefixed with '#'. A camelCase string is one where the first letter of all words except the first one is capitalized. All characters after the first character in each word must be lowercase.

// Remove all characters that are not an English letter, except the first '#'.

// Truncate the result to a maximum of 100 characters.

// Return the tag after performing the actions on caption.



// Example 1:

$caption = "Leetcode daily streak achieved";

// Output: "#leetcodeDailyStreakAchieved"

// Explanation:

// The first letter for all words except "leetcode" should be capitalized.

// Example 2:


$caption = "can I Go There";

// Output: "#canIGoThere"

// Explanation:

// The first letter for all words except "can" should be capitalized.

// Example 3:


// $caption = "hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh";

// Output: "#hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh"

// Explanation:

// Since the first word has length 101, we need to truncate the last two letters from the word.



// Constraints:

// 1 <= caption.length <= 150
// caption consists only of English letters and ' '.

class Solution
{
	/**
	 * @param String $caption
	 * @return String
	 */
	function generateTag($caption)
	{

		$result = "#";
		$cap_next_val = false;
		$result_size = 1;
		for ($i = 0; $i < 151; $i++) {
			if ($result_size === 100) break;
			if (!isset($caption[$i])) {
				break;
			}

			if ($caption[$i] === " ") {
				$cap_next_val = true;
				continue;
			}
			$result_size++;

			if ($cap_next_val && $result_size > 2) {
				$result .= strtoupper($caption[$i]);
				$cap_next_val = false;
				continue;
			}

			$result .= strtolower($caption[$i]);
			$cap_next_val = false;
		}
		return $result;
	}
}

echo (new Solution())->generateTag($caption);
