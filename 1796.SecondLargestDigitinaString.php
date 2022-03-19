<?php
// Given an alphanumeric string s, return the second largest numerical digit that appears in s, or -1 if it does not exist.

// An alphanumeric string is a string consisting of lowercase English letters and digits.



// Example 1:

// Input: s = "dfa12321afd"
// Output: 2
// Explanation: The digits that appear in s are [1, 2, 3]. The second largest digit is 2.
// Example 2:

// Input: s = "abc1111"
// Output: -1
// Explanation: The digits that appear in s are [1]. There is no second largest digit. 


// Constraints:

// 1 <= s.length <= 500
// s consists of only lowercase English letters and/or digits.
class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function secondHighest($s)
    {
        $s_parts = str_split($s);

        $ints = [];
        foreach ($s_parts as $value) {
            if (is_numeric($value)) {
                $ints[$value] = $value;
            };
        }
        if (count($ints) <= 1) return -1;
        rsort($ints);
        return $ints[1];
    }
}
$s = "dfa12321afd";
// Output: 2
// Explanation: The digits that appear in s are [1, 2, 3]. The second largest digit is 2.
// Example 2:

$s = "abc1111";
// Output: -1
// Explanation: The digits that appear in s are [1]. There is no second largest digit. 
$s = "ck077";
echo (new Solution())->secondHighest($s);
