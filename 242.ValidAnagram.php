<?php
// Given two strings s and t, return true if t is an anagram of s, and false otherwise.

// An Anagram is a word or phrase formed by rearranging the letters of a different word or phrase, typically using all the original letters exactly once.



// Example 1:

$s = "anagram";
$t = "nagaram";
// Output: true
// Example 2:

$s = "rat";
$t = "car";
// Output: false


// Constraints:

// 1 <= s.length, t.length <= 5 * 104
// s and t consist of lowercase English letters.
class Solution
{

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t): bool
    {
        if (strlen($s) !== strlen($t)) return false;

        $words = array_map('str_split', [$s, $t]);
        sort($words[0]);
        sort($words[1]);

        foreach ($words[0] as $k => $char) {
            if ($char !== $words[1][$k]) return false;
        }
        return true;
    }
}
var_dump((new Solution())->isAnagram($s, $t));
