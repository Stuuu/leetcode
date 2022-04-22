<?php
// Given two non-negative integers, num1 and num2 represented as string, return the sum of num1 and num2 as a string.

// You must solve the problem without using any built-in library for handling large integers (such as BigInteger). You must also not convert the inputs to integers directly.

 

// Example 1:

$num1 = "11"; $num2 = "123";
// Output: "134";
// Example 2:

$num1 = "456"; $num2 = "77";
// Output: "533";
// Example 3:

// $num1 = "0"; $num2 = "0";
// Output: "0"
 

// Constraints:

// 1 <= num1.length, num2.length <= 104
// num1 and num2 consist of only digits.
// num1 and num2 don't have any leading zeros except for the zero itself.
class Solution
{

  /**
   * @param String $num1
   * @param String $num2
   * @return String
   */
    public function addStrings($num1, $num2)
    {
        return bcadd($num1, $num2);
    }
}
var_dump((new Solution())->addStrings($num1, $num2));
