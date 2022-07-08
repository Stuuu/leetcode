<?php
// A sequence of numbers is called an arithmetic progression if the difference between any two consecutive elements is the same.

// Given an array of numbers arr, return true if the array can be rearranged to form an arithmetic progression. Otherwise, return false.



// Example 1:

$arr = [3, 5, 1];
// Output: true
// Explanation: We can reorder the elements as [1,3,5] or [5,3,1] with differences 2 and -2 respectively, between each consecutive elements.
// Example 2:

// $arr = [1, 2, 4];
// Output: false
// Explanation: There is no way to reorder the elements to obtain an arithmetic progression.
// Constraints:

// 2 <= arr.length <= 1000
// -106 <= arr[i] <= 106
class Solution
{

  /**
   * @param int[] $arr
   * @return Boolean
   */
  function canMakeArithmeticProgression($arr)
  {


    sort($arr);
    $dist_val = abs($arr[0] - $arr[1]);
    foreach ($arr as $k => $val) {
      if (!isset($arr[$k + 1])) {
        break;
      }

      if (abs($arr[$k + 1] - $val) !== $dist_val) {
        return false;
      };
    }

    return true;
  }
}
var_dump((new Solution())->canMakeArithmeticProgression($arr));
