<?php

// Roman numerals are represented by seven different symbols: I, V, X, L, C, D and M.

// Symbol       Value
// I             1
// V             5
// X             10
// L             50
// C             100
// D             500
// M             1000
// For example, 2 is written as II in Roman numeral, just two one's added together. 12 is written as XII, which is simply X + II. The number 27 is written as XXVII, which is XX + V + II.

// Roman numerals are usually written largest to smallest from left to right. However, the numeral for four is not IIII. Instead, the number four is written as IV. Because the one is before the five we subtract it making four. The same principle applies to the number nine, which is written as IX. There are six instances where subtraction is used:

// I can be placed before V (5) and X (10) to make 4 and 9. 
// X can be placed before L (50) and C (100) to make 40 and 90. 
// C can be placed before D (500) and M (1000) to make 400 and 900.
// Given a roman numeral, convert it to an integer.



// Example 1:

// Input: s = "III"
// Output: 3
// Explanation: III = 3.
// Example 2:

// Input: s = "LVIII"
// Output: 58
// Explanation: L = 50, V= 5, III = 3.
// Example 3:

// Input: s = "MCMXCIV"
// Output: 1994
// Explanation: M = 1000, CM = 900, XC = 90 and IV = 4.


// Constraints:

// 1 <= s.length <= 15
// s contains only the characters ('I', 'V', 'X', 'L', 'C', 'D', 'M').
// It is guaranteed that s is a valid roman numeral in the range [1, 3999].


class Solution
{

    const SYMBOL_VALS = [
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000,
    ];

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s)
    {

        $int_val = 0;
        $skip_next_char = false;
        $s = str_split($s);
        foreach ($s as $key => $char) {
            if ($skip_next_char) {
                $skip_next_char = false;
                continue;
            }
            if ($char == "I" && isset($s[$key + 1])) {


                if ($s[$key + 1] == 'V') {
                    $int_val += 4;
                    $skip_next_char = true;
                    continue;
                }
                if ($s[$key + 1] == 'X') {
                    $int_val += 9;
                    $skip_next_char = true;
                    continue;
                }
            }
            if ($char == "X" && isset($s[$key + 1])) {

                if ($s[$key + 1] == 'L') {
                    $int_val += 40;
                    $skip_next_char = true;
                    continue;
                }
                if ($s[$key + 1] == 'C') {
                    $int_val += 90;
                    $skip_next_char = true;
                    continue;
                }
            }
            if ($char == "C" && isset($s[$key + 1])) {

                if ($s[$key + 1] == 'D') {
                    $int_val += 400;
                    $skip_next_char = true;
                    continue;
                }
                if ($s[$key + 1] == 'M') {
                    $int_val += 900;
                    $skip_next_char = true;
                    continue;
                }
            }

            $int_val += self::SYMBOL_VALS[$char];
        }

        return $int_val;
    }
}


$roman_num = "MCMXCIV";
(new Solution())->romanToInt($roman_num);
