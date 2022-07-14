<?php
// Given an array of digit strings nums and a digit string target, return the number of pairs of indices (i, j) (where i != j) such that the concatenation of nums[i] + nums[j] equals target.



// Example 1:

$nums = ["777","7","77","77"]; $target = "7777";
// Output: 4
// Explanation: Valid pairs are:
// - (0, 1): "777" + "7"
// - (1, 0): "7" + "777"
// - (2, 3): "77" + "77"
// - (3, 2): "77" + "77"
// Example 2:

// $nums = ["123","4","12","34"]; $target = "1234";
// Output: 2
// Explanation: Valid pairs are:
// - (0, 1): "123" + "4"
// - (2, 3): "12" + "34"
// Example 3:

// $nums = ["1","1","1"]; $target = "11";
// Output: 6
// Explanation: Valid pairs are:
// - (0, 1): "1" + "1"
// - (1, 0): "1" + "1"
// - (0, 2): "1" + "1"
// - (2, 0): "1" + "1"
// - (1, 2): "1" + "1"
// - (2, 1): "1" + "1"


// Constraints:

// 2 <= nums.length <= 100
// 1 <= nums[i].length <= 100
// 2 <= target.length <= 100
// nums[i] and target consist of digits.
// nums[i] and target do not have leading zeros.
class Solution
{

  /**
   * @param String[] $nums
   * @param String $target
   * @return Integer
   */
    public function numOfPairs($nums, $target)
    {
      $ans = 0;
      foreach($nums as $k1 => $v1){
        foreach($nums as $k2 =>$v2){
          if($k1 === $k2){
            continue;
          }
          $test = $v1 . $v2;
          if ($test === $target){
            $ans++;
          }
        }
      }
      return $ans;
    }
}
(new Solution())->numOfPairs($nums, $target);
