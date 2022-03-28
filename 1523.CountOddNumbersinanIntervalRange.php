<?php
// Given two non-negative integers low and high. Return the count of odd numbers between low and high (inclusive).

// Example 1:

$low = 3;
$high = 7;
// Output: 3
// Explanation: The odd numbers between 3 and 7 are [3,5,7].
// Example 2:

$low = 8;
$high = 10;
// Output: 1
// Explanation: The odd numbers between 8 and 10 are [9].
$low = 13;
$high = 18;
// Constraints:

// 0 <= low <= high <= 10^9
class Solution
{

    /**
     * @param int $low
     * @param int $high
     * @return int
     */
    function countOdds($low, $high)
    {

        $rc = $high - $low;
        if ($rc === 1) return 1;
        $ans = floor($rc / 2);
        if (($low % 2 !== 0) || ($high % 2 !== 0)) $ans++;

        return $ans;
    }
}
echo (new Solution())->countOdds($low, $high);
