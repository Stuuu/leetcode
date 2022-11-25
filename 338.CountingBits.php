<?php
// Given an integer n, return an array ans of length n + 1 such that for each i (0 <= i <= n), ans[i] is the number of 1's in the binary representation of i.



// Example 1:

$n = 2;
// Output: [0,1,1]
// Explanation:
// 0 --> 0
// 1 --> 1
// 2 --> 10
// Example 2:

$n = 5;
// Output: [0,1,1,2,1,2]
// Explanation:
// 0 --> 0
// 1 --> 1
// 2 --> 10
// 3 --> 11
// 4 --> 100
// 5 --> 101
class Solution {

  /**
   * @param Integer $n
   * @return Integer[]
   */
  function countBits($n) {

    $ans = [];
    for ($i=0; $i <= $n; $i++) {
      $bin_as_string = decbin($i);
      $ans[] = substr_count($bin_as_string, '1');
    }

    return $ans;
  }
}
print_r((new Solution())->countBits($n));
