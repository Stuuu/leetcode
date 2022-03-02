<?php
// Given two strings s and t, return true if s is a subsequence of t, or false otherwise.

// A subsequence of a string is a new string that is formed from the original string by deleting some (can be none) of the characters without disturbing the relative positions of the remaining characters. (i.e., "ace" is a subsequence of "abcde" while "aec" is not).



// Example 1:

// Input: s = "abc", t = "ahbgdc"
// Output: true
// Example 2:

// Input: s = "axc", t = "ahbgdc"
// Output: false


// Constraints:

// 0 <= s.length <= 100
// 0 <= t.length <= 104
// s and t consist only of lowercase English letters.
class Solution
{

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t)
    {
        if (!$s) return true;
        $s_parts = str_split($s);
        $t_parts = str_split($t);
        $s_size = strlen($s);
        $hit_count = 0;
        foreach ($t_parts as $char) {
            if ($char == $s_parts[0]) {
                array_shift($s_parts);
                $hit_count++;
                if ($hit_count == $s_size) return true;
            }
        }
        return false;
    }
}
$s = "abc";
$t = "ahbgdc";
// Output: true
$s = "axc";
$t = "ahbgdc";
var_dump((new Solution())->isSubsequence($s, $t));
