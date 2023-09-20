<?php
// You are given two positive integers low and high.

// An integer x consisting of 2 * n digits is symmetric if the sum of the first n digits of x is equal to the sum of the last n digits of x. Numbers with an odd number of digits are never symmetric.

// Return the number of symmetric integers in the range [low, high].



// Example 1:

$low = 1;
$high = 100;
// Output: 9
// Explanation: There are 9 symmetric integers between 1 and 100: 11, 22, 33, 44, 55, 66, 77, 88, and 99.
// Example 2:

// $low = 1200;
// $high = 1230;
// Output: 4
// Explanation: There are 4 symmetric integers between 1200 and 1230: 1203, 1212, 1221, and 1230.


// Constraints:

// 1 <= low <= high <= 104
class Solution
{

  /**
   * @param Integer $low
   * @param Integer $high
   * @return Integer
   */
  function countSymmetricIntegers($low, $high)
  {

    $sym_count = 0;
    foreach (range($low, $high) as  $value) {

      $val_length = strlen($value);

      // skip odd length values
      if ($val_length % 2 !== 0) {
        continue;
      }

      $split_size = $val_length / 2;

      $val_parts = str_split($value, $split_size);

      $first_half = str_split($val_parts[0]);

      $second_half = str_split($val_parts[1]);



      if (array_sum($first_half) !== array_sum($second_half)) {
        continue;
      };
      $sym_count++;
    }

    return $sym_count;
  }
}
echo (new Solution())->countSymmetricIntegers($low, $high);
