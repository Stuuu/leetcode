<?php
// Given an integer num, repeatedly add all its digits until the result has only one digit, and return it.



// Example 1:

// Input: num = 38
// Output: 2
// Explanation: The process is
// 38 --> 3 + 8 --> 11
// 11 --> 1 + 1 --> 2 
// Since 2 has only one digit, return it.
// Example 2:

// Input: num = 0
// Output: 0


// Constraints:

// 0 <= num <= 231 - 1
class Solution
{

    /**
     * @param int $num
     * @return int
     */
    function addDigits($num)
    {
        if (strlen($num) === 1) return $num;

        $num_parts = str_split($num);
        while (true) {
            $sum = array_sum($num_parts);
            if (strlen($sum) === 1) return $sum;
            $num_parts = str_split($sum);
        }
    }
}
$num = 0;
// Output: 2
// Explanation: The process is
// 38 --> 3 + 8 --> 11
// 11 --> 1 + 1 --> 2 
echo (new Solution())->addDigits($num);
