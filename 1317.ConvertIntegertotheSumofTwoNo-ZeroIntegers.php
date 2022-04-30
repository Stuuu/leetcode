<?php
// No-Zero integer is a positive integer that does not contain any 0 in its decimal representation.

// Given an integer n, return a list of two integers [A, B] where:

// A and B are No-Zero integers.
// A + B = n
// The test cases are generated so that there is at least one valid solution. If there are many valid solutions you can return any of them.



// Example 1:

$n = 2;
// Output: [1,1]
// Explanation: A = 1, B = 1. A + B = n and both A and B do not contain any 0 in their decimal representation.
// Example 2:

// $n = 11;
// Output: [2,9]


// Constraints:

// 2 <= n <= 104
class Solution
{

  /**
   * @param Integer $n
   * @return Integer[]
   */
    public function getNoZeroIntegers($n)
    {
        for ($i = $n - 1; $i > 0; $i--) {
            if (str_contains($i . ($n - $i), "0")) {
                continue;
            }
            return [ $i, $n - $i];
        }
    }
}
print_r((new Solution())->getNoZeroIntegers($n));
