<?php
// You are given a 0-indexed string num of length n consisting of digits.

// Return true if for every index i in the range 0 <= i < n, the digit i occurs num[i] times in num, otherwise return false.



// Example 1:

$num = "1210";
// Output: true
// Explanation:
// num[0] = '1'. The digit 0 occurs once in num.
// num[1] = '2'. The digit 1 occurs twice in num.
// num[2] = '1'. The digit 2 occurs once in num.
// num[3] = '0'. The digit 3 occurs zero times in num.
// The condition holds true for every index in "1210", so return true.
// Example 2:

$num = "030";
// Output: false
// Explanation:
// num[0] = '0'. The digit 0 should occur zero times, but actually occurs twice in num.
// num[1] = '3'. The digit 1 should occur three times, but actually occurs zero times in num.
// num[2] = '0'. The digit 2 occurs zero times in num.
// The indices 0 and 1 both violate the condition, so return false.


// Constraints:

// n == num.length
// 1 <= n <= 10
// num consists of digits.
class Solution
{

  /**
   * @param String $num
   * @return Boolean
   */
  function digitCount($num)
  {
    $num_parts = str_split($num);
    $num_counts = array_count_values($num_parts);

    foreach ($num_parts as $digit => $freq) {
      if ($num_counts[$digit] == intval($freq)) {
        continue;
      }
      return false;
    }
    return true;
  }
}
var_dump((new Solution())->digitCount($num));
