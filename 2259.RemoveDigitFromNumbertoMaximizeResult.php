<?php
// You are given a string number representing a positive integer and a character digit.

// Return the resulting string after removing exactly one occurrence of digit from number such that the value of the resulting string in decimal form is maximized. The test cases are generated such that digit occurs at least once in number.



// Example 1:

$number = "123"; $digit = "3";
// Output: "12"
// Explanation: There is only one '3' in "123". After removing '3', the result is "12".
// Example 2:

$number = "1231"; $digit = "1";
// Output: "231"
// Explanation: We can remove the first '1' to get "231" or remove the second '1' to get "123".
// Since 231 > 123, we return "231".
// Example 3:

// $number = "551"; $digit = "5";
// Output: "51"
// Explanation: We can remove either the first or second '5' from "551".
// Both result in the string "51".


// Constraints:

// 2 <= number.length <= 100
// number consists of digits from '1' to '9'.
// digit is a digit from '1' to '9'.
// digit occurs at least once in number.
class Solution
{

  /**
   * @param String $number
   * @param String $digit
   * @return String
   */
    public function removeDigit($number, $digit)
    {
        $n_parts = str_split($number);
        $digit_locations = array_keys($n_parts, $digit, true);

        $possible_ans = [];
        foreach ($digit_locations as $loc_index) {
            $n_parts_copy = $n_parts;
            $n_parts_copy[$loc_index] = '';
            $possible_ans[] = implode($n_parts_copy);
        }
        return max($possible_ans);
    }
}
var_dump((new Solution())->removeDigit($number, $digit));
