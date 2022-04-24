<?php
// Given a fixed-length integer array arr, duplicate each occurrence of zero, shifting the remaining elements to the right.

// Note that elements beyond the length of the original array are not written. Do the above modifications to the input array in place and do not return anything.

 

// Example 1:

$arr = [1,0,2,3,0,4,5,0];
// Output: [1,0,0,2,3,0,0,4]
// Explanation: After calling your function, the input array is modified to: [1,0,0,2,3,0,0,4]
// Example 2:

// $arr = [1,2,3];
// Output: [1,2,3]
// Explanation: After calling your function, the input array is modified to: [1,2,3]
 

// Constraints:

// 1 <= arr.length <= 104
// 0 <= arr[i] <= 9
class Solution
{

  /**
   * @param Integer[] $arr
   * @return NULL
   */
    public function duplicateZeros(&$arr)
    {
        $c = count($arr);
        if (array_search(0, $arr, true) === false) {
            return;
        }

        $arr_2 = [];
        for ($i=0; $i < $c ; $i++) {
            if (count($arr_2) == $c) {
                break;
            }
            if ($arr[$i] === 0) {
                $arr_2[] = 0;
                if (count($arr_2) == $c) {
                    break;
                }
            }
            if (count($arr_2) == $c) {
                break;
            }
            $arr_2[] = $arr[$i];
        }
        $arr = $arr_2;
    }
}
$arr = [0,1,7,6,0,2,0,7];
// Output =  [0,0,1,7,6,0,0,2]
(new Solution())->duplicateZeros($arr);
