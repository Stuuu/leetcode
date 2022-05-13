<?php
// You are given a 2D integer array ranges and two integers left and right. Each ranges[i] = [starti, endi] represents an inclusive interval between starti and endi.

// Return true if each integer in the inclusive range [left, right] is covered by at least one interval in ranges. Return false otherwise.

// An integer x is covered by an interval ranges[i] = [starti, endi] if starti <= x <= endi.



// Example 1:

$ranges = [[1,2],[3,4],[5,6]]; $left = 2; $right = 5;
// Output: true
// Explanation: Every integer between 2 and 5 is covered:
// - 2 is covered by the first range.
// - 3 and 4 are covered by the second range.
// - 5 is covered by the third range.
// Example 2:

$ranges = [[1,10],[10,20]]; $left = 21; $right = 21;
// Output: false
// Explanation: 21 is not covered by any range.


// Constraints:

// 1 <= ranges.length <= 50
// 1 <= starti <= endi <= 50
// 1 <= left <= right <= 50
class Solution
{

  /**
   * @param Integer[][] $ranges
   * @param Integer $left
   * @param Integer $right
   * @return Boolean
   */
    public function isCovered($ranges, $left, $right)
    {
        foreach (range($left, $right) as $val) {
            foreach ($ranges as $range) {
                // echo 'low: ' . $range[0] . ' val: ' . $val . ' high: ' . $range[1] . PHP_EOL;
                if (($val >= $range[0]) && ($val <= $range[1])) {
                    continue 2;
                }
            }
            return false;
        }
        return true;
    }
}
var_dump((new Solution())->isCovered($ranges, $left, $right));
