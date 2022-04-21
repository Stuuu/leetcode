<?php
// Given a string s consisting of some words separated by some number of spaces, return the length of the last word in the string.

// A word is a maximal substring consisting of non-space characters only.

// Example 1:

$s = "Hello World";
// Output: 5
// Explanation: The last word is "World" with length 5.
// Example 2:

// $s = "   fly me   to   the moon  ";
// Output: 4
// Explanation: The last word is "moon" with length 4.
// Example 3:

$s = "luffy is still joyboy";
// Output: 6
// Explanation: The last word is "joyboy" with length 6.

// $s = "a";
 

// Constraints:

// 1 <= s.length <= 104
// s consists of only English letters and spaces ' '.
// There will be at least one word in s.
class Solution
{

  /**
   * @param String $s
   * @return Integer
   */
    public function lengthOfLastWord($s)
    {
        $s = trim($s);
        $ans = strpos(strrev($s), ' ');
        return ($ans !== false) ? $ans : strlen($s);
    }
}

var_dump((new Solution())->lengthOfLastWord($s));
