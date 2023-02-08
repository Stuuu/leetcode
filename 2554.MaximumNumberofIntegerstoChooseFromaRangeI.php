<?php
// You are given an integer array banned and two integers n and maxSum. You are choosing some number of integers following the below rules:

// The chosen integers have to be in the range [1, n].
// Each integer can be chosen at most once.
// The chosen integers should not be in the array banned.
// The sum of the chosen integers should not exceed maxSum.
// Return the maximum number of integers you can choose following the mentioned rules.



// Example 1:

// $banned = [1, 6, 5];
// $n = 5;
// $maxSum = 6;
// Output: 2
// Explanation: You can choose the integers 2 and 4.
// 2 and 4 are from the range [1, 5], both did not appear in banned, and their sum is 6, which did not exceed maxSum.
// Example 2:

$banned = [1, 2, 3, 4, 5, 6, 7];
$n = 8;
$maxSum = 1;
// Output: 0
// Explanation: You cannot choose any integer while following the mentioned conditions.
// Example 3:

$banned = [11];
$n = 7;
$maxSum = 50;
// Output: 7
// Explanation: You can choose the integers 1, 2, 3, 4, 5, 6, and 7.
// They are from the range [1, 7], all did not appear in banned, and their sum is 28, which did not exceed maxSum.


// Constraints:

// 1 <= banned.length <= 104
// 1 <= banned[i], n <= 104
// 1 <= maxSum <= 109
class Solution
{

  /**
   * @param int[] $banned
   * @param int $n
   * @param int $maxSum
   * @return int
   */
  function maxCount($banned, $n, $maxSum)
  {

    // The chosen integers have to be in the range [1, n].
    // Each integer can be chosen at most once.
    // The chosen integers should not be in the array banned.
    // The sum of the chosen integers should not exceed maxSum.
    // Return the maximum number of integers you can choose following the mentioned rules.

    sort($banned);
    $banned = array_flip($banned);

    $curr_int_sum = 0;
    $num_ints_added = 0;
    for ($i = 1; $i <= $n; $i++) {

      if (isset($banned[$i])) {
        continue;
      }

      if ((($curr_int_sum + $i) <= $maxSum)) {
        $curr_int_sum += $i;
        $num_ints_added++;
        continue;
      }
      break;
    }


    return $num_ints_added;
  }
}
(new Solution())->maxCount($banned, $n, $maxSum);
