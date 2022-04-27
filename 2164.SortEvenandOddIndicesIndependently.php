<?php
// You are given a 0-indexed integer array nums. Rearrange the values of nums according to the following rules:

// Sort the values at odd indices of nums in non-increasing order.
// For example, if nums = [4,1,2,3] before this step, it becomes [4,3,2,1] after. The values at odd indices 1 and 3 are sorted in non-increasing order.
// Sort the values at even indices of nums in non-decreasing order.
// For example, if nums = [4,1,2,3] before this step, it becomes [2,1,4,3] after. The values at even indices 0 and 2 are sorted in non-decreasing order.
// Return the array formed after rearranging the values of nums.

 

// Example 1:

$nums = [4,1,2,3];
// Output: [2,3,4,1]
// Explanation:
// First, we sort the values present at odd indices (1 and 3) in non-increasing order.
// So, nums changes from [4,1,2,3] to [4,3,2,1].
// Next, we sort the values present at even indices (0 and 2) in non-decreasing order.
// So, nums changes from [4,1,2,3] to [2,3,4,1].
// Thus, the array formed after rearranging the values is [2,3,4,1].
// Example 2:

$nums = [2,1];
// Output: [2,1]
// Explanation:
// Since there is exactly one odd index and one even index, no rearrangement of values takes place.
// The resultant array formed is [2,1], which is the same as the initial array.
 

// Constraints:

// 1 <= nums.length <= 100
class Solution
{

  /**
   * @param Integer[] $nums
   * @return Integer[]
   */
    public function sortEvenOdd($nums)
    {
        $o = [];
        $e = [];

        foreach ($nums as $key => $num) {
            if ($key % 2 === 0) {
                $e[] = $num;
            } else {
                $o[] = $num;
            }
        }
        sort($e);
        rsort($o);
        $ans = [];
        foreach ($e as $k2 => $item) {
            $ans[] = $item;
            if (!isset($o[$k2])) {
                break;
            }
            $ans[] = $o[$k2];
        }
        return $ans;
    }
}
$nums = [5,39,33,5,12,27,20,45,14,25,32,33,30,30,9,14,44,15,21];
$output = [5,45,9,39,12,33,14,30,20,27,21,25,30,15,32,14,33,5,44];
echo '[' . implode(',', (new Solution())->sortEvenOdd($nums)) . ']';
