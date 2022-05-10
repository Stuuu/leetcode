<?php
// Given a string s, return the length of the longest substring between two equal characters, excluding the two characters. If there is no such substring return -1.

// A substring is a contiguous sequence of characters within a string.

// Example 1:

$s = "aa";
// Output: 0
// Explanation: The optimal substring here is an empty substring between the two 'a's.
// Example 2:

$s = "abca";
// Output: 2
// Explanation: The optimal substring here is "bc".
// Example 3:

$s = "cbzxy";
// Output: -1
// Explanation: There are no characters that appear twice in s.


// Constraints:

// 1 <= s.length <= 300
// // s contains only lowercase English letters.
class Solution
{

  /**
   * @param String $s
   * @return Integer
   */
    public function maxLengthBetweenEqualCharacters($s)
    {
        $s_parts = str_split($s);
        // no pairs return early
        $flipped = array_flip($s_parts);
        if (count($flipped) === strlen($s)) {
            return -1;
        }

        $ans = [];
        foreach ($flipped as $char => $useless) {
            $char_locations = array_keys($s_parts, $char);
            if (count($char_locations) <= 1) {
                continue;
            }
            $ans[$char] = max($char_locations) - min($char_locations);
        }
        return max($ans) - 1;
    }
}
echo (new Solution())->maxLengthBetweenEqualCharacters($s);
