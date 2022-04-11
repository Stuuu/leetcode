<?php
// Given an array of integers nums, sort the array in increasing order based on the frequency of the values. If multiple values have the same frequency, sort them in decreasing order.

// Return the sorted array.

// Example 1:

$nums = [1,1,2,2,2,3];
// Output: [3,1,1,2,2,2]
// Explanation: '3' has a frequency of 1, '1' has a frequency of 2, and '2' has a frequency of 3.
// Example 2:

$nums = [2,3,1,3,2];
// Output: [1,3,3,2,2]
// Explanation: '2' and '3' both have a frequency of 2, so they are sorted in decreasing order.
// Example 3:

$nums = [-1,1,-6,4,5,-6,1,4,1];
// Output: [5,-1,4,4,-6,-6,1,1,1]
 

// Constraints:

// 1 <= nums.length <= 100
// -100 <= nums[i] <= 100
class Solution
{

  /**
   * @param Integer[] $nums
   * @return Integer[]
   */
    public function frequencySort($nums)
    {
        $nums = array_map(
            function ($val) {
                return (string) $val;
            },
            $nums
        );
        $vals =  array_count_values($nums);
        asort($vals);
        
        $ans_groups = [];
        foreach ($vals as $val => $v_count) {
            $ans_groups[$v_count][] = $val;
        }

        $ans = [];
        foreach ($ans_groups as $counts => &$val) {
            rsort($val);
            foreach ($val as $v) {
                for ($i=0; $i < $counts; $i++) {
                    $ans[] = $v;
                }
            }
        }
        return $ans;
    }
}
(new Solution())->frequencySort($nums);
