<?php
// Given a positive integer n, find the pivot integer x such that:

// The sum of all elements between 1 and x inclusively equals the sum of all elements between x and n inclusively.
// Return the pivot integer x. If no such integer exists, return -1. It is guaranteed that there will be at most one pivot index for the given input.



// Example 1:

$n = 8;
// Output: 6
// Explanation: 6 is the pivot integer since: 1 + 2 + 3 + 4 + 5 + 6 = 6 + 7 + 8 = 21.
// Example 2:

$n = 1;
// Output: 1
// Explanation: 1 is the pivot integer since: 1 = 1.
// Example 3:

$n = 4;
// Output: -1
// Explanation: It can be proved that no such integer exist.


// Constraints:

// 1 <= n <= 1000
class Solution
{

  /**
   * @param Integer $n
   * @return Integer
   */
    public function pivotInteger($n)
    {
        $left_sum = 0;
        $right_sum = 0;
        for ($i = 1; $i <= $n; $i++) {
            $left_sum = array_sum(range(1, $i));
            $right_sum = array_sum(range($i, $n));
            if ($right_sum === $left_sum) {
                return $i;
            }

            // when our from 1 sum is greater than our $n to $i sum we no longer have a possible pivot
            if ($left_sum > $right_sum) {
                return -1;
            }
        }
    }
}
print_r((new Solution())->pivotInteger($n));
