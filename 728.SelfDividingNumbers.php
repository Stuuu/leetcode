<?php
// A self-dividing number is a number that is divisible by every digit it contains.

// For example, 128 is a self-dividing number because 128 % 1 == 0, 128 % 2 == 0, and 128 % 8 == 0.
// A self-dividing number is not allowed to contain the digit zero.

// Given two integers left and right, return a list of all the self-dividing numbers in the range [left, right].

// Example 1:

$left = 1;
$right = 22;
// Output: [1,2,3,4,5,6,7,8,9,11,12,15,22]
// Example 2:

$left = 47;
$right = 85;
// Output: [48,55,66,77]


// Constraints:

// 1 <= left <= right <= 104
class Solution
{

    /**
     * @param Integer $left
     * @param Integer $right
     * @return Integer[]
     */
    function selfDividingNumbers($left, $right)
    {

        $ans = range($left, $right);

        foreach ($ans as $k => &$val) {
            if (str_contains((string) $val, 0)) {
                unset($ans[$k]);
                continue;
            }
            foreach (str_split($val) as $k2 => $num) {
                if ($val % $num !== 0) {
                    unset($ans[$k]);
                    continue;
                }
            }
        }
        return $ans;
    }
}
(new Solution())->selfDividingNumbers($left, $right);
