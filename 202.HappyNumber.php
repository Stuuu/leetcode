<?php
// Write an algorithm to determine if a number n is happy.

// A happy number is a number defined by the following process:

// Starting with any positive integer, replace the number by the sum of the squares of its digits.
// Repeat the process until the number equals 1 (where it will stay), or it loops endlessly in a cycle which does not include 1.
// Those numbers for which this process ends in 1 are happy.
// Return true if n is a happy number, and false if not.



// Example 1:

$n = 19;
// Output: true
// Explanation:
// 12 + 92 = 82
// 82 + 22 = 68
// 62 + 82 = 100
// 12 + 02 + 02 = 1
// Example 2:

// $n = 2;
// Output: false


// Constraints:

// 1 <= n <= 231 - 1
class Solution
{

  /**
   * @param int $n
   * @return Boolean
   */
  public function isHappy($n)
  {
    $seen_sums = [];
    while (true) {
      $squared_parts = [];
      $n_parts = str_split($n);
      foreach ($n_parts as $part) {
        $squared_parts[] = pow($part, 2);
      }

      $new_n = array_sum($squared_parts);

      if ($new_n === 1) {
        return true;
      }

      if (isset($seen_sums[$new_n])) {
        return false;
      }
      $seen_sums[$new_n] = 1;

      $n = $new_n;
    }
  }
}
var_dump((new Solution())->isHappy($n));
