<?php
// Given a 0-indexed string word and a character ch, reverse the segment of word that starts at index 0 and ends at the index of the first occurrence of ch (inclusive). If the character ch does not exist in word, do nothing.

// For example, if word = "abcdefd" and ch = "d", then you should reverse the segment that starts at 0 and ends at 3 (inclusive). The resulting string will be "dcbaefd".
// Return the resulting string.



// Example 1:

$word = "abcdefd";
$ch = "d";
// Output: "dcbaefd"
// Explanation: The first occurrence of "d" is at index 3. 
// Reverse the part of word from 0 to 3 (inclusive), the resulting string is "dcbaefd".
// Example 2:

// $word = "xyxzxe";
// $ch = "z";
// Output: "zxyxxe"
// Explanation: The first and only occurrence of "z" is at index 3.
// Reverse the part of word from 0 to 3 (inclusive), the resulting string is "zxyxxe".
// Example 3:

$word = "abcd";
$ch = "z";
// Output: "abcd"
// Explanation: "z" does not exist in word.
// You should not do any reverse operation, the resulting string is "abcd".
// Constraints:
// 1 <= word.length <= 250
// word consists of lowercase English letters.
// ch is a lowercase English letter.
class Solution
{
    /**
     * @param String $word
     * @param String $ch
     * @return String
     */
    function reversePrefix($word, $ch)
    {
        $w_parts = str_split($word);
        $ch_location = array_search($ch, $w_parts);
        if ($ch_location === false) return $word;

        $ctr =  array_slice($w_parts, 0, $ch_location + 1);
        krsort($ctr);
        array_splice($w_parts, 0, $ch_location + 1, $ctr);
        return implode('', $w_parts);
    }
}
echo (new Solution())->reversePrefix($word, $ch);
