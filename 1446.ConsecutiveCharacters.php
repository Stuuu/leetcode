<?php
// The power of the string is the maximum length of a non-empty substring that contains only one unique character.

// Given a string s, return the power of s.



// Example 1:

// Input: s = "leetcode"
// Output: 2
// Explanation: The substring "ee" is of length 2 with the character 'e' only.
// Example 2:

// Input: s = "abbcccddddeeeeedcba"
// Output: 5
// Explanation: The substring "eeeee" is of length 5 with the character 'e' only.


// Constraints:

// 1 <= s.length <= 500
// s consists of only lowercase English letters.
class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function maxPower($s)
    {
        $c = 1;
        $ans = [];
        foreach (str_split($s) as $key => $char) {
            if ($char == $s[$key + 1]) {
                $c++;
                continue;
            }
            $ans[$c] = $char;
            $c = 1;
        };
        return max(array_keys($ans));
    }
}
$s = "leetcode";
// Output: 2
// Explanation: The substring "ee" is of length 2 with the character 'e' only.
// Example 2:

$s = "abbcccddddeeeeedcba";
// Output: 5
// Explanation: The substring "eeeee" is of length 5 with the character 'e' only.
echo (new Solution())->maxPower($s);
