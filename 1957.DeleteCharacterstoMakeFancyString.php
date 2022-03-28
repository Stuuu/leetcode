<?php
// A fancy string is a string where no three consecutive characters are equal.

// Given a string s, delete the minimum possible number of characters from s to make it fancy.

// Return the final string after the deletion. It can be shown that the answer will always be unique.



// Example 1:

$s = "leeetcode";
// Output: "leetcode"
// Explanation:
// Remove an 'e' from the first group of 'e's to create "leetcode".
// No three consecutive characters are equal, so return "leetcode".
// Example 2:

// $s = "aaabaaaa";
// Output: "aabaa"
// Explanation:
// Remove an 'a' from the first group of 'a's to create "aabaaaa".
// Remove two 'a's from the second group of 'a's to create "aabaa".
// No three consecutive characters are equal, so return "aabaa".
// Example 3:

$s = "aab";
// Output: "aab"
// Explanation: No three consecutive characters are equal, so return "aab".

// Constraints:

// 1 <= s.length <= 105
// s consists only of lowercase English letters.
class Solution
{

    /**
     * @param String $s
     * @return String
     */
    function makeFancyString($s)
    {
        $s_parts = str_split($s);
        foreach ($s_parts as $k => &$char) {
            if (
                $char === @$s_parts[$k + 1]
                && @$s_parts[$k + 1] === @$s_parts[$k + 2]
            ) {
                unset($s_parts[$k]);
            }
        }
        return implode('', $s_parts);
    }
}
echo (new Solution())->makeFancyString($s);
