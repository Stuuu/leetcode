<?php
// Given an integer array sorted in non-decreasing order, there is exactly one integer in the array that occurs more than 25% of the time, return that integer.



// Example 1:

// $arr = [1, 2, 2, 6, 6, 6, 6, 7, 10];
// Output: 6
// Example 2:

$arr = [1, 1];
// Output: 1


// Constraints:

// 1 <= arr.length <= 104
// 0 <= arr[i] <= 105
// Accepted
// 61,306
class Solution
{

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function findSpecialInteger($arr)
    {

        $ac = array_count_values($arr);
        return array_search(max($ac), $ac);
    }
}
echo (new Solution())->findSpecialInteger($arr);
