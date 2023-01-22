<?php
// You are given a positive integer n. Each digit of n has a sign according to the following rules:

// The most significant digit is assigned a positive sign.
// Each other digit has an opposite sign to its adjacent digits.
// Return the sum of all digits with their corresponding sign.



// Example 1:

$n = 521;
// Output: 4
// Explanation: (+5) + (-2) + (+1) = 4.
// Example 2:

$n = 111;
// Output: 1
// Explanation: (+1) + (-1) + (+1) = 1.
// Example 3:

$n = 886996;
// Output: 0
// Explanation: (+8) + (-8) + (+6) + (-9) + (+9) + (-6) = 0.


// Constraints:

// 1 <= n <= 109
class Solution
{

  /**
   * @param Integer $n
   * @return Integer
   */
  function alternateDigitSum($n)
  {

    $current_is_positive = true;
    $ans = 0;

    $digit_parts = str_split((string) $n);
    foreach ($digit_parts as $key => $value) {
      if ($current_is_positive) {
        $ans += $value;
        $current_is_positive = false;
        continue;
      }

      $ans -= $value;
      $current_is_positive = true;
    }
    return $ans;
  }
}
echo (new Solution())->alternateDigitSum($n);
