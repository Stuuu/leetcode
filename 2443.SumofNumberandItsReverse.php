<?php
// Given a non-negative integer num, return true if num can be expressed as the sum of any non-negative integer and its reverse, or false otherwise.



// Example 1:

$num = 443;
// Output: true
// Explanation: 172 + 271 = 443 so we return true.
// Example 2:

// $num = 63;
// Output: false
// Explanation: 63 cannot be expressed as the sum of a non-negative integer and its reverse so we return false.
// Example 3:

// $num = 181;
// Output: true
// Explanation: 140 + 041 = 181 so we return true. Note that when a number is reversed, there may be leading zeros.


// Constraints:

// 0 <= num <= 105
class Solution
{

  /**
   * @param int $num
   * @return Boolean
   */
  function sumOfNumberAndReverse($num)
  {

    if ($num === 0) {
      return true;
    }

    for ($i = 0; $i < $num; $i++) {
      $i_r = strrev((string) $i);
      if (($i + $i_r) === $num) {
        return true;
      }
    }
    return false;
  }
}
(new Solution())->sumOfNumberAndReverse($num);
