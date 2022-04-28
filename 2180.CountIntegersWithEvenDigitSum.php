<?php
// Given a positive integer num, return the number of positive integers less than or equal to num whose digit sums are even.

// The digit sum of a positive integer is the sum of all its digits.

// Example 1:

$num = 4;
// Output: 2
// Explanation:
// The only integers less than or equal to 4 whose digit sums are even are 2 and 4.
// Example 2:

// $num = 30;
// Output: 14
// Explanation:
// The 14 integers less than or equal to 30 whose digit sums are even are
// 2, 4, 6, 8, 11, 13, 15, 17, 19, 20, 22, 24, 26, and 28.


// Constraints:

// 1 <= num <= 1000
/**
 * Undocumented class
 *
 *
 */
class Solution
{
    public function countEven($num)
    {
        $ans = 0;
        foreach (range(1, $num) as $int) {
            if (array_sum(str_split($int)) % 2 === 0) {
                $ans++;
            }
        }
        return $ans;
    }
}
(new Solution())->countEven($num);
