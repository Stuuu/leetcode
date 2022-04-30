<?php
// Given an binary array nums and an integer k, return true if all 1's are at least k places away from each other, otherwise return false.



// Example 1:


$nums = [1,0,0,0,1,0,0,1]; $k = 2;
// Output: true
// Explanation: Each of the 1s are at least 2 places away from each other.
// Example 2:


// $nums = [1,0,0,1,0,1]; $k = 2;
// Output: false
// Explanation: The second 1 and third 1 are only one apart from each other.
class Solution
{

  /**
   * @param Integer[] $nums
   * @param Integer $k
   * @return Boolean
   */
    public function kLengthApart($nums, $k)
    {
        $ones = array_diff($nums, [0]);

        $one_locations = array_fill(0, 1, array_keys($ones))[0];
        foreach ($one_locations as $index => $n) {
            if (!isset($one_locations[$index +1])) {
                break;
            }
            if ((($one_locations[$index +1] -1) - $n) < $k) {
                return false;
            }
        }
        return true;
    }
}
var_dump((new Solution())->kLengthApart($nums, $k));
