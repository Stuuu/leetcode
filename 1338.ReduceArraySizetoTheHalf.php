<?php
// You are given an integer array arr. You can choose a set of integers and remove all the occurrences of these integers in the array.

// Return the minimum size of the set so that at least half of the integers of the array are removed.



// Example 1:

// $arr = [3,3,3,3,5,5,5,2,2,7];
// Output: 2
// Explanation: Choosing {3,7} will make the new array [5,5,5,2,2] which has size 5 (i.e equal to half of the size of the old array).
// Possible sets of size 2 are {3,5},{3,2},{5,2}.
// Choosing set {2,7} is not possible as it will make the new array [3,3,3,3,5,5,5] which has a size greater than half of the size of the old array.
// Example 2:

$arr = [7, 7, 7, 7, 7, 7];
// Output: 1
// Explanation: The only possible set you can choose is {7}. This will make the new array empty.


// Constraints:

// 2 <= arr.length <= 105
// arr.length is even.
// 1 <= arr[i] <= 105
class Solution
{

    /**
     * @param int[] $arr
     * @return int
     */
    public function minSetSize($arr)
    {
        $half_arr_size = count($arr) / 2;

        $array_counts = array_count_values($arr);

        $running_count = 0;
        $nums_counted = 0;
        rsort($array_counts);
        foreach ($array_counts as $num => $count) {
            $running_count += $count;
            $nums_counted++;
            if ($running_count >= $half_arr_size) {
                return $nums_counted;
            }
        }
    }
}
$arr = [9, 77, 63, 22, 92, 9, 14, 54, 8, 38, 18, 19, 38, 68, 58, 19];
echo (new Solution())->minSetSize($arr) . PHP_EOL;
