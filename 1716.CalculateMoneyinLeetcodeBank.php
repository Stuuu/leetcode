<?php
// Hercy wants to save money for his first car. He puts money in the Leetcode bank every day.

// He starts by putting in $1 on Monday, the first day. Every day from Tuesday to Sunday, he will put in $1 more than the day before. On every subsequent Monday, he will put in $1 more than the previous Monday.
// Given n, return the total amount of money he will have in the Leetcode bank at the end of the nth day.



// Example 1:

$n = 4;
// Output: 10
// Explanation: After the 4th day, the total is 1 + 2 + 3 + 4 = 10.
// Example 2:

$n = 10;
// Output: 37
// Explanation: After the 10th day, the total is (1 + 2 + 3 + 4 + 5 + 6 + 7) + (2 + 3 + 4) = 37. Notice that on the 2nd Monday, Hercy only puts in $2.
// Example 3:

// $n = 20;
// Output: 96
// Explanation: After the 20th day, the total is (1 + 2 + 3 + 4 + 5 + 6 + 7) + (2 + 3 + 4 + 5 + 6 + 7 + 8) + (3 + 4 + 5 + 6 + 7 + 8) = 96.
// $n = 175;
// Output: 2800


// Constraints:

// 1 <= n <= 1000
class Solution
{

    /**
     * @param int $n
     * @return int
     */
    function totalMoney($n)
    {
        $final_week = ($n % 7);
        $full_weeks =  floor($n / 7);

        $b = 0;
        for ($i = 1; $i <= $full_weeks; $i++) {
            $b += array_sum(range($i, $i + 6));
        }


        if ($final_week !== 0) {
            $b += array_sum(range($i, $i + $final_week - 1));
        }

        return $b;
    }
}
echo (new Solution())->totalMoney($n);
