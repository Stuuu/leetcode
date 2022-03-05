<?php
// A phrase is a palindrome if, after converting all uppercase letters into lowercase letters and removing all non-alphanumeric characters, it reads the same forward and backward. Alphanumeric characters include letters and numbers.

// Given a string s, return true if it is a palindrome, or false otherwise.



// Example 1:

// Input: s = "A man, a plan, a canal: Panama"
// Output: true
// Explanation: "amanaplanacanalpanama" is a palindrome.
// Example 2:

// Input: s = "race a car"
// Output: false
// Explanation: "raceacar" is not a palindrome.
// Example 3:

// Input: s = " "
// Output: true
// Explanation: s is an empty string "" after removing non-alphanumeric characters.
// Since an empty string reads the same forward and backward, it is a palindrome.


// Constraints:

// 1 <= s.length <= 2 * 105
// s consists only of printable ASCII characters.
class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s)
    {
        $s = preg_replace("/[^A-Za-z0-9 ]/", '', $s);
        $s = strtolower($s);
        $s = str_replace(' ', '', $s);
        return $s == strrev($s);
    }
}

$s = "A man, a plan, a canal: Panama";
// Output: true
// Explanation: "amanaplanacanalpanama" is a palindrome.
$s = "race a car";
// Output: false
var_dump((new Solution())->isPalindrome($s));
