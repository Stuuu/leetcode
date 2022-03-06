<?php

// ou are given a positive integer num consisting only of digits 6 and 9.

// Return the maximum number you can get by changing at most one digit (6 becomes 9, and 9 becomes 6).



// Example 1:

// Input: num = 9669
// Output: 9969
// Explanation: 
// Changing the first digit results in 6669.
// Changing the second digit results in 9969.
// Changing the third digit results in 9699.
// Changing the fourth digit results in 9666.
// The maximum number is 9969.
// Example 2:

// Input: num = 9996
// Output: 9999
// Explanation: Changing the last digit 6 to 9 results in the maximum number.
// Example 3:

// Input: num = 9999
// Output: 9999
// Explanation: It is better not to apply any change.


// Constraints:

// 1 <= num <= 104
// num consists of only 6 and 9 digits.
class Solution
{

    /**
     * @param int $num
     * @return int
     */
    function maximum69Number($num)
    {
        $max_num = 0;
        $num_parts = str_split($num);

        foreach ($num_parts as $key => $num) {
            $tmp_num_parts = $num_parts;
            if ($num == 6) {
                $tmp_num_parts[$key] = 9;
            }
            $altered_num = (int)implode('', $tmp_num_parts);
            if ($altered_num > $max_num) {
                $max_num = $altered_num;
            }
        }
        return $max_num;
    }
}



$num = 9999;
// Output: 9969
// Explanation: 
// Changing the first digit results in 6669.
// Changing the second digit results in 9969.
// Changing the third digit results in 9699.
// Changing the fourth digit results in 9666.
// The maximum number is 9969.
echo (new Solution())->maximum69Number($num);
